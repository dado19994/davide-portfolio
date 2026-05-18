<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::get('/progetti/vendohub-ai', function () {
    return view('projects.vendohub-ai');
})->name('projects.vendohub-ai');
