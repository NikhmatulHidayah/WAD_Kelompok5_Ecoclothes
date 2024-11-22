<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


Route::get('/login', [authController::class, 'getLogin']);    
Route::get('/register', [authController::class, 'getRegister']);    
