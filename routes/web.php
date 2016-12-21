<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('content.main');
});

Route::get('/card', function () {
    return view('content.card');
});

Route::get('/dialog', function () {
    return view('content.dialog');
});

Route::get('/layout', function () {
    return view('content.layout');
});

Auth::routes();
