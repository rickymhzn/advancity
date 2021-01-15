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
Route::group(['prefix' => 'admin','middleware' => 'auth'],function() {
    Route::get('/dashboard','Admin\DashboardController@index')->name('dashboard');
    // Slider
	Route::get('/sliders', 'Admin\SliderController@index')->name('admin.sliders');
	Route::get('/slider/create', 'Admin\SliderController@create')->name('admin.slider.create');
	Route::post('/slider/store', 'Admin\SliderController@store')->name('admin.slider.store');
	Route::get('/slider/edit/{id}', 'Admin\SliderController@edit')->name('admin.slider.edit');
	Route::post('/slider/update/{id}', 'Admin\SliderController@update')->name('admin.slider.update');
	Route::get('/slider/delete/{id}', 'Admin\SliderController@destroy')->name('admin.slider.destroy');
    //Settings
    Route::get('/settings','Admin\SettingController@index')->name('settings');
    Route::put('/setting/update','Admin\SettingController@update')->name('setting.update');
});

// Frontend
Route::get('/', 'Front\HomeController@index')->name('index');



// Route::get('/home', 'HomeController@index')->name('home');
