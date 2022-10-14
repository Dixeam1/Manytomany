<?php

use Illuminate\Routing\Route as RoutingRoute;
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
// Category
Route::get('category/create', 'CategoryController@create');
Route::post('admin/category', 'CategoryController@store');
Route::get('category/show', 'CategoryController@show');
Route::get('category/delete/{id}', 'CategoryController@destroy');
Route::get('category/delete/{id}', 'CategoryController@destroy');
Route::get('category/edit/{id}', 'CategoryController@edit');
Route::post('category/update/{id}', 'CategoryController@update');
// Product
Route::get('product/create', 'ProductController@create');
Route::post('product/create', 'ProductController@store');
Route::get('admin/product', 'ProductController@show');
