<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');

Route::get('noticias', [NoticiaController::class, 'index'])->name('noticias.index');
Route::get('noticias/create', [NoticiaController::class, 'create'])->name('noticias.create');
Route::get('noticias/{noticia}', [NoticiaController::class, 'show'])->name('noticias.show');
Route::get('noticias/{noticia}/edit', [NoticiaController::class, 'edit'])->name('noticias.edit');
Route::post('noticias', [NoticiaController::class, 'store'])->name('noticias.store');
Route::put('noticias/{noticia}', [NoticiaController::class, 'update'])->name('noticias.update');

Route::get('reviews', [ReviewController::class, 'index'])->name('reviews.index');
Route::get('reviews/create', [ReviewController::class, 'create'])->name('reviews.create');
Route::get('reviews/{review}', [ReviewController::class, 'show'])->name('reviews.show');
Route::get('reviews/{review}/edit', [ReviewController::class, 'edit'])->name('reviews.edit');
Route::post('reviews', [ReviewController::class, 'store'])->name('reviews.store');
Route::put('reviews/{review}', [ReviewController::class, 'update'])->name('reviews.update');

//Login y registro de usuario
Route::get('auth/login',[AuthController::class,'login'])->name('login')->middleware('guest');
Route::post('auth/login',[AuthController::class,'auth_login'])->name('auth_login');
Route::get('user/dashboard',[DashboardController::class,'index'])->name('user.dashboard')->middleware('auth');
Route::get('auth/register',[AuthController::class,'register'])->name('register');
Route::post('home',[AuthController::class,'store'])->name('store');
Route::post('auth/logout', [AuthController::class, 'logout'])->name('logout');