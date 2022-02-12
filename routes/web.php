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
Route::group(["middleware" => "guest"],function (){
    Route::get("/login",[\App\Http\Controllers\AuthController::class,"login"])->name("login");
    Route::get("/register",[\App\Http\Controllers\AuthController::class,"register"])->name("register");
    Route::post("/signUp",[\App\Http\Controllers\AuthController::class,"signUp"])->name("signUp");
    Route::post("/signIn",[\App\Http\Controllers\AuthController::class,"signIn"])->name("signIn");
});
Route::get("/logout",[\App\Http\Controllers\AuthController::class,"logout"])->name("logout");


Route::group(["prefix" => "user","middleware" => "user"],function (){
    Route::get("/create-request",[\App\Http\Controllers\RequestController::class,"create"])->name("create-request");
    Route::get("/update-request/{id}",[\App\Http\Controllers\RequestController::class,"update"])->name("update-request");
    Route::post("/save-request",[\App\Http\Controllers\RequestController::class,"save"])->name("save-request");
    Route::put("/change-request",[\App\Http\Controllers\RequestController::class,"change"])->name("change-request");
    Route::delete("/delete-request",[\App\Http\Controllers\RequestController::class,"delete"])->name("delete-request");
    Route::get("/show-request/{id}",[\App\Http\Controllers\RequestController::class,"showRequest"])->name("show-request");
    Route::get("/my-request",[\App\Http\Controllers\RequestController::class,"myRequest"])->name("myRequest");
    Route::get("/offers/{id}",[\App\Http\Controllers\RequestController::class,"offer"])->name("offer");
    Route::post("/update-attempt",[\App\Http\Controllers\RequestController::class,"updateAttempt"])->name("update-attempt");
    Route::get("/contract/{id}",[\App\Http\Controllers\RequestController::class,"contract"])->name("contract");
    Route::post("/sign-contract",[\App\Http\Controllers\RequestController::class,"signContract"])->name("signContract");
    Route::get("/vacancies",[\App\Http\Controllers\RequestController::class,"vacancies"])->name("vacancies");
    Route::get("/search-vacancies",[\App\Http\Controllers\RequestController::class,"searchVacancies"])->name("search-vacancies");
});


Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function (){
    Route::group(['prefix' => 'orders'], function (){
        Route::get('/received', [OrderController::class, 'received'])->name('received');
        Route::get('/received/{id}', [OrderController::class, 'received_show'])->name('received_show');
        Route::post('/received/{id}', [OrderController::class, 'received_update'])->name('received_update');
        Route::get('/accepted', [OrderController::class, 'accepted'])->name('accepted');
        Route::get('/accepted/{id}', [OrderController::class, 'accepted_show'])->name('accepted_show');
        Route::post('/accepted/{id}', [OrderController::class, 'accepted_update'])->name('accepted_update');
        Route::get('/special_check', [OrderController::class, 'special_check'])->name('special_check');

        Route::get('rejected', [OrderController::class, 'rejected'])->name('rejected');
    });
    Route::group(['prefix' => 'vacancies'], function (){
        Route::get('/', [\App\Http\Controllers\Admin\VacancyController::class, 'index'])->name('vacancies.index');
        Route::get('/create', [\App\Http\Controllers\Admin\VacancyController::class, 'create'])->name('vacancies.create');
        Route::post('/store', [\App\Http\Controllers\Admin\VacancyController::class, 'store'])->name('vacancies.store');
        Route::delete('/{id}', [\App\Http\Controllers\Admin\VacancyController::class, 'destroy'])->name('vacancies.destroy');
        Route::get('delete', [\App\Http\Controllers\Admin\VacancyController::class, 'delete'])->name('vacancies.delete');
    });
});
