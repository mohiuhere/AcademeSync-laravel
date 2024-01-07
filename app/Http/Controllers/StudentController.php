<?php

namespace App\Http\Controllers;

use App\Models\Religion;
use App\Models\Gender;
use App\Models\BloodGroup;
use App\Models\Classes;
use App\Models\Section;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function studentIndex(){
        return view('admin.pages.students.student');
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
        dd($validated);
    }

    public function promoteStudentIndex(){
        return view('admin.pages.students.promote-student');
    }
}
