<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BlogControler;

//Normal controller 
Route::get('/', [PostController::class, 'index'])->name('index');

//CRUD controller
Route::get('/',[BlogControler::class, 'index'])->name('index');

Route::get('/create',[BlogControler::class, 'create'])->name('create');

Route::post('/store',[BlogControler::class, 'store'])->name('store');

Route::match([get,post],'/create',[BlogControler::class, 'create'])->name('store');

Route::resource('blog', BlogControler::class);