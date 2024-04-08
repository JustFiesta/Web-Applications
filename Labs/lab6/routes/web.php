<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\Test2Controller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test1', [Test2Controller::class,'renderView']);

