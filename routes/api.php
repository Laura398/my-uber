<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CartController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::apiResource('/client/product', ProductController::class);
Route::apiResource('/client/profile', ProfileController::class);
Route::apiResource('/client/order', OrderController::class);
Route::apiResource('/client/cart', CartController::class);

Route::apiResource('/client/state', OrderController::class);

Route::apiResource('/seller/order', OrderController::class);

Route::apiResource('/shipper/order', OrderController::class);
