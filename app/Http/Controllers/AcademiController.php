<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcademiController extends Controller
{
    //---------------------------------------CLASSES-------------------------------------------------------/
    
        public function classIndex(){
            return view('admin.pages.academic.classes');
        }

        public function createClassIndex(){
            return view('admin.pages.academic.class-create');
        }

        public function storeClass(){

        }

        public function editClass(){

        }

        public function deleteClass(){

        }

    //-------------------------------------END CLASSES-----------------------------------------------------/
    
    //---------------------------------------SECTION-------------------------------------------------------/

        public function sectionIndex(){
            return view('admin.pages.academic.section');
        }

        public function createSectionIndex(){
            return view('admin.pages.academic.section-create');
        }

        public function storeSection(){

        }

        public function editSection(){

        }

        public function deleteSection(){

        }

    //-------------------------------------END SECTION-----------------------------------------------------/
    
    //-------------------------------------SUBJECT---------------------------------------------------------/
        public function subjectIndex(){
            return view('admin.pages.academic.subject');
        }

        public function createSubjectIndex(){
            return view('admin.pages.academic.subject-create');
        }

        public function storeSubject(){

        }

        public function editSubject(){

        }

        public function deleteSubject(){

        }
    //-----------------------------------END SUBJECT-------------------------------------------------------/

    //---------------------------------------CLASS SETUP---------------------------------------------------/
    
        public function classSetupIndex(){
            return view('admin.pages.academic.class-setup');
        }

        public function createClassSetupIndex(){
            return view('admin.pages.academic.class-setup-create');
        }

        public function storeClassSetup(Request $request){
            dd($request);
        }

        public function editClassSetup(){

        }

        public function deleteClassSetup(){

        }

    //-------------------------------------END CLASS SETUP-------------------------------------------------/

    //---------------------------------------SUBJECT ASSIGN------------------------------------------------/
        public function subjectAssignIndex(){
            return view('admin.pages.academic.subject-assign');
        }

        public function createSubjectAssignIndex(){
            // Assuming $authors is an array of authors with id and name properties
            $subjects = [
                ['id' => 1, 'name' => 'Bangla'],
                ['id' => 2, 'name' => 'English'],
                // Add more authors as needed
            ];

            $teachers = [
                ['id' => 1, 'name' => 'Sunny'],
                ['id' => 2, 'name' => 'Musa'],
                // Add more authors as needed
            ];
            return view('admin.pages.academic.subject-assign-create',[
                'teachers' => $teachers,
                'subjects' => $subjects
            ]);
        }

        public function storeSubjectAssign(Request $req){
            dd($req);
        }

        public function editSubjectAssign(){

        }

        public function deleteSubjectAssign(){

        }
    //-------------------------------------END SUBJECT ASSIGN----------------------------------------------/
}
