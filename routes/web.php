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
Auth::routes();
Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => '/', 'middleware' => 'auth'], function () {

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/orders'           , 'OrdersController');
Route::resource('/orders_analysis'  , 'OrdersanalysisController');
Route::resource('/users'    , 'UsersController');
Route::get('/analysis/{id}'    , 'UsersController@getData');

});