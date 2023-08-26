<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdmissionController;


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

// _______________this is website route_____________


Route::get('home', [WebsiteController::class, 'home']);

Route::get('about', [WebsiteController::class, 'about']);
Route::get('course', [WebsiteController::class, 'course']);


// _______________this is website route_____________
Route::get('admission', [WebsiteController::class, 'admission']);
Route::get('admission', [AdmissionController::class, 'create']);




// __________Contact ROute ________

Route::get('contacts', [ContactController::class, 'index']);
Route::post('contacts/store', [ContactController::class, 'store']);
Route::get('contact/show', [ContactController::class, 'show']);
Route::get('contact/delete/{id}', [ContactController::class, 'delete']);

// __________course________

Route::get('course', [CourseController::class, 'course']);
Route::get('course', [CourseController::class, 'show']);
Route::get('course/create', [CourseController::class, 'create']);
Route::post('course/store', [CourseController::class, 'store']);

// __________Admin / Contact ROute ________


Route::middleware(['isCheckLogin'])->group(function () {
    // Routes that use the custom middleware

    // __________________admin Route______________
    Route::get('dashboard', [AdminController::class, 'dashboard']);
    Route::get('profile', [AdminController::class, 'profile']);

    Route::middleware(['isCheckAdmin'])->group(function () {
        // ----------Users Routes-----------
        Route::get('admin/pending-users', [UserController::class, 'pendingUsers']);
        Route::get('admin/approve-user/{userid}', [UserController::class, 'approveUser']);
        Route::get('admin/student_from', [AdmissionController::class, 'from_show']);
        Route::get('admin/student_info', [AdmissionController::class, 'from_info']);

    });
});
