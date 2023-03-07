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
    Route::resource('/categories', AdminCategoriesController::class, ['names' => [
        'index' => 'admin.categories.index',
        'store' => 'admin.categories.store'
    ]])->except(['update', 'delete']);
    Route::post('/categories/destroy', [AdminCategoriesController::class, 'destroy'])->name('admin.categories.destroy');
    Route::post('/categories/update', [AdminCategoriesController::class, 'update'])->name('admin.categories.update');
    /* ============ blogs route ============== */
    Route::resource('/blogs', AdminBlogsController::class, ['names' => [
        'index' => 'admin.blogs.index',
        'store' => 'admin.blogs.store'
    ]])->except(['update', 'delete']);
    Route::post('/blogs/destroy', [AdminBlogsController::class, 'destroy'])->name('admin.blogs.destroy');
    Route::post('/blogs/update', [AdminBlogsController::class, 'update'])->name('admin.blogs.update');
    /*============== projects route ============== */
    Route::resource('/projects', AdminProjectsController::class, ['names' => [
        'index' => 'admin.projects.index',
        'store' => 'admin.projects.store'
    ]] )->except(['update', 'delete']);
    Route::post('/projects/destroy', [AdminProjectsController::class, 'destroy'])->name('admin.projects.destroy');
    Route::post('/projects/update', [AdminProjectsController::class, 'update'])->name('admin.projects.update');
    /*============== stories route ============== */
    Route::resource('/stories', AdminStoriesController::class, ['names' => [
        'index' => 'admin.stories.index',
        'store' => 'admin.stories.store'
    ]] )->except(['update', 'delete']);
    Route::post('/stories/destroy', [AdminStoriesController::class, 'destroy'])->name('admin.stories.destroy');
    Route::post('/stories/update', [AdminStoriesController::class, 'update'])->name('admin.stories.update');
});
