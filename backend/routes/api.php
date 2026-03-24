<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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


Route::get('/products', [ProductController::class, 'index']);
Route::get('/getProductById/{id}', [ProductController::class, 'show']);
Route::post('/addProduct', [ProductController::class, 'store']);
Route::put('/editProduct/{id}', [ProductController::class, 'update']);
Route::delete('/deleteProduct/{id}', [ProductController::class, 'destroy']);
Route::get('/getPublishedproducts', [ProductController::class, 'getPublishedproducts']);
Route::get('/getOldproducts/{data}', [ProductController::class, 'getOldproducts']);
Route::get('/getMinproducts/{qty}', [ProductController::class, 'getMinproducts']);
// Route::resource('products', 'Api\ProductController::class');
