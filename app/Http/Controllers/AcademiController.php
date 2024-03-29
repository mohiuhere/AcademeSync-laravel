<?php

namespace App\Http\Controllers;
use App\Models\Classes;
use App\Models\Section;
use App\Models\Subject;
use App\Models\ClassSetup;
use App\Models\Teacher;
use App\Models\SubjectAssign;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AcademiController extends Controller
{
    //---------------------------------------CLASSES-------------------------------------------------------/
    
        public function classIndex(){
            $classes = Classes::all();
            return view('admin.pages.academic.classes', [
                'datas' => $classes
            ]);
        }

        public function createClassIndex(){
            return view('admin.pages.academic.class-create');
        }

        public function storeClass(Request $req){
            $validated = $req->validate([
                'class_name' => 'required|string|max:255',
                'status' => 'required|boolean',
            ]);
            $classes = new Classes;
            $classes['class_name'] = $req->class_name;
            $classes['status'] = $req->status;
            $classes->save();
            return redirect()->route('class.index');
        }

        public function editClassIndex($id){
            $classes = Classes::find($id);
            return view('admin.pages.academic.classes-edit', [
                'data' => $classes,
            ]);
        }

        public function editClass(Request $req){
            $validated = $req->validate([
                'class_name' => 'required|string|max:255',
                'status' => 'required|boolean',
            ]);
            DB::table('classes')
                ->where('id', $req->id)
                ->update([
                    'class_name' => $req->class_name,
                    'status' => $req->status,
                ]
            );
            return redirect()->route('class.index');
        }

        public function deleteClass($id){
            DB::table('classes')->where('id', '=', $id)->delete();
            return redirect()->route('class.index');
        }

    //-------------------------------------END CLASSES-----------------------------------------------------/
    
    //---------------------------------------SECTION-------------------------------------------------------/

        public function sectionIndex(){
            $section = Section::all();
            return view('admin.pages.academic.section', [
                'datas' => $section,
            ]);
        }

        public function createSectionIndex(){
            return view('admin.pages.academic.section-create');
        }

        public function storeSection(Request $req){
            $validated = $req->validate([
                'section_name' => 'required|string|max:255',
                'status' => 'required|boolean',
            ]);
            $section = new Section;
            $section['section_name'] = $req->section_name;
            $section['status'] = $req->status;
            $section->save();
            return redirect()->route('section.index');
        }

        public function editSectionIndex($id){
            $section = Section::find($id);
            return view('admin.pages.academic.section-edit', [
                'data'=> $section
            ]);
            
        }

        public function editSection(Request $req){
            $validated = $req->validate([
                'section_name' => 'required|string|max:255',
                'status' => 'required|boolean',
            ]);
            DB::table('sections')
                ->where('id', $req->id)
                ->update([
                    'section_name' => $req->section_name,
                    'status' => $req->status,
                ]
            );
            return redirect()->route('section.index');
        }

        public function deleteSection($id){
            DB::table('sections')->where('id', '=', $id)->delete();
            return redirect()->route('section.index');
        }

    //-------------------------------------END SECTION-----------------------------------------------------/
    
    //-------------------------------------SUBJECT---------------------------------------------------------/
        public function subjectIndex(){
            $subject = Subject::all();
            return view('admin.pages.academic.subject', [
                'datas'=> $subject
            ]);
        }

        public function createSubjectIndex(){
            return view('admin.pages.academic.subject-create');
        }

        public function storeSubject(Request $req){
            $validated = $req->validate([
                'subject_name' => 'required|string|max:255',
                'subject_code' => 'required|string|max:255',
                'subject_type' => 'required|string|max:255',
                'status' => 'required|boolean',
            ]);

            $subject = new Subject;
            $subject['subject_name'] = $req->subject_name;
            $subject['subject_code'] = $req->subject_code;
            $subject['subject_type'] = $req->subject_type;
            $subject['status'] = $req->status;
            $subject->save();
            return redirect()->route('subject.index');
            
        }

        public function editSubjectIndex($id){
            $subject = Subject::find($id);
            return view('admin.pages.academic.subject-edit', [
                'data'=> $subject
            ]);
        }

        public function editSubject(Request $req){
            $validated = $req->validate([
                'subject_name' => 'required|string|max:255',
                'subject_code' => 'required|string|max:255',
                'subject_type' => 'required|string|max:255',
                'status' => 'required|boolean',
            ]);
            DB::table('subjects')
                ->where('id', $req->id)
                ->update([
                    'subject_name' => $req->subject_name,
                    'subject_code' => $req->subject_code,
                    'subject_type' => $req->subject_type,
                    'status' => $req->status,
                ]
            );
            return redirect()->route('subject.index');
        }

        public function deleteSubject($id){
            DB::table('subjects')->where('id', '=', $id)->delete();
            return redirect()->route('subject.index');
        }
    //-----------------------------------END SUBJECT-------------------------------------------------------/

    //---------------------------------------CLASS SETUP---------------------------------------------------/
    
        public function classSetupIndex(){
            $class_setups = DB::select('SELECT class_setups.id, classes.class_name, class_setups.sections_id, class_setups.status
            FROM class_setups
            JOIN classes ON class_setups.class_id = classes.id;');

            $sections = Section::all();

            return view('admin.pages.academic.class-setup', [
                'class_setups'=> $class_setups,
                'sections'=> $sections
            ]);
        }

        public function createClassSetupIndex(){
            $class = Classes::where('status','=','true')->get();
            $section = Section::where('status','=','true')->get();
            return view('admin.pages.academic.class-setup-create', [
                'classes'=> $class,
                'sections'=> $section
            ]);
        }

        public function storeClassSetup(Request $req){
            $validated = $req->validate([
                'class_id' => 'required|numeric',
                'sections_id' => "required|array|min:1",
                'status' => 'required|boolean'
            ]);

            $active_session_id = session()->get('active_session_list_id');

            $valid = ClassSetup::where('class_id', $req->class_id)->where('session_list_id', $active_session_id)->exists();

            if( !$valid ){
                DB::insert("INSERT INTO class_setups (class_id, sections_id, session_list_id, status)
                VALUES (?, ?, ?, ?);", [
                    $req->class_id,
                    json_encode($req->sections_id),
                    $active_session_id,
                    $req->status
                ]);
                return redirect()->route("class-setup.index");
                
            }
            return redirect()->back();  
        }

        public function editClassSetupIndex($id){
            $class = Classes::where('status','=','true')->get();
            $section = Section::where('status','=','true')->get();
            $class_setup = ClassSetup::find( $id );
            return view('admin.pages.academic.class-setup-edit', [
                'classes'=> $class,
                'sections'=> $section,
                'data' => $class_setup
            ]);
        }
        public function editClassSetup(Request $req){
            $validated = $req->validate([
                'class_id' => 'required|numeric',
                'sections_id' => "required|array|min:1",
                'status' => 'required|boolean'
            ]);
            DB::table('class_setups')
            ->where('id', $req->id)
            ->update([
                    'class_id' => $req->class_id,
                    'sections_id' => json_encode($req->sections_id),
                    'status' => $req->status
                ]
            );

            return redirect()->route("class-setup.index");
        }

        public function deleteClassSetup($id){
            DB::table('class_setups')->where('id', '=', $id)->delete();
            return redirect()->route('class-setup.index');
        }

    //-------------------------------------END CLASS SETUP-------------------------------------------------/

    //---------------------------------------SUBJECT ASSIGN------------------------------------------------/
        public function subjectAssignIndex(){
            $subject_assign = DB::select('SELECT
            subject_assigns.id,
            classes.class_name AS class_name,
            sections.section_name AS section_name
            FROM
                subject_assigns
            JOIN
                classes ON subject_assigns.class_id = classes.id
            JOIN
                sections ON subject_assigns.section_id = sections.id');

            // print_r($subject_assign);
            return view('admin.pages.academic.subject-assign', [
                'subject_assigns'=> $subject_assign
            ]);
        }

        public function createSubjectAssignIndex(){
            $class = Classes::where('status','=','true')->get();
            $section = Section::where('status','=','true')->get();
            $subjects = Subject::where('status','=','true')->get();
            $teachers_data = DB::select(
                'SELECT teachers.user_id, users.first_name, users.last_name
                FROM teachers
                JOIN users ON teachers.user_id = users.id
                WHERE status = true;');

            $teachers = [];
            foreach ($teachers_data as $item) {
                // Assuming you want to construct the 'name' as 'First Name + Last Name'
                $name = $item->first_name . ' ' . $item->last_name;

                // Add an entry to the $teachers array
                $teachers[] = ['id' => $item->user_id, 'name' => $name];
            }

            return view('admin.pages.academic.subject-assign-create',[
                'sections' => $section,
                'classes'=> $class,
                'teachers' => $teachers,
                'subjects' => $subjects
            ]);
        }

        public function storeSubjectAssign(Request $req){
            $validated = $req->validate([
                'class_id'=> 'required|numeric',
                'section_id' => 'required|numeric',
                'subject_id' => 'required|array|min:1',
                'subject_id.*' => 'required',
                'teacher_id' => 'required|array|min:1',
                'teacher_id.*' => 'required',
            ]);
            $valid = DB::select('SELECT * FROM subject_assigns WHERE class_id = ? AND section_id = ?', [
                $req->class_id,
                $req->section_id,
            ]);
            if(!$valid){
                $active_session_id = session()->get('active_session_list_id');
                DB::insert(
                    'INSERT INTO subject_assigns 
                    (class_id, section_id, session_list_id, subjects_id, teachers_id) 
                    VALUES (?, ?, ?, ?, ?)', [
                        $req->class_id,
                        $req->section_id,
                        $active_session_id,
                        json_encode($req->subject_id),
                        json_encode($req->teacher_id),
                    ]);
                return redirect()->route('subject.assign.index');
            }
            return redirect()->back();
        }

        public function editSubjectAssign(){
            // not done
        }

        public function deleteSubjectAssign($id){
            DB::table('subject_assigns')->where('id', '=', $id)->delete();
            return redirect()->route('subject.assign.index');
        }
    //-------------------------------------END SUBJECT ASSIGN----------------------------------------------/
}
