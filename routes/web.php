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
    return view('main');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/orders', 'HomeController@create');

//ORDER ROUTES
Route::post('/addorder', 'OrdersController@createOrder');
Route::post('/oderitem', 'OrdersController@addITem');
Route::get('/lastorderitems', 'OrdersController@lastorderitems');
Route::get('/lastorder', 'OrdersController@lastorder');
Route::delete('/delete/item/{id}', 'OrdersController@delete');

//PRODUCTS ROUTE
Route::get('/products/add', 'ProductsController@create');
Route::post('/products', 'ProductsController@store');
