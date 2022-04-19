<?php

use App\Http\Controllers\AdminProductController;
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

Route::get('/', function () {
    return redirect()->route('product',['name'=>'Samsung','price'=>54000,'dis'=>500]);
});

Route::get('login',[FirstController::class,'first']);

Route::get('home',[FirstController::class,'home']);

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
        Route::get('/edit',function(){

        });
        Route::get('/update',function(){

        });
        Route::get('/delete',function(){

        });

    });

    Route::group(['prefix'=>'/categories'],function(){
        Route::get('/',function(){
            return "All Categories";
        });
        Route::get('/create',function(){
            return "Create Product";
        });
        Route::get('/edit',function(){

        });
        Route::get('/update',function(){

        });
        Route::get('/delete',function(){

        });

    });

});


