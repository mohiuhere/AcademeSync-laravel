<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GeneralSetting;
use App\Models\Gender;
use App\Models\Religion;
use App\Models\BloodGroup;
use App\Models\SessionList;
use App\Models\ActiveSession;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class SettingController extends Controller
{
    //------------------------General Setting---------------------------//
        public function generalSettingIndex(){
            $school_data = GeneralSetting::first();
            $img_url = url('storage/'.$school_data['school_logo_url']);
            // dd($img_url);
            return view('admin.pages.settings.general-setting', [
                'data' => $school_data,
                'img_url' => $img_url,
            ]);
        }
        
        public function storeGeneralSetting(Request $req){
            $validated = $req->validate([
                'school_name' => 'required|string|max:255',
                'school_phone' => 'required|string|max:11',
                'school_email' => 'required|email',
                'school_logo' => 'nullable|image',
                'school_address' => 'required|string|max:500',
                'school_about' => 'required|string|max:1000',
            ]);
            
            if(request()->has('school_logo')){
                $school_data = GeneralSetting::first();
                $logo = $school_data['school_logo_url'];
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
            $datas = Gender::all();
            // dd($data);
            return view('admin.pages.settings.gender', [
                'datas' => $datas,
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
            return redirect()->route('gender.index');
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
            return redirect()->route('gender.index');
        }

        public function deleteGender($id){
            DB::table('genders')->where('id', '=', $id)->delete();
            return redirect()->route('gender.index');
        }
    //------------------------End Gender---------------------------//


    //------------------------Religion---------------------------//
        public function religionIndex(){
            $datas = Religion::all();
            return view('admin.pages.settings.religion', [
                'datas' => $datas,
            ]);
        }

        public function createReligionIndex(){
            return view('admin.pages.settings.religion-create');
        }

        public function storeReligion(Request $req){
            $validated = $req->validate([
                'religion_name' => 'required|string|max:255',
            ]);
            $gender = new Religion;
            $gender['religion_name'] = $req->religion_name;
            $gender['status'] = $req->religion_status;
            $gender->save();
            return redirect()->route('religion.index');
        }

        public function editReligionIndex($id){
            $religion = new Religion;
            $data = $religion->find($id);
            // dd($data);
            return view('admin.pages.settings.religion-edit', [
                'data' => $data,
            ]);
        }

        public function editReligion(Request $req){
            $validated = $req->validate([
                'religion_name' => 'required|string|max:255',
            ]);
            DB::table('religions')
                ->where('id', $req->id)
                ->update([
                    'religion_name' => $req->religion_name,
                    'status' => $req->religion_status,
                ]
            );
            return redirect()->route('religion.index');
        }

        public function deleteReligion($id){
            DB::table('religions')->where('id', '=', $id)->delete();
            return redirect()->route('religion.index');
        }
    //------------------------End Religion---------------------------//


    //------------------------Blood Group---------------------------//
        public function bloodGroupIndex(){
            $datas = BloodGroup::all();
            return view('admin.pages.settings.blood-group', [
                'datas' => $datas,
            ]);
        }

        public function createBloodGroupIndex(){
            return view('admin.pages.settings.blood-group-create');
        }

        public function storeBloodGroup(Request $req){
            $validated = $req->validate([
                'name' => 'required|string|max:255',
            ]);
            $gender = new BloodGroup;
            $gender['blood_group_name'] = $req->name;
            $gender['status'] = $req->status;
            $gender->save();
            return redirect()->route('blood-group.index');
        }

        public function editBloodGroupIndex($id){
            $blood = new BloodGroup;
            $data = $blood->find($id);
            return view('admin.pages.settings.blood-group-edit', [
                'data' => $data,
            ]);
        }

        public function editBloodGroup(Request $req){
            $validated = $req->validate([
                'name' => 'required|string|max:255',
            ]);
            DB::table('blood_groups')
                ->where('id', $req->id)
                ->update([
                    'blood_group_name' => $req->name,
                    'status' => $req->gender_status,
                    ]
                );
            return redirect()->route('blood-group.index');
        }

        public function deleteBloodGroup($id){
            DB::table('blood_groups')->where('id', '=', $id)->delete();
            return redirect()->route('blood-group.index');
        }
    //------------------------End Blood Group---------------------------//
    

    //------------------------Session---------------------------//
        public function sessionIndex(){
            $datas = SessionList::all();
            return view('admin.pages.settings.session', [
                'datas' => $datas,
            ]);
        }
        public function createSessionIndex(){
            return view('admin.pages.settings.session-create');
        }

        public function activeSession(Request $req){
            $validated = $req->validate([
                'active_session_id' => 'required|numeric',
            ]);
            DB::update('UPDATE active_sessions SET active_session_list_id = ? WHERE id = ?', [$req->active_session_id, 1]);
            session(['active_session_list_id' => $req->active_session_id]);
        }

        public function storeSession(Request $req){
            $validated = $req->validate([
                'name' => 'required|string|max:255',
                'start_date' => 'required|date',
                'end_date'   => 'required|date|after:start_date'
            ]);
            $session = new SessionList;
            $session['session_list_name'] = $req->name;
            $session['status'] = $req->status;
            $session['start_date'] = $req->start_date;
            $session['end_date'] = $req->end_date;
            $session->save();
            return redirect()->route('session.index');
            // dd($req);
        }

        public function editSessionIndex($id){
            $session = new SessionList;
            $data = $session->find($id);
            return view('admin.pages.settings.session-edit', [
                'data' => $data,
            ]);
        }

        public function editSession(Request $req){
            $validated = $req->validate([
                'name' => 'required|string|max:255',
                'start_date' => 'required|date',
                'end_date'   => 'required|date|after:start_date'
            ]);
            DB::table('session_lists')
            ->where('id', $req->id)
            ->update([
                'session_list_name' => $req->name,
                'status' => $req->gender_status,
                'start_date' => $req->start_date,
                'end_date' => $req->end_date,
                ]
            );
            return redirect()->route('session.index');
        }

        public function deleteSession($id){
            DB::table('session_lists')->where('id', '=', $id)->delete();
            return redirect()->route('session.index');
        }
    //------------------------End Session---------------------------//
}
