<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\transactionController;
use App\Http\Controllers\eventController;


Route::get('/', [homeController::class, 'getHome']);

Route::get('/login', [authController::class, 'getLogin']);    
Route::get('/register', [authController::class, 'getRegister']);

Route::get('/transaction/inprogres', [transactionController::class, 'getTrxInprogres']);

Route::get('/event', [eventController::class, 'getEvent']);
Route::get('/event/uuid', [eventController::class, 'getRegistEvent']);
