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
use App\Http\Controllers\DemandesController;
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
Route::resource('/demandes',DemandesController::class);

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
Route::delete('/demandes/{id}', 'DemandesController@decours')->name('demandes.decours');
Route::group(['middleware' => ['auth']], function () {
    Route::get('/demandes', [App\Http\Controllers\DemandesController::class, 'index'])->name('demandes.index');
    Route::get('/demandes/editformation/{id}', [App\Http\Controllers\DemandesController::class, 'editformation'])->name('demandes.editformation');
    Route::get('/demandes/editcours/{id}', [App\Http\Controllers\DemandesController::class, 'editcours'])->name('demandes.editcours');
    Route::get('/demandes/editinscription/{idetudiant}/{idcours}', [App\Http\Controllers\DemandesController::class, 'editinscription'])->name('demandes.editinscription');
    Route::delete('/demandes/destroy/{id}', [App\Http\Controllers\DemandesController::class, 'destroy'])->name('demandes.destroy');
    Route::delete('/demandes/destroyformation/{id}', [App\Http\Controllers\DemandesController::class, 'destroyformation'])->name('demandes.destroyformation');
    Route::delete('/demandes/destroyinscription/{idetudiant}/{idcours}', [App\Http\Controllers\DemandesController::class, 'destroyinscription'])->name('demandes.destroyinscription');
});
