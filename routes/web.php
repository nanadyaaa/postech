<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HaiController;
use App\Http\Controllers\UserController;

Route::get('/postech/{sklh}/cek', [HaiController::class, 'index']);

Route::get('/dashboard',  [AuthController::class, 'dashboard'])->name('dashboard');
Route::get('/', [AuthController::class, 'dashboard']); 
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
//Route::get('logout', [AuthController::class, 'logout'])->name('logout');
//Route::get('/users', [UserController::class, 'index'])->name('users');

Route::resource('users', UserController::class); 