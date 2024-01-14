<?php

namespace App\Http\Controllers;
use App\Models\ExamType;
use App\Models\MarkGrade;
use App\Models\Classes;
use App\Models\MarkDistribution;
use Illuminate\Support\Facades\DB;

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
            $mark_grades = MarkGrade::all();
            return view('admin.pages.examination.mark-grade', [
                'mark_grades'=> $mark_grades
            ]);
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
            return redirect()->route('mark.grade.index');
        }


    //-------------------------------------End Mark Grade-----------------------------------------------/

    //---------------------------------------Mark Distribution-------------------------------------------/
        public function markDistributionIndex(){
            $mark_distributions = DB::select(
                'SELECT
                    id,
                    mark_distribution_name,
                    allot_mark,
                    description,
                    status,
                    (SELECT SUM(value::int) FROM JSON_ARRAY_ELEMENTS_TEXT(allot_mark) AS value) AS total
                FROM
                    mark_distributions;'
            );
            return view('admin.pages.examination.mark-distribution',[
                'mark_distributions'=> $mark_distributions
            ]);
        }

        public function createMarkDistributionIndex(){
            return view('admin.pages.examination.mark-distribution-create');
        }

        public function storeMarkDistribution(Request $req){
            $validated = $req->validate([
                'mark_distribution_name' => 'required|string|max:255',
                'mark_descriptions'=> 'required|array|min:1',
                'mark_descriptions.*'=> 'required',
                'allot_marks'=> 'required|array|min:1',
                'allot_marks.*'=> 'required',
                'status' => 'required|boolean'
            ]);
            // dd($validated);
            DB::insert(
                'INSERT INTO mark_distributions (mark_distribution_name, description, allot_mark, status)
                VALUES(?, ?, ?, ?)', [
                    $req->mark_distribution_name,
                    json_encode($req->mark_descriptions),
                    json_encode($req->allot_marks),
                    $req->status
                ]);
            return redirect()->route('mark.distribution.index');
        }
    //-------------------------------------End Mark Distribution----------------------------------------/

    //---------------------------------------Mark Setup ------------------------------------------------/
        public function examSetupIndex(){
            $mark_distributions = MarkDistribution::all();
            return view('admin.pages.examination.exam-setup', [
                'mark_distributions'=> $mark_distributions
            ]);
        }

        public function createExamSetupIndex(){
            $exam_types = ExamType::where('status', '=' ,'true')->get();
            $classes = Classes::where('status', '=' ,'true')->get();
            $mark_distributions = MarkDistribution::where('status', '=' ,'true')->get();
            // dd($exam_type);
            return view('admin.pages.examination.exam-setup-create', [
                'exam_types'=> $exam_types,
                'classes'=> $classes,
                'mark_distributions'=> $mark_distributions

            ]);
        }

        public function storeExamSetup(Request $req){
            $validated = $req->validate([
                'exam_type_id'=> 'required|numeric',
                'mark_distribution_id'=> 'required|numeric',
                'class_id'=> 'required|numeric',
                'status' => 'required|boolean'
            ]);
            $active_session_id = session()->get('active_session_list_id');
            DB::insert(
                'INSERT INTO exam_setups (exam_type_id, class_id, mark_distribution_id, session_list_id, status) 
                VALUES (?, ?, ?, ?, ?)', [
                    $validated['exam_type_id'],
                    $validated['class_id'],
                    $validated['mark_distribution_id'],
                    $active_session_id,
                    $validated['status'],
                ]);
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
