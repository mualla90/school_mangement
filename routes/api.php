<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::apiResource('teachers',TeacherController::class);
Route::apiResource('courses',CourseController::class);
Route::apiResource('students',StudentController::class);

// Route::get('teachers/{teacher}',[TeacherController::class,'show']);

Route::post('syncStudents/{course}',[CourseController::class,'syncStudents']);

Route::get('users',[UserController::class,'index'])->middleware('test:hassan');
