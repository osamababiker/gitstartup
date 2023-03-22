<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\AuthController ;
use App\Http\Controllers\Admin\ProjectsController;
use App\Http\Controllers\Admin\BlogsController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\StoriesController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\MessagesController;



/* ============ site auth route ============== */
Route::get('/login',[AuthController::class, 'showLogin'])->name('login')->middleware('guest');
Route::post('/login',[AuthController::class, 'login']);


Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function() {
    /* ============ home route ============== */
    Route::get('/', [HomeController::class, 'index'])->name('admin.index');
    /* ============ settings route ============== */
    Route::resource('/settings', SettingsController::class, ['as' => 'admin']);
    /* ============ categories route ============== */
    Route::resource('/categories', CategoriesController::class, ['as' => 'admin']);
    /* ============ blogs route ============== */
    Route::resource('/blogs', BlogsController::class, ['as' => 'admin']);
    Route::post('/blogs/comments/destroy', [BlogsController::class, 'destroyComments'])->name('admin.blogs.destroyComments');
    /*============== projects route ============== */
    Route::resource('/projects', ProjectsController::class, ['as' => 'admin']);
    /*============== stories route ============== */
    Route::resource('/stories', StoriesController::class, ['as' => 'admin']);
    /*============== contacts route ============== */
    Route::resource('/messages', MessagesController::class, ['as' => 'admin']);
    /*============== auth route  ==================*/
    Route::post('/logout',[AuthController::class, 'logout'])->name('logout');
    Route::post('/changePassword',[AuthController::class, 'changePassword'])->name('changePassword');
});