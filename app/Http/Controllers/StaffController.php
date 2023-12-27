<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function teacherIndex(){
        return view('admin.pages.staff.teacher');
    }

    public function createTeacherIndex(){
        return view('admin.pages.staff.teacher-create');
    }
    public function assignAdminIndex(){
        return view('admin.pages.staff.assign-admin');
    }
}
