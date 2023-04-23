<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MatiereController;
use App\Http\Controllers\MaitreController;
use App\Http\Controllers\CoursController;
use App\Http\Controllers\CoursniveauController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\TeachersController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\MCoursController;
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
Route::resource('/Mcours',MCoursController::class);
Route::resource('/formation',FormationController::class);

Route::resource('/coursniveau',CoursniveauController::class);
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/profile', function () {
    return view('registrer');
})->name('profile');
Route::get('/registrers', function () {
    return view('auth.registrerstudent');
})->name('registers');


Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/', function () {
    return view('Home');
});



Route::get('/pricing', function () {
    return view('pricing');
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
Route::get('/teachers', [App\Http\Controllers\TeachersController::class, 'index'])->name('teachers');
Route::get('/forma', [App\Http\Controllers\FormationController::class, 'afficher'])->name('forma');
Route::post('/inscription', [InscriptionController::class, 'store'])->name('inscription.store');
Route::get('/createcours', [MCoursController::class, 'create'])->name('createcours');
