<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GeneralSetting;

class SettingController extends Controller
{
    public function generalSettingIndex(){
        $school_data = GeneralSetting::first();
        return view('admin.pages.settings.general-setting', [
            'data' => $school_data,
        ]);
    }
    
    public function storeGeneralSetting(Request $req){
        $validatedData = $req->validate([
            'school_name' => 'required|string|max:255',
            'school_phone' => 'required|regex:/^[0-9]{11}$/',
            'school_email' => 'required|email',
            'school_logo' => 'required|image|mimes:jpg,jpeg,png,gif|max:1024',
            'school_address' => 'required|string|max:500',
            'school_about' => 'required|string|max:1000',
        ]);
        $file_name = $req->school_logo->getClientOriginalName();
        $logo_file_name = time().'_'.$file_name;

        $req->school_logo->move(public_path('uploads'), $logo_file_name);

        

        // $general_setting = new GeneralSetting;
        // $general_setting->school_name = $req->school_name;
        // $general_setting->school_phone = $req->school_phone;
        // $general_setting->school_email = $req->school_email;
        // $general_setting->school_logo_url = $logo_file_name;
        // $general_setting->school_address = $req->school_address;
        // $general_setting->school_about = $req->school_about;
        // $general_setting->save();
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
