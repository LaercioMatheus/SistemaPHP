<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();


Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('/');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::get('/psychol', [App\Http\Controllers\PsycholController::class, 'psychol'])->name('psychol');
Route::get('/consultation', [App\Http\Controllers\ConsultationController::class, 'consultation'])->name('consultation');
Route::get('/agenda', [App\Http\Controllers\AgendaController::class, 'agenda'])->name('agenda');
