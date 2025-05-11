<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
Route::get('/{guest}',[HomeController::class,'index'])->name('home');
Route::post('/registrar')->name('register');

Route::get('/registrar-familia',);
