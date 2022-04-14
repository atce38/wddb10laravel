<?php

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
