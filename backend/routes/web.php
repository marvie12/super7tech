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

Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/user', 'RegisterController@show')->name('user.show');
        Route::post('/user', 'RegisterController@register')->name('user.perform');

        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login');
        Route::post('/login', 'LoginController@login')->name('login.perform');

    });

    Route::group(['middleware' => ['auth']], function() {
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');

        Route::redirect('/', '/employee');     
        
        Route::prefix('employee')->group(function () {
            Route::get('/', 'EmployeeController@show')->name('employee');
            Route::post('/', 'EmployeeController@index');
            Route::get('/register', 'EmployeeController@create')->name('register.show');
            Route::get('/{id}', 'EmployeeController@edit')->name('employee.edit');
            Route::put('/{id}', 'EmployeeController@update');
            Route::post('/store', 'EmployeeController@store');
            Route::delete('/{id}', 'EmployeeController@destroy');

        });
    });
});
