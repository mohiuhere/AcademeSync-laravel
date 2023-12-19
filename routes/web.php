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
Route::get('admin/dashbord', [AdminController::class, 'adminIndex']);


Route::get('classes', [AcademiController::class, 'classIndex']);//list of classes
Route::get('classes/create', [AcademiController::class, 'createClassIndex']);//Create Form view
Route::post('classes/store', [AcademiController::class, 'storeClass']);//post request for insert data
Route::put('classes/edit/{id}', [AcademiController::class, 'editClass']);
Route::delete('classes/delete/{id}', [AcademiController::class, 'deleteClass']);


Route::get('class-setup', [AcademiController::class, 'classSetupIndex']);
Route::get('class-setup/create', [AcademiController::class, 'createClassSetupIndex']);
Route::post('class-setup/store', [AcademiController::class, 'storeClassSetup']);
Route::put('class-setup/edit/{id}', [AcademiController::class, 'editClassSetup']);
Route::post('class-setup/delete/{id}', [AcademiController::class, 'deleteClassSetup']);


Route::get('section', [AcademiController::class, 'sectionIndex']);
Route::get('section/create', [AcademiController::class, 'createSectionIndex']);
Route::get('section/store', [AcademiController::class, 'storeSection']);
Route::get('section/edit/{id}', [AcademiController::class, 'editSection']);
Route::get('section/delete/{id}', [AcademiController::class, 'deleteSection']);


Route::get('subject', [AcademiController::class, 'subjectIndex']);
Route::get('subject/create', [AcademiController::class, 'createSubjectIndex']);
Route::get('subject/store', [AcademiController::class, 'storeSubject']);
Route::get('subject/edit/{id}', [AcademiController::class, 'editSubject']);
Route::get('subject/delete/{id}', [AcademiController::class, 'deleteSubject']);


Route::get('subject-assign', [AcademiController::class, 'subjectAssignIndex']);
Route::get('subject-assign/create', [AcademiController::class, 'createSubjectAssignIndex']);
Route::get('subject-assign/store', [AcademiController::class, 'storeSubjectAssign']);
Route::get('subject-assign/edit/{id}', [AcademiController::class, 'editSubjectAssign']);
Route::get('subject-assign/delete/{id}', [AcademiController::class, 'deleteSubjectAssign']);
//--------------------------------------END ADMIN----------------------------------------------------------/

