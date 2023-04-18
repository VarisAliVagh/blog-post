<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something     great!
|
*/



Route::get('/',[HomeController::class,'index'])->middleware('guard');
Route::get('/post/{id?}',[PostController::class,'index'])->middleware('guard');
Route::post('/post/create',[PostController::class,'create'])->middleware('guard');
Route::get('/viewPost/{id}',[PostController::class,'viewPost'])->middleware('guard');
Route::post('/createComment/{id}',[PostController::class,'createComment'])->middleware('guard');

Route::post('/post/update/{id}',[PostController::class,'updatePost'])->middleware('guard');
Route::get('/delete/{id}',[PostController::class,'DeletePost'])->middleware('guard');



Route::get('/login',[AuthController::class,'login']);
Route::post('/login',[AuthController::class,'loginUser']);
Route::get('/register',[AuthController::class,'register']);
Route::post('/register',[AuthController::class,'registerUser']);
Route::get('/logout',[AuthController::class,'logoutUser']);





Route::get('/getSession',function(){
    $session = session()->all();
    pre($session);
});

Route::get('/destroySession',function(){
    session()->forget('id');
});
