<?php

use App\Http\Controllers\LanguageController;
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
Route::view('/email/confirm', 'auth.confirm-email')->name('confirmation.notice');
Route::view('/email/verify', 'auth.verify-email')->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', [RegisterController::class, 'verify'])->middleware(['auth', 'signed'])->name('verification.verify');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/change-locale/{locale}', [LanguageController::class, 'change'])->name('locale.change');
