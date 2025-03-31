<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();


Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('/');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
