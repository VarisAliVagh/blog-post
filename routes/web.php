<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryPagesController;
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

$path = $_SERVER['REQUEST_URI'] ??  "";
$categoryArr = ['/business', '/health', '/lifestyle', '/politics', '/sciTech', '/sports'];
$category = array_search($path, $categoryArr, true);
$view = explode('/', $path)[1] ?? '';


Route::get('/', [HomeController::class, 'index'])->name('index')->middleware('guard');
Route::get('/post', [PostController::class, 'index'])->name('post')->middleware('guard');
Route::post('/post', [PostController::class, 'createPost'])->name('createPost')->middleware('guard');
Route::get('/view/{postId}', [PostController::class, 'viewPost'])->name('viewPost')->middleware('guard');
Route::post('/view/{postId}', [PostController::class, 'createComment'])->name('createComment')->middleware('guard');
Route::get('/viewEdit/{postId}', [PostController::class, 'viewEdit'])->name('viewEdit')->middleware('guard');
Route::post('/viewEdit/{postId}', [PostController::class, 'editPost'])->name('editPost')->middleware('guard');
Route::get('/delete/{postId}', [PostController::class, 'deletePost'])->name('deletePost')->middleware('guard');
Route::get($categoryArr[$category], [CategoryPagesController::class, 'category'])->name('category')->middleware('guard');
Route::get('/' . $view . '/view/{postId}', [CategoryPagesController::class, 'catView'])->name('catView')->middleware('guard');
Route::get('/login', [AuthController::class, 'getLogin'])->name('getLogin');
Route::post('/login', [AuthController::class, 'postLogin'])->name('postLogin');
Route::get('/register', [AuthController::class, 'getRegister'])->name('getRegister');
Route::post('/register', [AuthController::class, 'postRegister'])->name('postRegistered');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/getSession', function () {
    $session = session()->all();
    pre($session);
});

Route::get('/destroySession', function () {
    session()->forget('id');
});
