<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Api\StudentController;
use App\Http\Controllers\Api\CourseController;
use Illuminate\Support\Facades\Route;

Route::apiResource('students', StudentController::class)->names('api.students');
Route::apiResource('courses', CourseController::class)->names('api.courses');
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
