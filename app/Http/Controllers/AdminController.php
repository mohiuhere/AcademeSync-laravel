<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminIndex(){
        return view('admin.pages.admin-dashbord');
    }
}
