<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/login', LoginController::class);

