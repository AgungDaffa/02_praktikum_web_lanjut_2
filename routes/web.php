<?php

use App\Http\Controllers\AboutConttroller;
use App\Http\Controllers\ArticletConttroller;
use App\Http\Controllers\HomeConttroller;
use App\Http\Controllers\PageController;
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
Route::get('/', [HomeConttroller::class, 'selamat']);
Route::get('/about', [AboutConttroller::class, 'about']);
Route::get('/article/{id}', [ArticletConttroller::class, 'article']);