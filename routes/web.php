<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\GuardianController;
use App\Http\Controllers\savedataController;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\MaintenanceController;
use App\Http\Controllers\UserController;

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
    return view('index');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('teams', TeamController::class);
    Route::resource('maintenance', MaintenanceController::class);
    Route::resource('equipement', EquipmentController::class);
    Route::resource('guardien', GuardianController::class);
    Route::resource('users', UserController::class);
});


Route::post('savedata', [App\Http\Controllers\savedataController::class, 'save']);
