<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


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
    return view('home');
});




Route::resource('product', ProductController::class);

Route::get('product/soft/delete/{id}', [ProductController::class,'softDelete'])
->name('product.softDelete') ;


Route::get('products/trash', [ProductController::class,'trash'])
->name('product.trash') ;

Route::get('products/back/from/soft/delete/{id}', [ProductController::class,'backfromsoftDelete'])
->name('product.back.from.soft.delete') ;

Route::get('products/force/delete/{id}', [ProductController::class,'forceDelete'])
->name('product.force.delete') ;

Route::get('about/us', function () {
    return view('product.aboutus');
})->name('product.about.us')  ;