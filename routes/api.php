<?php

use App\Http\Controllers\Customers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


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

Route::get("data",[ProductsController::class ,'getData']);
route::get("list/",[ProductsController::class,'list']);
route::get("list/{id}",[ProductsController::class,'listparams']);
route::post('signup',[UserController::class,'signup']);
route::post('login',[UserController::class,'login']);
route::get("/Img",[ProductsController::class,'index']);
