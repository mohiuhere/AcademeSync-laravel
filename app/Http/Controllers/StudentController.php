<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function studentIndex(){
        return view('admin.pages.students.student');
    }

    public function createStudentIndex(){
        return view('admin.pages.students.student-create');
    }

    public function promoteStudentIndex(){
        return view('admin.pages.students.promote-student');
    }
}
