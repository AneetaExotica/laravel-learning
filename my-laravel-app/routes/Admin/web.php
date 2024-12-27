<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BlogsController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\BannersController;

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
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', function () {
        return view('dashboard.home');
    })->name('home');
    Route::get('createblogs', [BlogsController::class, 'create'])->name('blogs.create');
    Route::get('show-list', [BlogsController::class, 'show'])->name('showbloglist');
    Route::get('blogs', [BlogsController::class, 'index'])->name('blogs.index');
    Route::post('blogs', [BlogsController::class, 'store'])->name('blogs.store');
    Route::get('edit/{id}', [BlogsController::class, 'edit'])->name('edit');
    Route::post('update/{id}', [BlogsController::class, 'update'])->name('update');
    Route::get('categories', [CategoriesController::class, 'index'])->name('addcategories');
    Route::post('create-categories',[CategoriesController::class,'store'])->name('createcategories');
    Route::get('add-banner',[BannersController::class, 'index'])->name('add-banners');
    Route::post('create-banner',[BannersController::class, 'store'])->name('create-banner');
    Route::get('show-banners',[BannersController::class,'show'])->name('show-banners');
});
