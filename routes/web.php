<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AcademiController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ExaminationController;
use App\Http\Controllers\FeeController;
use App\Http\Controllers\SettingController;
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

//--------------------------------------------ADMIN----------------------------------------------------/
    Route::get('student', [StudentController::class, 'studentIndex'])->name('student.index');
    Route::get('student/create', [StudentController::class, 'createStudentIndex'])->name('create.student.index');

    Route::get('promote-student', [StudentController::class, 'promoteStudentIndex'])->name('promote.student.index');
//--------------------------------------END ADMIN-----------------------------------------------------/

//-------------------------------------------Academic--------------------------------------------------/
    Route::get('classes', [AcademiController::class, 'classIndex'])->name('class.index');//list of classes
    Route::get('classes/create', [AcademiController::class, 'createClassIndex'])->name('create.class.index');//Create Form view
    Route::post('classes/store', [AcademiController::class, 'storeClass'])->name('');//post request for insert data
    Route::put('classes/edit/{id}', [AcademiController::class, 'editClass'])->name('');
    Route::delete('classes/delete/{id}', [AcademiController::class, 'deleteClass'])->name('');


    Route::get('section', [AcademiController::class, 'sectionIndex'])->name('section.index');
    Route::get('section/create', [AcademiController::class, 'createSectionIndex'])->name('create.section.index');
    Route::post('section/store', [AcademiController::class, 'storeSection'])->name('');
    Route::get('section/edit/{id}', [AcademiController::class, 'editSection'])->name('');
    Route::get('section/delete/{id}', [AcademiController::class, 'deleteSection'])->name('');


    Route::get('subject', [AcademiController::class, 'subjectIndex'])->name('subject.index');
    Route::get('subject/create', [AcademiController::class, 'createSubjectIndex'])->name('create.subject.index');
    Route::post('subject/store', [AcademiController::class, 'storeSubject'])->name('');
    Route::get('subject/edit/{id}', [AcademiController::class, 'editSubject'])->name('');
    Route::get('subject/delete/{id}', [AcademiController::class, 'deleteSubject'])->name('');


    Route::get('class-setup', [AcademiController::class, 'classSetupIndex'])->name('class.setup.index');
    Route::get('class-setup/create', [AcademiController::class, 'createClassSetupIndex'])->name('create.class-setup.index');
    Route::post('class-setup/store', [AcademiController::class, 'storeClassSetup'])->name('store.class-setup');
    Route::get('class-setup/edit/{id}', [AcademiController::class, 'editClassSetup'])->name('');
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
    Route::post('exam-type/store', [ExaminationController::class, 'storeExamTypeIndex'])->name('store.exam.type');
    Route::get('exam-type/edit/{id}', [ExaminationController::class, 'editExamTypeIndex'])->name('edit.exam.type.index');
    Route::get('exam-type/delete/{id}', [ExaminationController::class, 'deleteExamTypeIndex'])->name('delete.exam.type.index');


    Route::get('mark-grade', [ExaminationController::class, 'markGradeIndex'])->name('mark.grade.index');
    Route::get('mark-grade/create', [ExaminationController::class, 'createMarkGradeIndex'])->name('create.mark.grade.index');
    Route::post('mark-grade/store', [ExaminationController::class, 'storeMarkGradeIndex'])->name('store.mark.grade');
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

//-------------------------------------------Fees--------------------------------------------/
    Route::get('general-setting', [SettingController::class, 'generalSettingIndex'])->name('general.setting.index');

    Route::get('gender', [SettingController::class, 'genderIndex'])->name('gender.index');
    Route::get('gender/create', [SettingController::class, 'createGenderIndex'])->name('create.gender.index');

    Route::get('religion', [SettingController::class, 'religionIndex'])->name('religion.index');
    Route::get('religion/create', [SettingController::class, 'createReligionIndex'])->name('create.religion.index');

    Route::get('blood-group', [SettingController::class, 'bloodGroupIndex'])->name('blood-group.index');
    Route::get('blood-group/create', [SettingController::class, 'createBloodGroupIndex'])->name('create.blood-group.index');

    Route::get('session', [SettingController::class, 'sessionIndex'])->name('session.index');
    Route::get('session/create', [SettingController::class, 'createSessionIndex'])->name('create.session.index');
//---------------------------------------- End Fees-----------------------------------------/

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



