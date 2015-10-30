<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('account', ['middleware' => 'auth',function () {
    $id = Auth::user()->id;
    return redirect("account/$id");
}]);

Route::get('account/{id}', ['middleware' => 'auth', function ($id) {
    return view("account" , ['id' => $id]);
}]);

Route::get('thewine', function () {
    return view('thewine');
});

Route::get('order', 'OrderController@showAll');

Route::get('cart', function () {
    return view('cart');
});

Route::get('checkout', function () {
    return view('checkout');
});

Route::get('membership', function () {
    return view('membership');
});

Route::get('history', function () {
    return view('history');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('/api/cart/add', function () {});

/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
*/
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

/*
|--------------------------------------------------------------------------
| Registration Routes
|--------------------------------------------------------------------------
*/
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');