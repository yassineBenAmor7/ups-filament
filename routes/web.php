<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::redirect('/admin/profile', '/admin/my-profile');



Route::get('/kendo-example', function () {
    return view('kendo-example');
});
