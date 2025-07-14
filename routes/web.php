<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/run-queue', function () {
    Artisan::call('queue:work', [
        '--once' => true,
    ]);

    return 'Queue processed once.';
});


Route::get('/kendo-example', function () {
    return view('kendo-example');
});
