<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/kendo-example', function () {
    return view('kendo-example');
});
