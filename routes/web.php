<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\transactionController;
use App\Http\Controllers\eventController;
use App\Http\Controllers\productController;
use App\Http\Controllers\merchantController;


Route::get('/', [homeController::class, 'getHome']);

Route::get('/login', [authController::class, 'getLogin']);    
Route::get('/register', [authController::class, 'getRegister']);

Route::get('/transaction/inprogres', [transactionController::class, 'getTrxInprogres']);

Route::get('/event', [eventController::class, 'getEvent']);
Route::get('/event/uuid', [eventController::class, 'getRegistEvent']);


Route::get('/merchant/all', [productController::class, 'getAllMerchant']);
Route::get('/merchant/uuid', [productController::class, 'getDetailMerchant']);
Route::get('/merchant/uuid/product/id_product', [productController::class, 'getDetailProduct']);

Route::get('/admin/merchant/order/all', [merchantController::class, 'getAllOrder']);
Route::get('/admin/merchant/setting', [merchantController::class, 'getMerchantDashboard']);
Route::post('admin/merchant/logout', [MerchantController::class, 'logout'])->name('logout');


Route::get('/admin/merchant/add/branch', [merchantController::class, 'getAddMerchant']);
Route::post('/admin/merchant/add/branch/post', [merchantController::class, 'postAddMerchant']);

Route::get('/admin/merchant/login', [merchantController::class, 'getLogin']);
Route::post('/admin/merchant/login/post', [authController::class, 'postLogin']);

