<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\AdminAssign;
use App\Models\User;
use App\Models\Religion;
use App\Models\Gender;
use App\Models\BloodGroup;
use App\Models\Teacher;

class StaffController extends Controller
{
    //---------------------Teacher-----------------------------------------//
        public function teacherIndex(){
            $teacher = DB::select(
                "SELECT teachers.id as id,
                teachers.teacher_uid as teacher_uid,
                users.first_name as first_name,
                users.last_name as last_name,
                users.mobile as mobile,
                users.email as email,
                teachers.basic_salary as basic_salary,
                teachers.joining_date as joining_date,
                teachers.status as status
                FROM users JOIN teachers ON users.id = teachers.user_id;"
            );
            return view('admin.pages.staff.teacher', [
                'datas' => $teacher,
            ]);
        }

        public function createTeacherIndex(){
            $blood_group = BloodGroup::where('status', '=', 'true')->get();
            $gender = Gender::where('status', '=', 'true')->get();
            $religion = Religion::where('status', '=', 'true')->get();
            return view('admin.pages.staff.teacher-create', [
                'blood_groups' => $blood_group,
                'genders' => $gender,
                'religions' => $religion,
            ]);
        }

        public function storeTeacher(Request $req){
            $validated = $req->validate([
                'teacher_uid' => 'required|numeric',
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'mobile' => 'required|string|max:11',
                'email' => 'required|email|max:255',
                'date_of_birth' => 'required|date',
                'blood_group_id' => 'required|numeric',
                'gender_id' => 'required|numeric',
                'religion_id' => 'required|numeric',
                'salary' => 'required|numeric',
                'emergency_contact' => 'required|string|max:11',
                'is_married' => 'required|boolean',
                'joining_date' => 'required|date',
                'user_img' => 'nullable|image',
                'status' => 'required|boolean',
                'address' => 'required|string|max:255',
            ]);
            if(request()->has('user_img')){
                $image_path = request()->file('user_img')->store('user-profile', 'public');
                $validate['image'] = $image_path;

                $user = new User;
                $user->first_name = $req->first_name;
                $user->last_name = $req->last_name;
                $user->user_type = 'teacher';
                $user->mobile = $req->mobile;
                $user->email = $req->email;
                $user->password = '123456';
                $user->image_url = $image_path;
                $user->date_of_birth = $req->date_of_birth;
                $user->blood_group_id = $req->blood_group_id;
                $user->gender_id = $req->gender_id;
                $user->religion_id = $req->religion_id;
                $user->address = $req->address;
                $user->save();

                $teacher = new Teacher;
                $teacher->teacher_uid = $req->teacher_uid;
                $teacher->user_id = $user->id;
                $teacher->emergency_contact = $req->emergency_contact;
                $teacher->basic_salary = $req->salary;
                $teacher->is_married = $req->is_married;
                $teacher->joining_date = $req->joining_date;
                $teacher->status = $req->status;
                $teacher->save();

                return redirect()->route('teacher.index');
            }
        }

        public function editTeacherIndex($id){
            $teacher = Teacher::find($id);
            $user = User::find($teacher->user_id);
            $religion = Religion::where('status', '=', 'true')->get();
            $blood_group = BloodGroup::where('status', '=', 'true')->get();
            $gender = Gender::where('status', '=', 'true')->get();
            return view('admin.pages.staff.teacher-edit', [
                'teacher' => $teacher,
                'user' => $user,
                'religions' => $religion,
                'blood_groups' => $blood_group,
                'genders' => $gender,
            ]);
        }

        public function editTeacher(){

        }

        public function deleteTeacher(){

        }
    //---------------------End Teacher-----------------------------------------//

    //---------------------Assign Admin-----------------------------------------//
        public function assignAdminIndex(){
            return view('admin.pages.staff.assign-admin');
        }

        public function storeAssignAdmin(Request $req){
            $validated = $req->validate([
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'mobile' => 'required|string|max:11',
                'email' => 'required|email',
            ]);
            $user = new User;
            $user->first_name = $req->first_name;
            $user->last_name = $req->last_name;
            $user->mobile = $req->mobile;
            $user->email = $req->email;
            $user->user_type = 'admin';
            $user->password = "123456";
            $user->save();

            $admin = new AdminAssign;
            $admin->user_id = $user->id;
            $admin->save();
            
        }
    //---------------------End Assign Admin-----------------------------------------//
}
