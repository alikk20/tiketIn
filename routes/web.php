<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});

Route::get('/explore', function () {
    return view('explore');
});

Route::get('/about', function () {
    return view('aboutus');
});

Route::get('/contact', function () {
    return view('contact');
});