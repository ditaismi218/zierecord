<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataTahunAjaranController;
use App\Http\Controllers\DataUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', [HomeController::class, 'index']);
Route::get('dashboard', [DashboardController::class, 'index']);
Route::get('DataTahunAjaran', [DataTahunAjaranController::class, 'index']);
Route::get('DataUser', [UserController::class, 'index']);
Route::post('DataUser', [UserController::class, 'store']);
Route::patch('DataUser/{id}', [UserController::class, 'update']);
Route::delete('DataUser/{id}', [UserController::class, 'destroy']);
