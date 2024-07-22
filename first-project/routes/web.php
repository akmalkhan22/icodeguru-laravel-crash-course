<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function(){
    return view('home');
});
Route::get('/contact', function(){
    return view('contact');
});
Route::get('/services', function(){
    return view('service');
});
Route::get('/about', function(){
    return view('about');
});