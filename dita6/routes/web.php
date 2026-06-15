<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

Route::get('/', [BlogController::class, 'home'])->name('blog.home');
Route::get('/home', [BlogController::class, 'home']);
Route::get('/about', [BlogController::class, 'about'])->name('blog.about');
Route::get('/contact', [BlogController::class, 'contact'])->name('blog.contact');
