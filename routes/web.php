<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages/home');
});
Route::get('/about', function () {
    return view('pages/about');
});

Route::get('about/basileia', function () {
    return view('pages/basileia');
});

Route::get('about/history', function () {
    return view('pages/history');
});
