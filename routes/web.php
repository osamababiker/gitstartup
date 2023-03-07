<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\LangController;

use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\AuthController as AdminAuthController;
use App\Http\Controllers\Admin\ProjectsController as AdminProjectsController;
use App\Http\Controllers\Admin\BlogsController as AdminBlogsController;
use App\Http\Controllers\Admin\CategoriesController as AdminCategoriesController;
use App\Http\Controllers\Admin\StoriesController as AdminStoriesController;

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



Route::post('lang/change', [LangController::class, 'change'])->name('changeLang');

Route::get('/login',[AdminAuthController::class, 'showLogin'])->name('login')->middleware('guest');
Route::get('/register',[AdminAuthController::class, 'showRegister'])->name('register')->middleware('guest');
Route::post('/login',[AdminAuthController::class, 'login']);
Route::post('/register',[AdminAuthController::class, 'register']);
Route::middleware('auth')->group(function () {
    Route::post('/logout',[AdminAuthController::class, 'logout'])->name('logout');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
// projects
Route::resource('/projects', ProjectsController::class);
// blogs
Route::resource('/blogs', BlogsController::class);
// admin routes
Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function() {
    Route::get('/', [AdminHomeController::class, 'index'])->name('admin.index');
    // settings route
    Route::get('/settings', [AdminHomeController::class, 'settings'])->name('admin.settings');
    /* ============ categories route ============== */
    Route::resource('/categories', AdminCategoriesController::class, ['as' => 'admin']);
    /* ============ blogs route ============== */
    Route::resource('/blogs', AdminBlogsController::class, ['as' => 'admin']);
    /*============== projects route ============== */
    Route::resource('/projects', AdminProjectsController::class, ['as' => 'admin']);
    /*============== stories route ============== */
    Route::resource('/stories', AdminStoriesController::class, ['as' => 'admin']);
});
