<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GeneralSetting;
use App\Models\Gender;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class SettingController extends Controller
{
    //------------------------General Setting---------------------------//
        public function generalSettingIndex(){
            $school_data = GeneralSetting::first();
            $img_url = url('storage/'.$school_data['school_logo_url']);
            // dd($school_data);
            return view('admin.pages.settings.general-setting', [
                'data' => $school_data,
                'img_url' => $img_url,
            ]);
        }
        
        public function storeGeneralSetting(Request $req){
            $validated = $req->validate([
                'school_name' => 'required|string|max:255',
                'school_phone' => 'required|string',
                'school_email' => 'required|email',
                'school_logo' => 'nullable|image',
                'school_address' => 'required|string|max:500',
                'school_about' => 'required|string|max:1000',
            ]);
            $school_data = GeneralSetting::first();
            $logo = $school_data['school_logo_url'];
            if(request()->has('school_logo')){
                $image_path = request()->file('school_logo')->store('school-profile', 'public');
                $validate['image'] = $image_path;

                Storage::disk('public')->delete($logo);

                DB::table('general_settings')
                ->where('id', 1)
                ->update([
                    'school_name' => $req->school_name,
                    'school_phone' => $req->school_phone,
                    'school_email' => $req->school_email,
                    'school_logo_url' => $image_path,
                    'school_address' => $req->school_address,
                    'school_about' => $req->school_about,
                    ]
                );
            }else{
                DB::table('general_settings')
                ->where('id', 1)
                ->update([
                    'school_name' => $req->school_name,
                    'school_phone' => $req->school_phone,
                    'school_email' => $req->school_email,
                    'school_address' => $req->school_address,
                    'school_about' => $req->school_about,
                    ]
                );
            }
            return redirect()->back();
            
        }
    //------------------------End General Setting---------------------------//


    //------------------------Gender---------------------------//
        public function genderIndex(){
            $data = Gender::all();
            // dd($data);
            return view('admin.pages.settings.gender', [
                'datas' => $data,
            ]);
        }

        public function createGenderIndex(){
            return view('admin.pages.settings.gender-create');
        }

        public function storeGender(Request $req){
            $validated = $req->validate([
                'gender_name' => 'required|string|max:255',
            ]);
            $gender = new Gender;
            $gender['gender_name'] = $req->gender_name;
            $gender['status'] = $req->gender_status;
            $gender->save();
            return redirect()->back();
        }

        public function editGenderIndex($id){
            $gender = new Gender;
            $data = $gender->find($id);
            // dd($data);
            return view('admin.pages.settings.gender-edit', [
                'data' => $data,
            ]);
        }
        
        public function editGender(Request $req){
            $validated = $req->validate([
                'gender_name' => 'required|string|max:255',
            ]);
            DB::table('genders')
                ->where('id', $req->id)
                ->update([
                    'gender_name' => $req->gender_name,
                    'status' => $req->gender_status,
                    ]
                );
            return redirect('/gender');
        }
    //------------------------End Gender---------------------------//

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
