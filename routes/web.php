<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get("/login",[\App\Http\Controllers\AuthController::class,"login"])->name("login");
Route::get("/register",[\App\Http\Controllers\AuthController::class,"register"])->name("register");
Route::get("/create-request",[\App\Http\Controllers\RequestController::class,"create"])->name("create-request");
Route::get("/cabinet",[\App\Http\Controllers\UserCabinetController::class,"cabinet"])->name("cabinet");
Route::get("/my-request",[\App\Http\Controllers\RequestController::class,"myRequest"])->name("myRequest");
Route::get("/offers",[\App\Http\Controllers\RequestController::class,"offers"])->name("myRequest");
