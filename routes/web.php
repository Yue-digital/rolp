<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages/home');
});
Route::get('/about', function () {
    return view('pages/about');
});
//Route::get('/test', function () {
//    return view('pages/test');
//});