<?php

use App\Http\Controllers\SocialController;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('layout');
// });


Route::get('/home', [UserController::class, 'index']);

// user

Route::get('/register', [UserController::class, 'register']);
Route::post('/doRegister', [UserController::class, 'doRegister']);
Route::get('/login', [UserController::class, 'login']);
Route::post('/doLogin', [UserController::class, 'doLogin']);
Route::get('/logout', [UserController::class, 'logout']);




// Add Social

route::get('/socials/create', [SocialController::class, 'create'])->name('social.create')->middleware('auth');
route::post('/socials/store', [SocialController::class, 'store'])->middleware('auth');
route::get('/socials/edit/{id}', [SocialController::class, 'edit'])->name('social.edit')->middleware('auth');
route::post('/socials/update/{id}', [SocialController::class , 'update'])->middleware('auth');
route::get('/socials/delete/{id}', [SocialController::class, 'delete'])->middleware('auth');

