<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Religion;
use App\Models\Gender;
use App\Models\BloodGroup;
use App\Models\Classes;
use App\Models\Section;
use App\Models\User;
use App\Models\Student;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function studentIndex(){
        $students = DB::select(
            "SELECT students.id as id,
            students.roll as roll_no,
            users.first_name as first_name,
            users.last_name as last_name,
            users.mobile as mobile,
            users.email as email,
            students.admission_date as admission_date,
            students.status as status
            FROM users JOIN students ON users.id = students.user_id;"
        );
        
        return view('admin.pages.students.student', [
            'students' => $students
        ]);
    }

    public function createStudentIndex(){
        $blood_group = BloodGroup::where('status', '=', 'true')->get();
        $gender = Gender::where('status', '=', 'true')->get();
        $religion = Religion::where('status', '=', 'true')->get();
        $classes = Classes::where('status', '=', 'true')->get();
        $section = Section::where('status', '=', 'true')->get();
        return view('admin.pages.students.student-create', [
            'blood_groups' => $blood_group,
            'genders' => $gender,
            'religions' => $religion,
            'classes'=> $classes,
            'sections'=> $section
        ]);
    }

    public function storeStudent(Request $req){
        $validated = $req->validate([
            'admission_no' => 'required|numeric',
            'roll_no' => 'required|numeric',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'mobile' => 'required|string|max:11',
            'email'=> 'required|email|max:255',
            'class_id'=> 'required|numeric',
            'section_id'=> 'required|numeric',
            'date_of_birth'=> 'required|date',
            'religion_id'=> 'required|numeric',
            'gender_id'=> 'required|numeric',
            'blood_group_id'=> 'required|numeric',
            'admission_date' => 'required|date',
            'image_url' => 'nullable|image',
            'status' => 'required|boolean',
            'address' => 'required|string|max:255',
        ]);
        if(request()->has('image_url')){
            $image_path = request()->file('image_url')->store('user-profile', 'public');
            $validate['image'] = $image_path;

            $user = new User;
            $user->first_name = $req->first_name;
            $user->last_name = $req->last_name;
            $user->user_type = 'student';
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

            $student = new Student;
            $student->admission_id = $req->admission_no;
            $student->roll = $req->roll_no;
            $student->user_id = $user->id;
            $student->admission_date = $req->admission_date;
            $student->status = $req->status;
            $student->save();
        }else{
            $user = new User;
            $user->first_name = $req->first_name;
            $user->last_name = $req->last_name;
            $user->user_type = 'student';
            $user->mobile = $req->mobile;
            $user->email = $req->email;
            $user->password = '123456';
            $user->image_url = 'public\img\undraw_profile_3.svg';
            $user->date_of_birth = $req->date_of_birth;
            $user->blood_group_id = $req->blood_group_id;
            $user->gender_id = $req->gender_id;
            $user->religion_id = $req->religion_id;
            $user->address = $req->address;
            $user->save();

            $student = new Student;
            $student->admission_id = $req->admission_no;
            $student->roll = $req->roll_no;
            $student->user_id = $user->id;
            $student->admission_date = $req->admission_date;
            $student->status = $req->status;
            $student->save();
        }
        return redirect()->route('student.index');
    }

    public function promoteStudentIndex(){
        return view('admin.pages.students.promote-student');
    }
}
