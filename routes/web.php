<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::permanentRedirect('/home', '/');
Route::view('/about', 'about');
