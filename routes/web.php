<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;

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
Route::get('admission', [WebsiteController::class, 'admission']);
Route::get('about', [WebsiteController::class, 'about']);
Route::get('course', [WebsiteController::class, 'course']);


// __________Contact ROute ________

Route::get('contacts', [ContactController::class, 'index']);
Route::post('contacts/store', [ContactController::class, 'store']);
Route::get('contact/show', [ContactController::class, 'show']);
Route::get('contact/delete/{id}',[ContactController::class, 'delete']);




Route::get('/login', function () {
    return view('website/pages/login');
});
Route::get('/register', function () {
    return view('website/pages/register');
});



// __________________admin Route______________
Route::get('dashboard', [AdminController::class, 'dashboard']);
Route::get('profile', [AdminController::class, 'profile']);


// __________course________

Route::get('course', [CourseController::class, 'course']);
Route::get('course', [CourseController::class, 'show']);
Route::get('course/create',[CourseController::class, 'create']);
Route::post('course/store',[CourseController::class, 'store']);

// __________Admin / Contact ROute ________


