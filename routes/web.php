<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RooznamchaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LockScreenController;
use App\Http\Controllers\PasswordRecoveryController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\GenusController;

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
    return view('employee_profile');
});
// Route::get('form', function () {
//     return view('form');
// });
Route::resource('home', HomeController::class)->middleware('guard');
Route::resource('rooznamcha', RooznamchaController::class)->middleware('guard');
Route::resource('login', LoginController::class);
Route::resource('register', RegisterController::class);
Route::resource('screenlock', LockScreenController::class)->middleware('guard');
Route::resource('passwordrecovery', PasswordRecoveryController::class)->middleware('guard');
Route::get('logout', [LogoutController::class, 'logout']);
Route::resource('employee', EmployeeController::class);
Route::resource('genus', GenusController::class);
