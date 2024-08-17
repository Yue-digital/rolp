<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

Route::get('/', function () {
    return view('home/home');
});

Route::get('/blog/', [BlogController::class, 'show']);
Route::get('/blog/{title}',[BlogController::class, 'single']);