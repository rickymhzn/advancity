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

Auth::routes(['register' => false]);
Route::group(['prefix' => 'admin','middleware' => 'auth'],function() {
    Route::get('/dashboard','Admin\DashboardController@index')->name('dashboard');
    // Slider
	Route::get('/sliders', 'Admin\SliderController@index')->name('admin.sliders');
	Route::get('/slider/create', 'Admin\SliderController@create')->name('admin.slider.create');
	Route::post('/slider/store', 'Admin\SliderController@store')->name('admin.slider.store');
	Route::get('/slider/edit/{id}', 'Admin\SliderController@edit')->name('admin.slider.edit');
	Route::post('/slider/update/{id}', 'Admin\SliderController@update')->name('admin.slider.update');
	Route::get('/slider/delete/{id}', 'Admin\SliderController@destroy')->name('admin.slider.destroy');
	 // Country
	 Route::get('/countries', 'Admin\CountriesController@index')->name('admin.countries');
	 Route::get('/country/create', 'Admin\CountriesController@create')->name('admin.country.create');
	 Route::post('/country/store', 'Admin\CountriesController@store')->name('admin.country.store');
	 Route::get('/country/edit/{id}', 'Admin\CountriesController@edit')->name('admin.country.edit');
	 Route::post('/country/update/{id}', 'Admin\CountriesController@update')->name('admin.country.update');
	 Route::get('/country/delete/{id}', 'Admin\CountriesController@destroy')->name('admin.country.destroy');
	  // CountryInfo
	Route::get('/countryinfos', 'Admin\CountryInfosController@index')->name('admin.countryinfos');
	Route::get('/countryinfo/create', 'Admin\CountryInfosController@create')->name('admin.countryinfo.create');
	Route::post('/countryinfo/store', 'Admin\CountryInfosController@store')->name('admin.countryinfo.store');
	Route::get('/countryinfo/edit/{id}', 'Admin\CountryInfosController@edit')->name('admin.countryinfo.edit');
	Route::post('/countryinfo/update/{id}', 'Admin\CountryInfosController@update')->name('admin.countryinfo.update');
	Route::get('/countryinfo/delete/{id}', 'Admin\CountryInfosController@destroy')->name('admin.countryinfo.destroy');
	// Courses
	Route::get('/courses', 'Admin\CoursesController@index')->name('admin.courses');
	Route::get('/course/create', 'Admin\CoursesController@create')->name('admin.course.create');
	Route::post('/course/store', 'Admin\CoursesController@store')->name('admin.course.store');
	Route::get('/course/edit/{id}', 'Admin\CoursesController@edit')->name('admin.course.edit');
	Route::post('/course/update/{id}', 'Admin\CoursesController@update')->name('admin.course.update');
	Route::get('/course/delete/{id}', 'Admin\CoursesController@destroy')->name('admin.course.destroy');
	// Subjects
	Route::get('/subjects', 'Admin\SubjectsController@index')->name('admin.subjects');
	Route::get('/subject/create', 'Admin\SubjectsController@create')->name('admin.subject.create');
	Route::post('/subject/store', 'Admin\SubjectsController@store')->name('admin.subject.store');
	Route::get('/subject/edit/{id}', 'Admin\SubjectsController@edit')->name('admin.subject.edit');
	Route::post('/subject/update/{id}', 'Admin\SubjectsController@update')->name('admin.subject.update');
	Route::get('/subject/delete/{id}', 'Admin\SubjectsController@destroy')->name('admin.subject.destroy'); 
	// CTA
	 Route::get('/ctas', 'Admin\CtasController@index')->name('admin.ctas');
	 Route::get('/cta/create', 'Admin\CtasController@create')->name('admin.cta.create');
	 Route::post('/cta/store', 'Admin\CtasController@store')->name('admin.cta.store');
	 Route::get('/cta/edit/{id}', 'Admin\CtasController@edit')->name('admin.cta.edit');
	 Route::post('/cta/update/{id}', 'Admin\CtasController@update')->name('admin.cta.update');
	 Route::get('/cta/delete/{id}', 'Admin\CtasController@destroy')->name('admin.cta.destroy');
	 // Team
	 Route::get('/teams', 'Admin\TeamsController@index')->name('admin.teams');
	 Route::get('/team/create', 'Admin\TeamsController@create')->name('admin.team.create');
	 Route::post('/team/store', 'Admin\TeamsController@store')->name('admin.team.store');
	 Route::get('/team/edit/{id}', 'Admin\TeamsController@edit')->name('admin.team.edit');
	 Route::post('/team/update/{id}', 'Admin\TeamsController@update')->name('admin.team.update');
	 Route::get('/team/delete/{id}', 'Admin\TeamsController@destroy')->name('admin.team.destroy');
	 // Uninversity
	 Route::get('/universities', 'Admin\UniversitiesController@index')->name('admin.universities');
	 Route::get('/university/create', 'Admin\UniversitiesController@create')->name('admin.university.create');
	 Route::post('/university/store', 'Admin\UniversitiesController@store')->name('admin.university.store');
	 Route::get('/university/edit/{id}', 'Admin\UniversitiesController@edit')->name('admin.university.edit');
	 Route::post('/university/update/{id}', 'Admin\UniversitiesController@update')->name('admin.university.update');
	 Route::get('/university/delete/{id}', 'Admin\UniversitiesController@destroy')->name('admin.university.destroy');
	// Service
	Route::get('/services', 'Admin\ServicesController@index')->name('admin.services');
	Route::get('/service/create', 'Admin\ServicesController@create')->name('admin.service.create');
	Route::post('/service/store', 'Admin\ServicesController@store')->name('admin.service.store');
	Route::get('/service/edit/{id}', 'Admin\ServicesController@edit')->name('admin.service.edit');
	Route::post('/service/update/{id}', 'Admin\ServicesController@update')->name('admin.service.update');
	Route::get('/service/delete/{id}', 'Admin\ServicesController@destroy')->name('admin.service.destroy');
	// Pages
	Route::get('/pages', 'Admin\PagesController@index')->name('admin.pages');
	Route::get('/page/create', 'Admin\PagesController@create')->name('admin.page.create');
	Route::post('/page/store', 'Admin\PagesController@store')->name('admin.page.store');
	Route::get('/page/edit/{id}', 'Admin\PagesController@edit')->name('admin.page.edit');
	Route::post('/page/update/{id}', 'Admin\PagesController@update')->name('admin.page.update');
	Route::get('/page/delete/{id}', 'Admin\PagesController@destroy')->name('admin.page.destroy');
	// Testimonials
	Route::get('/testimonials', 'Admin\TestimonialsController@index')->name('admin.testimonials');
	Route::get('/testimonial/create', 'Admin\TestimonialsController@create')->name('admin.testimonial.create');
	Route::post('/testimonial/store', 'Admin\TestimonialsController@store')->name('admin.testimonial.store');
	Route::get('/testimonial/edit/{id}', 'Admin\TestimonialsController@edit')->name('admin.testimonial.edit');
	Route::post('/testimonial/update/{id}', 'Admin\TestimonialsController@update')->name('admin.testimonial.update');
	Route::get('/testimonial/delete/{id}', 'Admin\TestimonialsController@destroy')->name('admin.testimonial.destroy');
	// Counter
	Route::get('/counter','Admin\CounterController@index')->name('counter');
    Route::post('/counter/update/{id}','Admin\CounterController@update')->name('counter.update');
	 //Settings
    Route::get('/settings','Admin\SettingController@index')->name('settings');
    Route::post('/setting/update/{id}','Admin\SettingController@update')->name('setting.update');
});

// Frontend
Route::get('/', 'Front\HomeController@index')->name('index');



// Route::get('/home', 'HomeController@index')->name('home');
