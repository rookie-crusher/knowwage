<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


Route::get('/goodboy', [App\Http\Controllers\ContactController::class, 'index'])->name('goodboy');

Route::get('/badboy', [App\Http\Controllers\ContactController::class, 'index'])->name('badboy');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bob', function () {
    return view('bob');
});
