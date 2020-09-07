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
Route::get('/complete', 'HomeController@complete');
Route::put('/complete/order/{id}', 'HomeController@orderout');
Route::delete('/delete/item/{id}', 'OrdersController@delete');

//PRODUCTS ROUTES
Route::get('/products/add', 'ProductsController@create');
Route::post('/products', 'ProductsController@store');

//EMPLOYEES ROUTES
Route::get('/employees', 'EmployeesController@index');
Route::get('/employees/edit/{id}', 'EmployeesController@edit');
Route::put('/employees/update/{id}', 'EmployeesController@update');

//SHIFTS ROUTES
Route::get('/shift', 'ShiftsController@index');
Route::get('/shift/add', 'ShiftsController@create');
Route::post('/shift/new', 'ShiftsController@store');
Route::get('/shift/{id}', 'ShiftsController@show');

//VLOGS ROUTES
Route::get('/vlogs', 'VlogsController@index');
Route::get('/vlogs/edit/{id}', 'VlogsController@edit');
Route::put('/vlogs/update/{id}', 'VlogsController@update');
Route::get('/vlogs/{id}', 'VlogsController@show');