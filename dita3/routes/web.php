<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


//Laravel Routing Parameters
Route::get('/user/{id}', function ($id) {
    return 'User ID:'.$id;
});

//Optional Parameters   
Route::get('/users/{id?}', function ($id = null) {
    return 'User ID:'.$id;
});

//Regular Expression Constraints
Route::get('/admin/{id}', function ($id) {
    return 'User ID:'.$id;
})->where('id', '[0-9]+');

Route::get('/name/{name}', function ($name) {
    return 'User Name:'.$name;
})->where('name', '[a-zA-Z]+');


Route::get('/name/{name}', function ($name) {
    return 'User Name:'.$name;
})->where('name', '[a-zA-Z0-9]+');


//Middleware
//Route::get('/age', function () {
//    return 'This is a age page';
//})->middleware('age');

Route::get('/age/{age}', function ($age) {
    return 'Your age is:'.$age;
})->middleware('age');