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

Route::get('/test', function (\Illuminate\Http\Request $request) {
    $token = app('auth.password.broker')->createToken(auth()->user());

    $lol = auth()->user()->sendPasswordResetNotificationAfterPurchase($token);

    dd($lol);
});
Route::get('/', function () {
    return view('app.landing');
});
Route::get('/products/{product}', 'ProductController@index');
Route::get('/support', 'UserController@showSupportPage');
Route::post('/support', 'UserController@sendSupportMessage')->name('support');

Route::post('/payment/{product}', 'Payment\PaymentController@generateForm');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/profile', 'UserController@showProfilePage');
    Route::post('/profile', 'UserController@updateProfile')->name('profile');
    Route::get('/my-products', 'UserController@showProductsPage');
    Route::get('/my-products/{product}', 'UserController@showProductPage');
    Route::get('/my-products/{product}/{lecture}', 'UserController@showProductLecturePage');
    Route::group(['middleware' => ['ajax']], function () {
        Route::get('/lecture-action/{lecture}/{action}', 'LectureUserInteractionController@saveAction');
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
