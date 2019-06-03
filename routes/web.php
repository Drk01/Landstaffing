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
    return view('Frontend.index');
})->name('index');

Auth::routes();

Route::get('/panel', 'HomeController@index')->name('home');

Route::get('/my-account', 'HomeController@account')->name('account');

Route::post('/save-account-data','HomeController@saveData')->name('save-account-data');

Route::resource('/orders', 'OrdersController');

Route::resource('/abilities', 'AbilitiesController');

Route::get('/working/{userid}','OrdersController@working')->name('working');

Route::group(['prefix' => 'curriculum'], function () {
    Route::get('{userid}','HomeController@editCurriculum')->name('curriculum');
    Route::put('{userid}','HomeController@saveCurriculum')->name('putCurriculum');
});

Route::group(['prefix' => 'moderate'], function () {
    Route::get('','ModerateController@index')->name('ModerateList');
    Route::get('checking/{userid}','ModerateController@edit')->name('ModerateEdit');
    Route::put('{userid}','ModerateController@update')->name('ModerateStore');
});
