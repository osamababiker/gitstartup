<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\LangController;


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


/* ============ change lang route ============== */
Route::post('lang/change', [LangController::class, 'change'])->name('changeLang');
/* ============ site home route ============== */
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');
/* ============ site about route ============== */
Route::get('/about', [HomeController::class, 'about'])->name('about');
/* ============ site partnership route ============== */
Route::get('/partnership', [HomeController::class, 'partnership'])->name('partnership');
Route::post('/partnership', [HomeController::class, 'postPartnership'])->name('postPartnership');
/* ============ site contact message route ============== */
Route::post('/contact/message', [HomeController::class, 'postContactMessage'])->name('postContactMessage');
/* ============ site projects route ============== */
Route::resource('/projects', ProjectsController::class);
/* ============ site blogs route ============== */
Route::resource('/blogs', BlogsController::class);
Route::post('/blogs/comments', [BlogsController::class, 'postComments'])->name('blogs.postComments');
