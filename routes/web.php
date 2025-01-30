<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Rest Routes

Route::get('/layout', function () {
    return view('panel.layout.app');
});
