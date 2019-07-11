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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'locale'], function() {
    Route::group(['middleware' => 'auth'], function() {
        Route::get('change-language/{language}', 'LanguageController@changeLanguage')->name('user.change-language');
        Route::get('/dashboard', 'HomeController@index')->name('home');
        Route::get('/profile', 'UserController@profile')->name('profile');
        Route::post('/editprofile', 'UserController@editprofile')->name('editprofile');

        Route::group(['prefix' => 'admin'], function () {
            
            Route::get('/datatable/{id}', 'UserController@UserDatatable')->name('datatables.user');
            Route::post('/add/{id}', 'UserController@add')->name('addUser');
            Route::post('/changestatus', 'UserController@changestatus')->name('changestatus');
            Route::post('/changePassword', 'UserController@changePassword')->name('changePassword');

            Route::group(['prefix' => 'teachers'], function () {
                Route::get('/', 'UserController@teacher');
            });

            Route::prefix('/students')->group(function() {
                Route::get('/', 'UserController@student');
            });
        });

    });
});

