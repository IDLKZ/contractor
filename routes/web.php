<?php

use App\Http\Controllers\Admin\OrderController;
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
Route::post("/signUp",[\App\Http\Controllers\AuthController::class,"signUp"])->name("signUp");
Route::post("/signIn",[\App\Http\Controllers\AuthController::class,"signIn"])->name("signIn");


Route::get("/create-request",[\App\Http\Controllers\RequestController::class,"create"])->name("create-request");
Route::post("/save-request",[\App\Http\Controllers\RequestController::class,"save"])->name("save-request");


Route::get("/cabinet",[\App\Http\Controllers\UserCabinetController::class,"cabinet"])->name("cabinet");
Route::get("/my-request",[\App\Http\Controllers\RequestController::class,"myRequest"])->name("myRequest");
Route::get("/offers",[\App\Http\Controllers\RequestController::class,"offers"])->name("myRequest");


Route::group(['prefix' => 'admin'], function (){
    Route::group(['prefix' => 'orders'], function (){
        Route::get('/received', [OrderController::class, 'received'])->name('received');
        Route::get('/received/{id}', [OrderController::class, 'received_show'])->name('received_show');
        Route::get('/accepted', [OrderController::class, 'accepted'])->name('accepted');
        Route::get('/accepted/{id}', [OrderController::class, 'accepted_show'])->name('accepted_show');
        Route::get('/special_check', [OrderController::class, 'special_check'])->name('special_check');
    });

});
