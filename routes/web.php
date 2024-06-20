<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::permanentRedirect('/home', '/');
Route::view('/about', 'about');

Route::get('/users', function () {
    $users = DB::select('select * from users');
    return view('users' , ['users' => $users]);
});

Route::get('/users/{id}', function ($id) {
    $user = DB::selectOne('select * from users where id = ?', [$id]);
    return view('user' , ['user' => $user]);
});
