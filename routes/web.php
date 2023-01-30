<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\VueController;

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

// Route::get('/', 'VueController')->where('path', '(.*)');

// Route::get('{path}', 'VueController')->where('path', '(.*)');
// Route::get('{path}', VueController::class)->where('path', '(.*)');
// Route::view('{path}', VueController::class)->where('path', '(.*)');

// Route::view('/{vue_capture?}', 'vue.welcome');
// Route::view('/{vue_capture?}', 'vue.index');

Route::view('/', 'welcome');

// Route::redirect('/', '/welcome');

// Route::view('/welcome', 'welcome');

// Route::view('/auth', 'auth');

Route::get('/auth', [AuthController::class, 'index']);

Route::post('/auth', [AuthController::class, 'index']);

Route::get('/products', [ProductsController::class, 'index']);

Route::get('/{any}', VueController::class)->where('any', '.*');

