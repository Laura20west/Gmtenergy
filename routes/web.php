<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/test', function () {
    return view('test');
});
Route::get('/mid', function () {
    return view('mid');
});
Route::get('/part', function () {
    return view('part');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/footer', function () {
    return view('footer');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/feature', function () {
    return view('feature');
});

Route::get('/track', function () {
    return view('track');
});
