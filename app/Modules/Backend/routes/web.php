<?php

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
Route::get('/welcome', function(){
    echo "Welcome Quiz Admin";
});

Route::group(
    [   'middleware' => ['web'],
        'namespace'=>'Controllers',
    ], function(){

    Route::get('/dash_board', ['as' => 'admin.dash_board','uses' => 'HomeController@index']);
    Route::get('login',['as' => 'login','uses' => 'Auth\LoginController@showLoginForm']);
    Route::post('login',['as' => 'login','uses' => 'Auth\LoginController@login']);
    Route::get('register',['as' => 'register','uses' => 'Auth\RegisterController@showRegistrationForm']);
    Route::post('register',['as' => 'register','uses' => 'Auth\RegisterController@register']);
    Route::post('logout',['as' => 'logout','uses' => 'Auth\LoginController@logout']);
}
);

