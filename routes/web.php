<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\admin\ContactController;
use App\Models\Contact;
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
// _______________this is website route_____________


Route::get('/home', function () {
    return view('website/pages/home');
});
Route::get('/admission', function () {
    return view('website/pages/admission');
});



// __________Contact ROute ________

Route::get('/contacts', [ContactController::class, 'create']);
Route::post('/contact/store', [ContactController::class, 'store']);
Route::get('/contact/show', [ContactController::class, 'show']);




Route::get('/about', function () {
    return view('website/pages/about');
});

Route::get('/course', function () {
    return view('website/pages/course');
});

Route::get('/login', function () {
    return view('website/pages/login');
});
Route::get('/register', function () {
    return view('website/pages/register');
});



// __________________admin Route______________
Route::get('/dashboard', function () {
    return view('admin/pages/dashboard');
});


Route::get('/profile', function () {
    return view('admin/pages/profile');
});



// __________course________

Route::get('course', [CourseController::class, 'course']);
Route::get('course', [CourseController::class, 'show']);
Route::get('course/create',[CourseController::class, 'create']);
Route::post('course/store',[CourseController::class, 'store']);

// __________Admin / Contact ROute ________

 //Route::resource('contacts', ContactController::class);

