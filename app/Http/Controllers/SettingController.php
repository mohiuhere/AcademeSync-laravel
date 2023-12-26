<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function generalSettingIndex(){
        return view('admin.pages.settings.general-setting');
    }

    public function genderIndex(){
        return view('admin.pages.settings.gender');
    }

    public function createGenderIndex(){
        return view('admin.pages.settings.gender-create');
    }

    public function religionIndex(){
        return view('admin.pages.settings.religion');
    }

    public function createReligionIndex(){
        return view('admin.pages.settings.religion-create');
    }

    public function bloodGroupIndex(){
        return view('admin.pages.settings.blood-group');
    }

    public function createBloodGroupIndex(){
        return view('admin.pages.settings.blood-group-create');
    }

    public function sessionIndex(){
        return view('admin.pages.settings.session');
    }
    public function createSessionIndex(){
        return view('admin.pages.settings.session-create');
    }
}
