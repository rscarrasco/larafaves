<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Home page
Route::get('/', function () { return view('home'); });

// Register page
Route::get('/register', [UserController::class, 'create']);

// Store a new user
Route::post('/users', [UserController::class, 'store']);
