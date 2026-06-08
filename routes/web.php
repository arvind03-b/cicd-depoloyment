<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
Route::get('/', function () {
    return view('welcome');
});

Route::post('/login', [loginController::class, 'login']);
Route::get('/login', function () {
    return view('index');
});

