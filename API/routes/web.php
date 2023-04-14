<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MatiereController;
use App\Http\Controllers\MaitreController;
use App\Http\Controllers\CoursController;
use App\Http\Controllers\CoursniveauController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\TeachersController;
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
Route::resource('/matiere',MatiereController::class);
Route::resource('/maitre',MaitreController::class);
Route::resource('/cours',CoursController::class);
Route::resource('/formation',FormationController::class);
Route::resource('/teachers',TeachersController::class);
Route::resource('/coursniveau',CoursniveauController::class);
Route::get('/', function () {
    return view('Home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/pricing', function () {
    return view('pricing');
});

Route::get('/for', function () {
    return view('formation');
});

Route::get('/fc', function () {
    return view('cours1');
});
Route::get('/blog_single', function () {
    return view('blog_single');
});

Route::get('/home', function () {
    return view('home');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
