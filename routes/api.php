<?php

use App\Http\Controllers\api\AuthController;
use App\Http\Controllers\api\ConsumtionController;
use App\Http\Controllers\api\ProductContrller;
use App\Http\Controllers\api\ProductivityController;
use App\Models\Consumption;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('auth')->controller(AuthController::class)->group(function() {
    Route::get('register', "register");
    Route::get('login', "login");
    Route::get('logout', "logout");
    Route::get('about-me', "abotuMe");
});


Route::prefix('product')->controller(ProductContrller::class)->group(function() {
    Route::get('/', "index");
    Route::get('/{id}', "search")->where("id","[0-9]+");
    Route::delete('/{id}', "search")->where("id","[0-9]+");
});

Route::prefix('consumption')->controller(ConsumtionController::class)->group(function() {
    Route::get('/', "index");
    Route::get('/{id}', "search")->where("id","[0-9]+");
    Route::delete('/{id}', "search")->where("id","[0-9]+");
});

Route::prefix('productivity')->controller(ProductivityController::class)->group(function() {
    Route::get('/', "index");
    Route::get('/{id}', "search")->where("id","[0-9]+");
    Route::delete('/{id}', "search")->where("id","[0-9]+");
});