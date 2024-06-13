<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/webhook', function (Request $request) {
    return 'webhook';
});
