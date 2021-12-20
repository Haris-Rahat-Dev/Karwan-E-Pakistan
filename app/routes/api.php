<?php

use App\Http\Controllers\MailController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\VolunteersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('app/register',[ VolunteersController::class, 'store' ])->name('apiRegister');
Route::post('app/contactUs',[ MailController::class, 'store' ])->name('apiContactUs');
Route::post('app/addTeam',[ TeamController::class, 'store' ])->name('apiAddTeam');
