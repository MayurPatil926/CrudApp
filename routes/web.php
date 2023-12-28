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
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ProductController::class,'index']) ;
Route::get('/new', [ProductController::class,'new']) ;
Route::post('/store', [ProductController::class,'store']) ;
Route::get('products/{id}/edit',[ProductController::class,'edit']);
Route::put('/{id}/update', [ProductController::class,'update']) ;

Route::delete('products/{id}/delete',[ProductController::class,'destroy']);

Route::get('products/{id}/view',[ProductController::class,'view']);









