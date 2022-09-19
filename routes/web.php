<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Home page
Route::get('/', function () { return view('home'); });

// Register page
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// Store a new user
Route::post('/users', [UserController::class, 'store']);

// Login
Route::get('/login', [Usercontroller::class, 'login'])->name('login')->middleware('guest');

// Authenticate
Route::post('/authenticate', [UserController::class, 'authenticate']);

// Logout
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// Userpage
Route::get('/{userhandle}' , [UserController::class, 'userpage']);
