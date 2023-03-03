<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\BlogsController;

use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\AuthController as AdminAuthController;
use App\Http\Controllers\Admin\ProjectsController as AdminProjectsController;
use App\Http\Controllers\Admin\BlogsController as AdminBlogsController;

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
Route::resource('/projects', ProjectsController::class);

// blogs
Route::resource('/blogs', BlogsController::class);


// admin routes
Route::get('/admin', [AdminHomeController::class, 'index'])->name('admin.index');
Route::get('/admin/settings', [AdminHomeController::class, 'settings'])->name('admin.settings');

Route::get('/admin/login', [AdminAuthController::class, 'index'])->name('admin.login');

Route::resource('/admin/projects', ProjectsController::class)->except(['update', 'delete']);
Route::post('/admin/projects/destroy', [ProjectsController::class, 'destroy'])->name('projects.destroy');
Route::post('/admin/projects/update', [ProjectsController::class, 'update'])->name('projects.update');

Route::resource('/admin/blogs', BlogsController::class)->except(['update', 'delete']);
Route::post('/admin/blogs/destroy', [BlogsController::class, 'destroy'])->name('blogs.destroy');
Route::post('/admin/blogs/update', [BlogsController::class, 'update'])->name('blogs.update');
