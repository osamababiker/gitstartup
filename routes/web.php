<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\BlogsController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', [HomeController::class, 'about'])->name('about');


// projects
Route::resource('/projects', ProjectsController::class)->except(['update', 'delete']);
Route::post('projects/destroy', [ProjectsController::class, 'destroy'])
->name('projects.destroy');
Route::post('projects/update', [ProjectsController::class, 'update'])
->name('projects.update');

// blogs
Route::resource('/blogs', BlogsController::class)->except(['update', 'delete']);
Route::post('blogs/destroy', [BlogsController::class, 'destroy'])
->name('blogs.destroy');
Route::post('blogs/update', [BlogsController::class, 'update'])
->name('blogs.update');