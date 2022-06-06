<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ObozController;
use App\Http\Controllers\WelcomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',[WelcomeController::class, 'index']);

Route::get('/obozy',[ObozController::class, 'index'])->name('obozy.index')->middleware('auth') ;
Route::get('/obozy/create',[ObozController::class, 'create'])->name('obozy.create')->middleware('auth') ;
Route::get('/obozy/{oboz}',[ObozController::class, 'show'])->name('obozy.show')->middleware('auth') ;
Route::post('/obozy',[ObozController::class, 'store'])->name('obozy.store')->middleware('auth') ;
Route::get('/obozy/edit/{oboz}',[ObozController::class, 'edit'])->name('obozy.edit')->middleware('auth') ;
Route::post('/obozy/{oboz}',[ObozController::class, 'update'])->name('obozy.update')->middleware('auth') ;
Route::delete('/obozy/{oboz}',[ObozController::class, 'destroy'])->name('obozy.destroy')->middleware('auth');   
    
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/users/list',[UserController::class, 'index'])->middleware('auth') ;
Route::delete('/users/{user}',[UserController::class, 'destroy'])->middleware('auth');

Auth::routes();
Route::get('/',[WelcomeController::class, 'index']);

