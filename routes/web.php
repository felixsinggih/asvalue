<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PasswordResetController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TryController;
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

Route::get('/', [HomeController::class, 'index']);
// Route::get('/', [HomeController::class, 'index']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/sendemail', [EmailController::class, 'sendEmailVerification'])->middleware('auth:user');
Route::get('/emailconfirmation/{token}', [EmailController::class, 'emailConfirmation']);
Route::get('/forgotpassword', [PasswordResetController::class, 'index']);
Route::post('/forgotpassword', [PasswordResetController::class, 'forgot']);
Route::get('/passwordverification', [PasswordResetController::class, 'verification']);
Route::post('/passwordverification', [PasswordResetController::class, 'verify']);

Route::get('/resetpassword/{token}', [PasswordResetController::class, 'reset']);
Route::post('/resetpassword', [PasswordResetController::class, 'reseting']);

Route::get('/try', [TryController::class, 'index'])->middleware('auth:user');
Route::get('/trynow', [TryController::class, 'trynow'])->middleware('auth:user');
Route::get('/demosuccess', [TryController::class, 'demoSuccess'])->middleware('auth:user');
Route::get('/demoreject', [TryController::class, 'demoReject'])->middleware('auth:user');

Route::get('/profile', [ProfileController::class, 'index'])->middleware('auth:user');

// admin
Route::get('/asv-login', [Admin\LoginController::class, 'index'])->middleware('guest');
Route::post('/asv-login', [Admin\LoginController::class, 'authenticate']);
Route::post('/asv-login/logout', [Admin\LoginController::class, 'logout']);

Route::get('/asv-admin', [Admin\DashboardController::class, 'index'])->middleware('auth:admin');
