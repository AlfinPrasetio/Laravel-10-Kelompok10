<?php

use App\Http\Controllers\ProsesbisnisController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('/data',ProsesbisnisController::class);

Route::get('/login', [SessionController::class,'index']);
Route::post('/proses_login', [SessionController::class, 'proses_login']);

Route::get('/pendaftaran', [SessionController::class,'pendaftaran']);
Route::post('/proses_pendaftaran', [SessionController::class, 'proses_pendaftaran']);

Route::get('/logout', [SessionController::class, 'logout']);

Route::get('/Login', 'AuthController@showLoginForm')->name('login');

