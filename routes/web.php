<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use App\Http\Controllers\homeController;

Route::get('/', [homeController::class, 'getHome']);

Route::get('/login', [authController::class, 'getLogin']);    
Route::get('/register', [authController::class, 'getRegister']);

