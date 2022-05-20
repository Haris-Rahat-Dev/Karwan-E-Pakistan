<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ActivityController\ActivityController;
use App\Http\Controllers\MailController\MailController;
use App\Http\Controllers\TeamController\TeamController;
use App\Http\Controllers\VolunteersController\VolunteersController;
use App\Models\Cities;
use App\Models\States;
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
//For  App


Route::post('app/contactUs',[ MailController::class, 'store' ])->name('apiContactUs');


//For Team
Route::post('app/addTeam',[ TeamController::class, 'storeApi' ])->middleware('auth:sanctum')->name('apiAddTeam');
Route::get('app/getTeam',[ TeamController::class, 'indexApi' ])->name('apiGetTeam');
Route::post('app/deleteTeam/{id}',[ TeamController::class, 'destroyApi' ])->middleware('auth:sanctum')->name('apiDeleteTeam');

//For Activities
Route::post('app/addActivity',[ ActivityController::class, 'storeApi' ])->middleware('auth:sanctum')->name('apiAddActivity');
Route::get('app/getActivities',[ ActivityController::class, 'indexApi' ])->name('apiGetActivities');
Route::post('app/deleteActivity/{id}',[ ActivityController::class, 'destroyApi' ])->middleware('auth:sanctum')->name('apiDeleteActivity');


//For Volunteers
Route::post('app/registerVolunteer',[ VolunteersController::class, 'store' ])->name('apiRegister');
Route::get('app/getVolunteers',[ VolunteersController::class, 'index' ])->name('apiGetVolunteers');
Route::post('app/deleteVolunteer/{id}',[ VolunteersController::class, 'destroyApi' ])->middleware('auth:sanctum')->name('apiDeleteVolunteer');

//For Authentication
Route::post('app/login', [ LoginController::class, 'loginApi' ]);
Route::post('app/logout', [ LogoutController::class, 'logoutApi' ]);
Route::post('app/register', [ RegisterController::class, 'registerApi' ]);

//For States and Cities
Route::get('app/States', function (){
   $states  = States::where('country_id', '=',166)->get();
   return response([ 'states' => $states ], 200);
});

Route::get('app/Cities/{stateId}', function ($stateId){
    $cities  = Cities::where('state_id', '=', $stateId)->get();
    return response([ 'cities' => $cities ], 200);
});
