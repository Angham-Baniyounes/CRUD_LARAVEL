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
Route::get('admin', 'AdminController@index');
Route::post('admin', 'AdminController@store');
Route::get('admin/{id}', 'AdminController@destroy');
Route::get('admin/{id}/editadmin', "AdminController@edit");
Route::put('admin/{id}', 'AdminController@update');

Route::get('category', 'CategoriesController@index');
Route::post('category', 'CategoriesController@store');
Route::get('category/{id}', 'CategoriesController@destroy');
Route::get('category/{id}/editcategory', "CategoriesController@edit");
Route::put('category/{id}', 'CategoriesController@update');



Route::get('product', 'ProductsController@index');
Route::post('product', 'ProductsController@store');
Route::get('product/{id}', 'ProductsController@destroy');
Route::get('product/{id}/editproduct', "ProductsController@edit");
Route::put('product/{id}', 'ProductsController@update');