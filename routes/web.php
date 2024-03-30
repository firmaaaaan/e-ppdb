<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SiswaBaruController;
use App\Models\siswaBaru;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [DashboardController::class ,'index'])->name('index.dashboard');

Route::get('/login',[UserController::class,'login'])->name('login');
Route::post('/login',[UserController::class,'postLogin'])->name('postLogin');
Route::get('/logout',[UserController::class,'logout'])->name('logout');

Route::get('/',[UserController::class,'landing'])->name('landing.register');
Route::post('/ppdb',[UserController::class,'registerPost'])->name('landing.registerPost');

Route::group(['middleware'=>'auth'], function(){
    Route::get('/siswa/profile/{id}',[UserController::class,'profile'])->name('profile');
    Route::post('/update/profile/{id}',[siswaBaruController::class,'update'])->name('update.profile');
    Route::get('/data-siswa',[SiswaBaruController::class,'show'])->name('siswa.show');
    Route::post('/ubah-password',[UserController::class,'changePassword'])->name('changePassword');
});
