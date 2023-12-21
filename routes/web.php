<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AcademiController;
use App\Http\Controllers\AdminController;
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
//---------------------------------------ADMIN--------------------------------------------------------------/
Route::get('admin/dashbord', [AdminController::class, 'adminIndex'])->name('admin.dashbord');


Route::get('classes', [AcademiController::class, 'classIndex'])->name('class.index');//list of classes
Route::get('classes/create', [AcademiController::class, 'createClassIndex'])->name('create.class.index');//Create Form view
Route::post('classes/store', [AcademiController::class, 'storeClass'])->name('');//post request for insert data
Route::put('classes/edit/{id}', [AcademiController::class, 'editClass'])->name('');
Route::delete('classes/delete/{id}', [AcademiController::class, 'deleteClass'])->name('');


Route::get('section', [AcademiController::class, 'sectionIndex'])->name('section.index');
Route::get('section/create', [AcademiController::class, 'createSectionIndex'])->name('create.section.index');
Route::get('section/store', [AcademiController::class, 'storeSection'])->name('');
Route::get('section/edit/{id}', [AcademiController::class, 'editSection'])->name('');
Route::get('section/delete/{id}', [AcademiController::class, 'deleteSection'])->name('');


Route::get('subject', [AcademiController::class, 'subjectIndex'])->name('subject.index');
Route::get('subject/create', [AcademiController::class, 'createSubjectIndex'])->name('create.subject.index');
Route::get('subject/store', [AcademiController::class, 'storeSubject'])->name('');
Route::get('subject/edit/{id}', [AcademiController::class, 'editSubject'])->name('');
Route::get('subject/delete/{id}', [AcademiController::class, 'deleteSubject'])->name('');


Route::get('class-setup', [AcademiController::class, 'classSetupIndex'])->name('class.setup.index');
Route::get('class-setup/create', [AcademiController::class, 'createClassSetupIndex'])->name('create.class-setup.index');
Route::post('class-setup/store', [AcademiController::class, 'storeClassSetup'])->name('store.class-setup');
Route::put('class-setup/edit/{id}', [AcademiController::class, 'editClassSetup'])->name('');
Route::post('class-setup/delete/{id}', [AcademiController::class, 'deleteClassSetup'])->name('');


Route::get('subject-assign', [AcademiController::class, 'subjectAssignIndex'])->name('subject.assign.index');
Route::get('subject-assign/create', [AcademiController::class, 'createSubjectAssignIndex'])->name('create.subject-assign.index');
Route::get('subject-assign/store', [AcademiController::class, 'storeSubjectAssign'])->name('');
Route::get('subject-assign/edit/{id}', [AcademiController::class, 'editSubjectAssign'])->name('');
Route::get('subject-assign/delete/{id}', [AcademiController::class, 'deleteSubjectAssign'])->name('');
//--------------------------------------END ADMIN----------------------------------------------------------/

