<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenyewaanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrasiController;

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
//     return view('welcome');
// });
Route::get('/home', function () {
    return view('home');
});
Route::get('/daftar', function () {
    return view('daftar');
});
Route::resource('pesanan', PenyewaanController::class);
Route::get('/index', [PenyewaanController::class, 'index']);
Route::get('/lala', [PenyewaanController::class, 'create']);

// register 
Route::get('/register', [RegistrasiController::class, 'index']);
Route::post('/register', [RegistrasiController::class, 'store']);

// login
Route::get('/', [LoginController::class, 'index']);
Route::post('/', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
