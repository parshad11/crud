<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\Postcontroller;
Use App\Http\Controllers\LoginController;

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
    return view('post');
});

// Auth Route
Route::get("loginpage",[LoginController::class,'loginpage']);
Route::get("signuppage",[LoginController::class,"signuppage"]);
Route::post("signupsubmit",[LoginController::class,'signupsubmit']);
Route::post("loginsubmit",[LoginController::class,'loginsubmit']);
Route::get("logoutsubmit",[LoginController::class,'logoutsubmit']);
Route::get("/",[LoginController::class,'middlewareuser']);

// Product Route
Route::get("enterproduct",[postcontroller::class,'enterproduct']);
Route::POST("submitproduct",[postcontroller::class,'submitproduct']);
Route::get("/",[Postcontroller::class,'showpost']);
Route::view("adminlogin",'/Auth/adminlogin');
Route::view("admin",'admin');
Route::get("admin",[Postcontroller::class,'showadmin']);
Route::get('/viewproduct/{id}',[Postcontroller::class,'editData'])->name('viewproduct');
Route::POST('/updateproduct/{id}',[Postcontroller::class,'updateproduct'])->name('updateproduct');
Route::GET('/deleteproduct/{id}',[Postcontroller::class,'destroy'])->name('deleteproduct');