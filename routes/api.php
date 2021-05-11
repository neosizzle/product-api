<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;

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
//Route::resource('products', ProductController::class);

//ppublic routes
//custom routes go here
Route::get('/products',[ProductController::class, 'index'])->name('product.index');
Route::get('/products/{id}',[ProductController::class, 'show'])->name('product.show');
Route::get('/search/{name}',[ProductController::class, 'search'])->name('product.search');

Route::post('/register',[AuthController::class, 'register'])->name('auth.register');
Route::post('/login',[AuthController::class, 'login'])->name('auth.login');


//private routes

Route::group(['middleware'=>['auth:sanctum']] , function(){

    Route::post('/products',[ProductController::class, 'store'])->name('product.store');
    Route::post('/logout',[AuthController::class, 'logout'])->name('auth.logout');

    Route::patch('/products/{id}',[ProductController::class, 'update'])->name('product.update');

    Route::delete('/products/{id}',[ProductController::class, 'destroy'])->name('product.destroy');

});



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
