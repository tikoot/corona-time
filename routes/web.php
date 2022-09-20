<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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
Route::view('/', 'auth.register')->name('register');
Route::view('/login', 'auth.login')->name('login');
Route::view('/email/confirm', 'auth.email.confirm-email')->name('confirmation.notice');
Route::view('/email/verify', 'auth.email.verify-email')->name('verification.notice');
Route::view('/forgot-password', 'auth.password.forgot-password')->name('password.request');
Route::view('/password/confirm', 'auth.password.confirm-password')->name('confirm.password');

Route::get('/email/verify/{id}/{hash}', [RegisterController::class, 'verify'])->middleware(['auth', 'signed'])->name('verification.verify');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/change-locale/{locale}', [LanguageController::class, 'change'])->name('locale.change');

Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLink'])->name('password.email');
Route::get('/reset-password/{token}', [ForgotPasswordController::class, 'passwordReset'])->name('password.reset');
Route::post('/reset-password', [ForgotPasswordController::class, 'passwordUpdate'])->name('password.update');

Route::post('/dashboard', [LoginController::class, 'login'])->name('dashboard');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/dashboard', [DashboardController::class, 'WorldwideStatistics'])->name('dashboard.worldwide');
Route::get('/dashboard/countries', [DashboardController::class, 'CountryStatistics'])->name('dashboard.countries');
