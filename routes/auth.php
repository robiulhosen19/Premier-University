<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


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

Route::get('/', function () {
    return view('welcome');
});

// -------- Auth Login Route -----------
Route::get('login', [AuthController::class, 'login']);
Route::post('admin/user-login', [AuthController::class, 'userLogin']);

Route::get('teacher-register', [AuthController::class, 'teacherRegister']);
Route::post('teacher-registration', [AuthController::class, 'registrationTeacher']);

Route::get('student-register', [AuthController::class, 'studentRegister']);
Route::post('student-registration', [AuthController::class, 'registrationStudent']);