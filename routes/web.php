<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\transactionController;
use App\Http\Controllers\eventController;
use App\Http\Controllers\productController;


Route::get('/', [homeController::class, 'getHome']);

Route::get('/login', [authController::class, 'getLogin']);    
Route::get('/register', [authController::class, 'getRegister']);

Route::get('/transaction/inprogres', [transactionController::class, 'getTrxInprogres']);

Route::get('/event', [eventController::class, 'getEvent']);
Route::get('/event/uuid', [eventController::class, 'getRegistEvent']);


Route::get('/merchant/all', [productController::class, 'getAllMerchant']);
Route::get('/merchant/uuid', [productController::class, 'getDetailMerchant']);
