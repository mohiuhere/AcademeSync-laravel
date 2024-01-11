<?php

namespace App\Http\Controllers;
use App\Models\ExamType;
use App\Models\MarkGrade;

use Illuminate\Http\Request;

class ExaminationController extends Controller
{
    //---------------------------------------Exam Type---------------------------------------------------/
        public function examTypeIndex(){
            $exam_types = ExamType::all();
            return view('admin.pages.examination.exam-type', [
                'exam_types'=> $exam_types
            ]);
        }

        public function createExamTypeIndex(){
            return view('admin.pages.examination.exam-type-create');
        }

        public function storeExamType(Request $req){
            $validated = $req->validate([
                'exam_type_name'=> 'required|string|max:255',
                'status' => 'required|boolean',
            ]);
            $exam_type = new ExamType;
            $exam_type->exam_type_name = $req->exam_type_name;
            $exam_type->status = $req->status;
            $exam_type->save();
            return redirect()->route('exam.type.index');
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

        public function storeMarkGrade(Request $req){
            $validated = $req->validate([
                'mark_grade_name' => 'required|string|max:255',
                'point' => 'required|numeric',
                'percent_from' => 'required|numeric',
                'percent_upto' => 'required|numeric|gt:percent_from',
                'remark' => 'required|string|max:255',
                'status' => 'required|boolean',
            ]);
            $mark_grade = new MarkGrade;
            $mark_grade->mark_grade_name = $req->mark_grade_name;
            $mark_grade->point = $req->point;
            $mark_grade->percent_from = $req->percent_from;
            $mark_grade->percent_upto = $req->percent_upto;
            $mark_grade->remark = $req->remark;
            $mark_grade->status = $req->status;
            $mark_grade->save();
            return redirect()->route('admin.pages.examination.mark-grade');
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
