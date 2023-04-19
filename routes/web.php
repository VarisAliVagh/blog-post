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



Route::get('/',[HomeController::class,'index'])->name('index')->middleware('guard');
Route::get('/post',[PostController::class,'index'])->name('post')->middleware('guard');
Route::post('/post',[PostController::class,'createPost'])->name('createPost')->middleware('guard');
Route::get('/view/{postId}',[PostController::class,'viewPost'])->name('viewPost')->middleware('guard');
Route::post('/view/{postId}',[PostController::class,'createComment'])->name('createComment')->middleware('guard');
Route::get('/edit/{postId}',[PostController::class,'editPost'])->name('editPost')->middleware('guard');


// Route::post('/post/create',[PostController::class,'create'])->middleware('guard');
// Route::post('/createComment/{id}',[PostController::class,'createComment'])->middleware('guard');

// Route::post('/post/update/{id}',[PostController::class,'updatePost'])->middleware('guard');
// Route::get('/delete/{id}',[PostController::class,'DeletePost'])->middleware('guard');



Route::get('/login',[AuthController::class,'getLogin'])->name('getLogin');
Route::post('/login',[AuthController::class,'postLogin'])->name('postLogin');
Route::get('/register',[AuthController::class,'getRegister'])->name('getRegister');
Route::post('/register',[AuthController::class,'postRegister'])->name('postRegistered');
Route::get('/logout',[AuthController::class,'logout'])->name('logout');





Route::get('/getSession',function(){
    $session = session()->all();
    pre($session);
});

Route::get('/destroySession',function(){
    session()->forget('id');
});
