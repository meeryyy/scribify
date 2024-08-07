<?php

use App\Http\Controllers\ChapitreController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HistoireAppController;
use App\Http\Controllers\HistoireController;
use App\Http\Controllers\ProfileController;
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
Route::get('/test', function () {

    return view('test');
});

// Route::get('/chapitre/{id}',[ChapitreController::class ,'showChapitre'])->name('chapitre.showChapitre');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});



Route::resource('histoire',HistoireController::class);
Route::resource('chapitre',ChapitreController::class);
Route::resource('comment',CommentController::class);


Route::get('chapitre/showchapitre/{id}',[ChapitreController::class ,'showchapitre'] )->name('chapitre.showchapitre');

Route::get('getHistoires',[HistoireController::class ,'showHistoireToDashbord'] );
Route::get('showallhistoire',[HistoireController::class ,'showallhistoire'] )->name('histoire.showallhistoire');


require __DIR__.'/auth.php';





