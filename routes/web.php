<?php

use App\Http\Controllers\AuthController;
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

Route::get('/', AuthController::class.'@welcome')->name('welcome');

Route::get('/register', AuthController::class.'@register')->name('register');
Route::post('/register_form', AuthController::class.'@registerForm')->name('register_form');

Route::get('/home', AuthController::class.'@home')->name('home');
