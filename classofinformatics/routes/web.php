<?php

use App\Http\Controllers\Admin\registController;
use App\Http\Controllers\Mahasiswa\viewController;
use App\Http\Controllers\Admin\viewAdminController;
use App\Http\Controllers\Admin\mapelController;
use App\Http\Controllers\userController;
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

// TEST
Route::get('/testlogin', function () {
    return view('testlogin');
});

//MAHASISWA
Route::get('/login', [viewController::class, 'login']);
Route::post('/login', [userController::class, 'login']);
Route::get('/home', [viewController::class, 'home'])->middleware('auth');

//ADMIN
Route::get('/admin/registMahasiswa', [viewAdminController::class, 'registMahasiswa']);
Route::post('/admin/registMahasiswa', [registController::class, 'registMahasiswa']);
Route::get('/admin/registMentor', [viewAdminController::class, 'registMentor']);
Route::post('/admin/registMentor', [registController::class, 'registMentor']);
Route::post('/admin/createMapel', [mapelController::class, 'createMapel']);
Route::get('/admin/createMapel', [viewAdminController::class, 'createMapel']);
