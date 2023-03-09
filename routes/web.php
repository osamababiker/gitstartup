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
use App\Http\Controllers\Admin\SettingsController as AdminSettingsController;

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
/* ============ site auth route ============== */
Route::get('/login',[AdminAuthController::class, 'showLogin'])->name('login')->middleware('guest');
Route::post('/login',[AdminAuthController::class, 'login']);
/* ============ site home route ============== */
Route::get('/', [HomeController::class, 'index'])->name('home');
/* ============ site about route ============== */
Route::get('/about', [HomeController::class, 'about'])->name('about');
/* ============ site projects route ============== */
Route::resource('/projects', ProjectsController::class);
/* ============ site blogs route ============== */
Route::resource('/blogs', BlogsController::class);


// admin routes
Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function() {
    /* ============ home route ============== */
    Route::get('/', [AdminHomeController::class, 'index'])->name('admin.index');
    /* ============ settings route ============== */
    Route::resource('/settings', AdminSettingsController::class, ['as' => 'admin']);
    /* ============ categories route ============== */
    Route::resource('/categories', AdminCategoriesController::class, ['as' => 'admin']);
    /* ============ blogs route ============== */
    Route::resource('/blogs', AdminBlogsController::class, ['as' => 'admin']);
    /*============== projects route ============== */
    Route::resource('/projects', AdminProjectsController::class, ['as' => 'admin']);
    /*============== stories route ============== */
    Route::resource('/stories', AdminStoriesController::class, ['as' => 'admin']);
    /*============== auth route  ==================*/
    Route::post('/logout',[AdminAuthController::class, 'logout'])->name('logout');
    Route::post('/changePassword',[AdminAuthController::class, 'changePassword'])->name('changePassword');
});
