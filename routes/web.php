<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/test', function () {
    return view('test', ['title' => 'Test Page']);
});
