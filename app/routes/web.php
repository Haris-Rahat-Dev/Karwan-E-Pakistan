<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashBoardController\DashboardController;
use App\Http\Controllers\ActivityController\ActivityController;
use App\Http\Controllers\TeamController\TeamController;
use App\Http\Controllers\VolunteersController\VolunteersController;
use Illuminate\Support\Facades\Route;

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
Route::view('/magazine', 'magazine')->name('magazine');
Route::view('/Events', 'events')->name('Events');
Route::get('/Activities', [ ActivityController::class, 'index' ])->name('Activities');

//Admin Dashboard

//Login Routes
Route::get('/login', [ LoginController::class, 'getLoginView' ])->name('LoginView');
Route::post('/loginSuccess', [ LoginController::class, 'login' ])->name('Login');

//Register Routes
Route::get('/registerAdmin', [ RegisterController::class, 'getRegisterView' ])->name('RegisterView');
Route::post('/registerSuccess', [ RegisterController::class, 'register' ])->name('Register');

Route::get('/dashboard', [ DashboardController::class, 'getDashBoardView' ])->name('dashboard');

//Team Routes
Route::get('/team', [ DashboardController::class, 'team' ])->name('team');
Route::post('/team/add', [ TeamController::class, 'store' ])->name('addTeam');
Route::delete('/team/{one}/delete', [ TeamController::class, 'destroy' ])->name('deleteTeam');

//Activity Routes
Route::get('/activities', [ DashboardController::class, 'activities' ])->name('activities');
Route::post('/activities/add', [ ActivityController::class, 'store' ])->name('addActivity');
Route::delete('/activities/{activity}/delete', [ ActivityController::class, 'destroy' ])->name('deleteActivity');

//Event Routes
Route::get('/events', [ DashboardController::class, 'events' ])->name('events');

//Volunteer Routes
Route::get('/volunteers', [ DashboardController::class, 'volunteers' ])->name('volunteers');
Route::delete('/volunteers/{volunteer}/delete', [ VolunteersController::class, 'destroy' ])->name('deleteVolunteer');

//Logout Route
Route::post('/logout', [ LogoutController::class, 'logout' ])->name('logout');
