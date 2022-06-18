<?php

use App\Http\Controllers\Mahasiswa\viewController;
use App\Http\Controllers\Mahasiswa\userController;
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

//MAHASISWA
Route::get('/login', [viewController::class, 'login']);
Route::get('/home', [viewController::class, 'home'])->middleware('auth');


Route::post('/login', [userController::class, 'login']);
