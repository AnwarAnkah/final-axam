<?php

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
    return view('welcome');
});
Route::get('/category', [categorycontroller::class, 'category']);
Route::post('/stor', [categorycontroller::class, 'store']);
Route::put('/edit/{id}',[categorycontroller::class,'edit']);

Route::post('destroy/{id}',[categorycontroller::class,'destroy']);
Route::get('/product', [productcontroller::class, 'product']);
Route::post('/stor', [productcontroller::class, 'store']);
Route::put('/edit/{id}',[productcontroller::class,'edit']);
Route::putch('update/{id}',[productcontroller::class,'update']);
Route::post('destroy/{id}',[productcontroller::class,'destroy']);
