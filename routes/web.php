<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

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

// pages routes
Route::get('/', [WebController::class, 'Index'])->name('index');
Route::get('/contact', [WebController::class, 'Contact'])->name('contact');
Route::get('/blogs', [WebController::class, 'Blogs'])->name('blogs');
Route::get('/single-blog', [WebController::class, 'Singleblog'])->name('singleblog');