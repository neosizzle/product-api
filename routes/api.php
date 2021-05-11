<?php

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//shorthand to implement all api routes 
Route::resource('products', ProductController::class);

//custom routes go here
Route::get('/search/{name}',[App\Http\Controllers\ProductController::class, 'search'])->name('product.search');

// Route::get('/products',[App\Http\Controllers\ProductController::class, 'index'])->name('product.index');
// Route::get('/products/{id}',[App\Http\Controllers\ProductController::class, 'show'])->name('product.show');


Route::post('/products',[App\Http\Controllers\ProductController::class, 'store'])->name('product.store');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
