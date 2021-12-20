<?php

use App\Http\Controllers\TeamController;
use App\Http\Controllers\VolunteersController;
use App\Models\Volunteers;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

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

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/register', [ VolunteersController::class , 'show']);
Route::view('/register', 'register' )->name('register');
Route::view('/contactUs', 'contact' )->name('contactUs');
Route::get('/OurTeam', [ TeamController::class, 'index' ])->name('ourTeam');
Route::post('/OurTeam/insert', [ \App\Http\Controllers\TeamController::class, 'insert' ])->name('insert');
Route::view('/magazine', 'magazine')->name('magazine');
