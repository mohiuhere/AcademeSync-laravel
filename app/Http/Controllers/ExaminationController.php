<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExaminationController extends Controller
{
    //---------------------------------------Exam Type---------------------------------------------------/
        public function examTypeIndex(){
            return view('admin.pages.examination.exam-type');
        }

        public function createExamTypeIndex(){
            return view('admin.pages.examination.exam-type-create');
        }

        public function storeExamType(){

        }

        public function editExamTypeIndex(){

        }

        public function deleteExamTypeIndex(){

        }
    //-------------------------------------End Exam Type------------------------------------------------/

    //---------------------------------------Mark Grade--------------------------------------------------/
        public function markGradeIndex(){
            return view('admin.pages.examination.mark-grade');
        }

        public function createMarkGradeIndex(){
            return view('admin.pages.examination.mark-grade-create');
        }


    //-------------------------------------End Mark Grade-----------------------------------------------/

    //---------------------------------------Mark Distribution-------------------------------------------/
        public function markDistributionIndex(){
            return view('admin.pages.examination.mark-distribution');
        }

        public function createMarkDistributionIndex(){
            return view('admin.pages.examination.mark-distribution-create');
        }

        public function storeMarkDistribution(Request $req){
            dd($req);
        }
    //-------------------------------------End Mark Distribution----------------------------------------/

    //---------------------------------------Mark Setup ------------------------------------------------/
        public function examSetupIndex(){
            return view('admin.pages.examination.exam-setup');
        }

        public function createExamSetupIndex(){
            return view('admin.pages.examination.exam-setup-create');
        }

        public function storeExamSetup(Request $req){
            dd($req);
        }
    //-------------------------------------End Mark Setup----------------------------------------------/

    //---------------------------------------Mark Register --------------------------------------------/
        public function markRegisterIndex(){
            return view('admin.pages.examination.mark-register');
        }

        public function createMarkRegisterIndex(){
            return view('admin.pages.examination.mark-register-create');
        }

        public function storeMarkRegister(Request $req){
            dd($req);
        }
    //-------------------------------------End Mark Register------------------------------------------/
}
