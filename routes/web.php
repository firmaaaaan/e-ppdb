<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [DashboardController::class ,'index'])->name('index.dashboard');

Route::get('/login',[UserController::class,'login'])->name('login');
Route::post('/login',[UserController::class,'postLogin'])->name('postLogin');
Route::get('/logout',[UserController::class,'logout'])->name('logout');

Route::get('/',[UserController::class,'landing'])->name('landing.register');
Route::post('/ppdb',[UserController::class,'registerPost'])->name('landing.registerPost');
