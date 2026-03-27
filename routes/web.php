<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('web.home');
});

Route::get('/contact', function () {
    return view('web.contact');
});
Route::get('/course', function () {
    return view('web.course');
});
