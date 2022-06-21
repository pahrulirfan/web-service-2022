<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\CustomerController;

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

Route::group(['prefix' => 'v1', 'middleware' => 'auth:api'], function () {

    Route::get('customers', [CustomerController::class, 'index']);
    Route::get('customer/{id}', [CustomerController::class, 'show']);
    Route::post('customer', [CustomerController::class, 'store']);
    Route::patch('customer/{id}', [CustomerController::class, 'update']);
    Route::delete('customer/{id}', [CustomerController::class, 'delete']);

    Route::get('products', [\App\Http\Controllers\ProductController::class, 'index']);
    Route::get('categories', [\App\Http\Controllers\CategoryController::class, 'index']);

});

Route::group(['middleware' => 'api', 'prefix' => 'auth'], function ($router) {
    Route::post('login', [\App\Http\Controllers\API\AuthController::class, 'login']);
    Route::post('logout', [\App\Http\Controllers\API\AuthController::class, 'logout']);
    Route::post('refresh', [\App\Http\Controllers\API\AuthController::class, 'refresh']);
    Route::post('me', [\App\Http\Controllers\API\AuthController::class, 'me']);
});
