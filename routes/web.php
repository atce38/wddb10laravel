<?php

use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;



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

Route::get('/', [CategoryController::class,'home']);

// Route::get('login',[FirstController::class,'first']);

// Route::get('home',[FirstController::class,'home']);

Route::get('dashboard',[FirstController::class,'dashboard']);

Route::get('carousel-slider-bootstrap-with-laravel',[FirstController::class,'slider'])->name('slider');

Route::get('product/{name}/price/{price}/discount/{dis?}',[ProductController::class,'index'])->name('product');

//Product  Create/Read/Update/Delete
//Categories  Create/Read/Update/Delete

Route::group(['prefix'=>'admin'],function(){

    Route::group(['prefix'=>'/products'],function(){
        Route::get('/',[AdminProductController::class,'index'])->name('product.index');
        Route::get('/create',[AdminProductController::class,'create'])->name('product.create');
        Route::post('/store',[AdminProductController::class,'store'])->name('product.store');
        Route::get('/edit/{id}',[AdminProductController::class,'edit'])->name('product.edit');
        Route::post('/update/{id}',[AdminProductController::class,'update'])->name('product.update');
        Route::get('/delete/{id}',[AdminProductController::class,'delete'])->name('product.delete');

    });

    Route::group(['prefix'=>'/categories'],function(){
        Route::get('/',[CategoryController::class,'index'])->name('category.index');
        Route::get('/create',[CategoryController::class,'create'])->name('category.create');
        Route::post('/store',[CategoryController::class,'store'])->name('category.store');
        Route::get('/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
        Route::post('/update/{id}',[CategoryController::class,'update'])->name('category.update');
        Route::get('/delete/{id}',[CategoryController::class,'delete'])->name('category.delete');

    });

});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
