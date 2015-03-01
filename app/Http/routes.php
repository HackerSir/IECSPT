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
Route::get('/', [
    'as' => 'Home',
    'uses' => 'WelcomeController@index'
]);


Route::any('staff', 'StaffController@index');

//未定義路由
Route::get('{all}', array(
    'as' => 'not-found',
    function () {
        return Redirect::route('Home')
            ->with('global', '不正確的網址');
    }
))->where('all', '.*');

//Route::controllers([
//	'auth' => 'Auth\AuthController',
//	'password' => 'Auth\PasswordController',
//]);
