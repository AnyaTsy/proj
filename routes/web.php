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
Route::group(['middleware' => ['auth']], function () {
    Route::get('/my-products', 'UserController@showProductsPage');
    Route::get('/my-products/{product}', 'UserController@showProductPage');
    Route::get('/my-products/{product}/{lecture}', 'UserController@showProductLecturePage');
    Route::group(['middleware' => ['ajax']], function () {
        Route::get('/lecture-action/{lecture}/{action}', 'LectureUserInteractionController@saveAction');
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
