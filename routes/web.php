<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\BlogController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\AdminBlogController;

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

Route::get('/signup',[AuthController::class,'create'])->name('auth.register');
Route::post('/store',[AuthController::class,'store'])->name('auth.store');
Route::group(['prefix'=>'blog'],function(){
    Route::get('/',[BlogController::class,'index'])->name('front.blog');
    Route::get('/single-blog/{id}',[BlogController::class,'singleBlog'])->name('front.blog.singleBlog');
    Route::get('/create',[BlogController::class,'create'])->name('front.blog.create');
    Route::post('/store',[BlogController::class,'store'])->name('front.blog.store');
});

Route::group(['prefix'=>'admin'],function(){
    Route::get('/blog',[AdminBlogController::class,'index'])->name('admin.blog');
    Route::post('/change-status',[AdminBlogController::class,'changeStatus'])->name('admin.blog.changeStatus');
});