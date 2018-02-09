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


//Manage Admin Backend

/*Route::get('setting', function(){
	return view('admin.setting.index');
});*/

Auth::routes();
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){

  Route::get('/setting', 'SettingController@index')->name('set.index');
  Route::post('/setting/update', 'SettingController@update')->name('set.update');

});
