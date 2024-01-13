<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\AcademiController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ExaminationController;
use App\Http\Controllers\FeeController;
use App\Http\Controllers\SettingController;
use App\Models\ClassSetup;
use App\Models\SubjectAssign;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\User;
use App\Models\MarkDistribution;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//--------------------------------------------ADMIN----------------------------------------------------/
Route::get('admin/dashbord', [AdminController::class, 'adminIndex'])->name('admin.dashbord');
//--------------------------------------END ADMIN-----------------------------------------------------/

//--------------------------------------------Student----------------------------------------------------/
Route::get('student', [StudentController::class, 'studentIndex'])->name('student.index');
Route::get('student/create', [StudentController::class, 'createStudentIndex'])->name('create.student.index');
Route::post('student/store', [StudentController::class, 'storeStudent'])->name('store.student.index');
Route::post('student/edit/{id}', [StudentController::class, 'editStudentIndex'])->name('edit.student.index');
Route::post('student/delete/{id}', [StudentController::class, 'deleteStudentIndex'])->name('delete.student.index');

Route::get('promote-student', [StudentController::class, 'promoteStudentIndex'])->name('promote.student.index');
//------------------------------------------END Student-------------------------------------------------/

//--------------------------------------------Staff----------------------------------------------------/
Route::get('teacher', [StaffController::class, 'teacherIndex'])->name('teacher.index');
Route::get('teacher/create', [StaffController::class, 'createTeacherIndex'])->name('create.teacher.index');
Route::post('teacher/store', [StaffController::class, 'storeTeacher'])->name('store.teacher');
Route::get('teacher/edit/{id}', [StaffController::class, 'editTeacherIndex'])->name('edit.teacher.index');
Route::post('teacher/edit', [StaffController::class, 'editTeacher'])->name('edit.teacher');
Route::get('teacher/delete/{id}', [StaffController::class, 'deleteTeacher'])->name('delete.teacher');

Route::get('assign-admin', [StaffController::class, 'assignAdminIndex'])->name('assign-admin.index');
Route::post('assign-admin/store', [StaffController::class, 'storeAssignAdmin'])->name('store.assign-admin');
//------------------------------------------END Staff-------------------------------------------------/

//-------------------------------------------Academic--------------------------------------------------/
Route::get('classes', [AcademiController::class, 'classIndex'])->name('class.index');//list of classes
Route::get('classes/create', [AcademiController::class, 'createClassIndex'])->name('create.class.index');//Create Form view
Route::post('classes/store', [AcademiController::class, 'storeClass'])->name('store.classes');//post request for insert data
Route::get('classes/edit/{id}', [AcademiController::class, 'editClassIndex'])->name('');
Route::post('classes/edit', [AcademiController::class, 'editClass'])->name('edit.classes');
Route::get('classes/delete/{id}', [AcademiController::class, 'deleteClass'])->name('');


Route::get('section', [AcademiController::class, 'sectionIndex'])->name('section.index');
Route::get('section/create', [AcademiController::class, 'createSectionIndex'])->name('create.section.index');
Route::post('section/store', [AcademiController::class, 'storeSection'])->name('store.section');
Route::get('section/edit/{id}', [AcademiController::class, 'editSectionIndex'])->name('');
Route::post('section/edit', [AcademiController::class, 'editsection'])->name('edit.section');
Route::get('section/delete/{id}', [AcademiController::class, 'deleteSection'])->name('');


Route::get('subject', [AcademiController::class, 'subjectIndex'])->name('subject.index');
Route::get('subject/create', [AcademiController::class, 'createSubjectIndex'])->name('create.subject.index');
Route::post('subject/store', [AcademiController::class, 'storeSubject'])->name('store.subject');
Route::get('subject/edit/{id}', [AcademiController::class, 'editSubjectIndex'])->name('');
Route::post('subject/edit', [AcademiController::class, 'editSubject'])->name('edit.subject');
Route::get('subject/delete/{id}', [AcademiController::class, 'deleteSubject'])->name('');


Route::get('class-setup', [AcademiController::class, 'classSetupIndex'])->name('class-setup.index');
Route::get('class-setup/create', [AcademiController::class, 'createClassSetupIndex'])->name('create.class-setup.index');
Route::post('class-setup/store', [AcademiController::class, 'storeClassSetup'])->name('store.class-setup');
Route::get('class-setup/edit/{id}', [AcademiController::class, 'editClassSetupIndex'])->name('');
Route::post('class-setup/edit', [AcademiController::class, 'editClassSetup'])->name('edit.class-setup');
Route::get('class-setup/delete/{id}', [AcademiController::class, 'deleteClassSetup'])->name('');


Route::get('subject-assign', [AcademiController::class, 'subjectAssignIndex'])->name('subject.assign.index');
Route::get('subject-assign/create', [AcademiController::class, 'createSubjectAssignIndex'])->name('create.subject-assign.index');
Route::post('subject-assign/store', [AcademiController::class, 'storeSubjectAssign'])->name('store.subject-assign');
Route::get('subject-assign/edit/{id}', [AcademiController::class, 'editSubjectAssign'])->name('');
Route::get('subject-assign/delete/{id}', [AcademiController::class, 'deleteSubjectAssign'])->name('');
//-----------------------------------------End Academic-----------------------------------------------/

//-------------------------------------------Examination--------------------------------------------/
Route::get('exam-type', [ExaminationController::class, 'examTypeIndex'])->name('exam.type.index');
Route::get('exam-type/create', [ExaminationController::class, 'createExamTypeIndex'])->name('create.exam.type.index');
Route::post('exam-type/store', [ExaminationController::class, 'storeExamType'])->name('store.exam.type');
Route::get('exam-type/edit/{id}', [ExaminationController::class, 'editExamTypeIndex'])->name('edit.exam.type.index');
Route::get('exam-type/delete/{id}', [ExaminationController::class, 'deleteExamTypeIndex'])->name('delete.exam.type.index');


Route::get('mark-grade', [ExaminationController::class, 'markGradeIndex'])->name('mark.grade.index');
Route::get('mark-grade/create', [ExaminationController::class, 'createMarkGradeIndex'])->name('create.mark.grade.index');
Route::post('mark-grade/store', [ExaminationController::class, 'storeMarkGrade'])->name('store.mark.grade');
Route::get('mark-grade/edit/{id}', [ExaminationController::class, 'editMarkGradeIndex'])->name('edit.mark.grade.index');
Route::get('mark-grade/delete/{id}', [ExaminationController::class, 'deleteMarkGradeIndex'])->name('delete.mark.grade.index');


Route::get('mark-distribution', [ExaminationController::class, 'markDistributionIndex'])->name('mark.distribution.index');
Route::get('mark-distribution/create', [ExaminationController::class, 'createMarkDistributionIndex'])->name('create.mark.distribution.index');
Route::post('mark-distribution/store', [ExaminationController::class, 'storeMarkDistribution'])->name('store.mark.distribution');
Route::get('mark-distribution/edit/{id}', [ExaminationController::class, 'editMarkDistributionIndex'])->name('edit.mark.distribution.index');
Route::get('mark-distribution/delete/{id}', [ExaminationController::class, 'deleteMarkDistributionIndex'])->name('delete.mark.distribution.index');


Route::get('exam-setup', [ExaminationController::class, 'examSetupIndex'])->name('exam.setup.index');
Route::get('exam-setup/create', [ExaminationController::class, 'createExamSetupIndex'])->name('create.exam.setup.index');
Route::post('exam-setup/store', [ExaminationController::class, 'storeExamSetup'])->name('store.exam.setup');
Route::get('exam-setup/edit/{id}', [ExaminationController::class, 'editExamSetupIndex'])->name('edit.exam.setup.index');
Route::get('exam-setup/delete/{id}', [ExaminationController::class, 'deleteExamSetupIndex'])->name('delete.exam.setup.index');


Route::get('mark-register', [ExaminationController::class, 'markRegisterIndex'])->name('mark.register.index');
Route::get('mark-register/create', [ExaminationController::class, 'createMarkRegisterIndex'])->name('create.mark.register.index');
Route::post('mark-register/store', [ExaminationController::class, 'storeMarkRegister'])->name('store.mark.register');
Route::get('mark-register/edit/{id}', [ExaminationController::class, 'editMarkRegisterIndex'])->name('edit.mark.register.index');
Route::get('mark-register/delete/{id}', [ExaminationController::class, 'deleteMarkRegisterIndex'])->name('delete.mark.register.index');
//---------------------------------------- End Examination-----------------------------------------/

//-------------------------------------------Fees--------------------------------------------/
Route::get('fee-type', [FeeController::class, 'feeTypeIndex'])->name('fee.type.index');
Route::get('fee-type/create', [FeeController::class, 'createFeeTypeIndex'])->name('create.fee-type.index');

Route::get('fee-master', [FeeController::class, 'feeMasterIndex'])->name('fee.master.index');
Route::get('fee-master/create', [FeeController::class, 'createFeeMasterIndex'])->name('create.fee.master.index');

Route::get('fee-assing', [FeeController::class, 'feeAssingIndex'])->name('fee.assing.index');
Route::get('fee-assing/create', [FeeController::class, 'createFeeAssingIndex'])->name('create.fee.assing.index');

Route::get('fee-collect', [FeeController::class, 'feeCollectIndex'])->name('fee.collect.index');
Route::get('fee-collect/create', [FeeController::class, 'createFeeCollectIndex'])->name('create.fee.collect.index');
Route::get('fee-collect/collect/{id}', [FeeController::class, 'collectFeeCollectIndex'])->name('collect.fee.collect.index');

//---------------------------------------- End Fees-----------------------------------------/

//-------------------------------------------Setting--------------------------------------------/
Route::get('general-setting', [SettingController::class, 'generalSettingIndex'])->name('general.setting.index');
Route::post('general-setting/store', [SettingController::class, 'storeGeneralSetting'])->name('store.general.setting');

Route::get('gender', [SettingController::class, 'genderIndex'])->name('gender.index');
Route::get('gender/create', [SettingController::class, 'createGenderIndex'])->name('create.gender.index');
Route::post('gender/store', [SettingController::class, 'storeGender'])->name('store.gender');
Route::get('gender/edit/{id}', [SettingController::class, 'editGenderIndex'])->name('');
Route::post('gender/edit', [SettingController::class, 'editGender'])->name('edit.gender');
Route::get('gender/delete/{id}', [SettingController::class, 'deleteGender'])->name('delete.gender');

Route::get('religion', [SettingController::class, 'religionIndex'])->name('religion.index');
Route::get('religion/create', [SettingController::class, 'createReligionIndex'])->name('create.religion.index');
Route::post('religion/store', [SettingController::class, 'storeReligion'])->name('store.religion');
Route::get('religion/edit/{id}', [SettingController::class, 'editReligionIndex'])->name('');
Route::post('religion/edit', [SettingController::class, 'editReligion'])->name('edit.religion');
Route::get('religion/delete/{id}', [SettingController::class, 'deleteReligion'])->name('delete.gender');

Route::get('blood-group', [SettingController::class, 'bloodGroupIndex'])->name('blood-group.index');
Route::get('blood-group/create', [SettingController::class, 'createBloodGroupIndex'])->name('create.blood-group.index');
Route::post('blood-group/store', [SettingController::class, 'storeBloodGroup'])->name('store.blood-group');
Route::get('blood-group/edit/{id}', [SettingController::class, 'editBloodGroupIndex'])->name('');
Route::post('blood-group/edit', [SettingController::class, 'editBloodGroup'])->name('edit.blood-group');
Route::get('blood-group/delete/{id}', [SettingController::class, 'deleteBloodGroup'])->name('delete.blood-group');

Route::get('session', [SettingController::class, 'sessionIndex'])->name('session.index');
Route::get('session/create', [SettingController::class, 'createSessionIndex'])->name('create.session.index');
Route::post('session/active', [SettingController::class, 'activeSession'])->name('active.session');
Route::post('session/store', [SettingController::class, 'storeSession'])->name('store.session');
Route::get('session/edit/{id}', [SettingController::class, 'editSessionIndex'])->name('');
Route::post('session/edit', [SettingController::class, 'editSession'])->name('edit.session');
Route::get('session/delete/{id}', [SettingController::class, 'deleteSession'])->name('delete.session');
//---------------------------------------- End Setting-----------------------------------------/

// routes/web.php

Route::get('/getMarkDistribution/{distributionId}', function($distributionId)
{
    
    $markDistribution = MarkDistribution::find($distributionId);
    $description = json_decode($markDistribution->description);
    $allot_mark = json_decode($markDistribution->allot_mark);

    $data= [  
        $description,
        $allot_mark,
    ];
    $formattedData = [];

    foreach ($data[0] as $index => $description) {
        $allot_mark = $data[1][$index];
        $formattedData[] = ['description' => $description, 'allot_mark' => $allot_mark];
    }

    return view('admin.partials.mark-distribution-data', [
        'data'=> $formattedData,
    ]);
});


Route::get('/getSubjectAssignData/{subject_assign_id}', function($subjectAssignId)
{
    
    $subject_assigns = SubjectAssign::find($subjectAssignId);
    // Assuming $db is your database connection

    // Fetch subject names
    $subjectNames = [];

    $subjectIds = $subject_assigns->subjects_id;
    $subjectIds = json_decode($subjectIds);

    foreach ($subjectIds as $subjectId) {
        $subjectName = Subject::find($subjectId);
        // dd($subjectName->subject_name);
        array_push($subjectNames, $subjectName->subject_name);
    }

    // Fetch teacher names
    $teacherNames = [];

    $teacherIds = $subject_assigns->teachers_id;
    $teacherIds = json_decode($teacherIds);

    foreach ($teacherIds as $teacherId) {
        $teacherName = Teacher::find($teacherId);
        $user = User::find($teacherName->user_id);
        array_push($teacherNames, $user->first_name.' '.$user->last_name);
    }

    $data= [  
        $subjectNames,
        $teacherNames,
    ];

    $formattedData = [];

    foreach ($data[0] as $index => $subject) {
        $teacher = $data[1][$index];
        $formattedData[] = ['subject' => $subject, 'teacher' => $teacher];
    }

    return view('admin.partials.subject_assign_data', [
        'data'=> $formattedData,
    ]);
});



Route::get('/get-data/{classId}', function($classId){

    $data = ClassSetup::where('class_id', $classId)->get();
    return response()->json($data);


})->name('get-data');


Route::get('mark-register/mark-register-filter', function(){
    $data = [[
            'name' => 'John Doe',
            'age' => 60,
            'inputs' => [
                'mcq', 'cq'
        ]
        ],
        [
            'name' => 'Tamim',
            'age' => 30,
            'inputs' => [
                'mcq', 'cq'
            ]
        ]
    ];
    
    // Convert data to JSON
    $jsonData = json_encode($data);
    return $jsonData;
})->name('mark.register.filter');



