<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExaminationController extends Controller
{
    //---------------------------------------Exam Type---------------------------------------------------/
        public function examTypeIndex(){
            return view('admin.pages.exam-type');
        }

        public function createExamTypeIndex(){
            return view('admin.pages.exam-type-create');
        }

        public function storeExamType(){

        }

        public function editExamTypeIndex(){

        }

        public function deleteExamTypeIndex(){

        }
    //-------------------------------------End Exam Type-------------------------------------------------/

    //---------------------------------------Mark Grade--------------------------------------------------/
        public function markGradeIndex(){
            return view('admin.pages.mark-grade');
        }

        public function createMarkGradeIndex(){
            return view('admin.pages.mark-grade-create');
        }


    //-------------------------------------End Mark Grade------------------------------------------------/

    //---------------------------------------Mark Distribution-------------------------------------------/
        public function markDistributionIndex(){
            return view('admin.pages.mark-distribution');
        }

        public function createMarkDistributionIndex(){
            return view('admin.pages.mark-distribution-create');
        }

        public function storeMarkDistribution(Request $req){
            dd($req);
        }
    //-------------------------------------End Mark Distribution-----------------------------------------/

    //---------------------------------------Mark Setup ------------------------------------------------/
        public function examSetupIndex(){
            return view('admin.pages.exam-setup');
        }

        public function createExamSetupIndex(){
            return view('admin.pages.exam-setup-create');
        }

        public function storeExamSetup(Request $req){
            dd($req);
        }
    //-------------------------------------End Mark Setup----------------------------------------------/

    //---------------------------------------Mark Register ----------------------------------------/
        public function markRegisterIndex(){
            return view('admin.pages.mark-register');
        }

        public function createMarkRegisterIndex(){
            return view('admin.pages.mark-register-create');
        }

        public function storeMarkRegister(Request $req){
            dd($req);
        }
//-------------------------------------End Mark Register-------------------------------------------/
}
