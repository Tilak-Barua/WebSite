<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\A2user;
use App\Http\Controllers\UploadController;

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

Route::get('/register',          [UserController::class,'register']);
Route::post('/store_data',[UserController::class,'store']);

//Route::get('/tables',     [UserController::class,'index']);

Route::post('/login_store',     [UserController::class,'auth']);
Route::get('/login',     [UserController::class,'login']);


Route::get('/r', function () {
    return view('admin.layouts.default');
});


Route::get('/login', function () {
    return view('admin.pages.login');
});

Route::get('/dashboard',     [UserController::class,'index']);