<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SiswaBaruController;
use App\Http\Controllers\PeriodeController;
use App\Models\siswaBaru;
use Illuminate\Support\Facades\Route;


Route::get('/login',[UserController::class,'login'])->name('login');
Route::post('/login',[UserController::class,'postLogin'])->name('postLogin');
Route::get('/logout',[UserController::class,'logout'])->name('logout');

Route::get('/',[UserController::class,'landing'])->name('landing.register');
Route::post('/ppdb',[UserController::class,'registerPost'])->name('landing.registerPost');

Route::group(['middleware'=>'auth'], function(){
    Route::get('/dashboard', [DashboardController::class ,'index'])->name('index.dashboard');
    Route::get('/siswa/profile/{id}',[UserController::class,'profile'])->name('profile');
    Route::post('/update/profile/{id}',[siswaBaruController::class,'update'])->name('update.profile');
    Route::get('/data-siswa',[SiswaBaruController::class,'show'])->name('siswa.show');
    Route::post('/ubah-password',[UserController::class,'changePassword'])->name('changePassword');
    Route::get('/pengumuman/{id}',[SiswaBaruController::class.'pengumuman'])->name('pengumuman.siswa');


    Route::get('/periode',[PeriodeController::class ,'index'])->name('index.periode');
    Route::get('/create-periode',[PeriodeController::class ,'create'])->name('create.periode');
    Route::post('/insert-periode',[PeriodeController::class ,'insert'])->name('insert.periode');
    Route::get('/edit-periode/{id}',[PeriodeController::class ,'edit'])->name('edit.periode');
    Route::post('/update-periode/{id}',[PeriodeController::class ,'update'])->name('update.periode');
    Route::get('/delete-periode/{id}',[PeriodeController::class ,'delete'])->name('delete.periode');
    Route::get('/status-periode/{id}',[PeriodeController::class ,'status'])->name('status.periode');

    Route::get('/data-user',[UserController::class,'index'])->name('user.index');
    Route::get('/ubah-password/{id}',[UserController::class,'Password'])->name('user.password');
});
