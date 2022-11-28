<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Routs For Out Payments (المصروفات الخارجية)
Route::get('payment', [\App\Http\Controllers\Api\PaymentController::class, 'index']);
Route::get('payment/{id}', [\App\Http\Controllers\Api\PaymentController::class, 'show']);
Route::post('payment', [\App\Http\Controllers\Api\PaymentController::class, 'store']);
Route::post('payment/{id}', [\App\Http\Controllers\Api\PaymentController::class, 'update']);
Route::delete('payment/{id}', [\App\Http\Controllers\Api\PaymentController::class, 'destroy']);


// Routs For incomes and outcomes Mony

Route::get('bills', [\App\Http\Controllers\Api\TotalController::class, 'show']);