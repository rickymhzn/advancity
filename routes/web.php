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
	  // Scholarships
	  Route::get('/scholarships', 'Admin\ScholarshipsController@index')->name('admin.scholarships');
	  Route::get('/scholarship/create', 'Admin\ScholarshipsController@create')->name('admin.scholarship.create');
	  Route::post('/scholarship/store', 'Admin\ScholarshipsController@store')->name('admin.scholarship.store');
	  Route::get('/scholarship/edit/{id}', 'Admin\ScholarshipsController@edit')->name('admin.scholarship.edit');
	  Route::post('/scholarship/update/{id}', 'Admin\ScholarshipsController@update')->name('admin.scholarship.update');
	  Route::get('/scholarship/delete/{id}', 'Admin\ScholarshipsController@destroy')->name('admin.scholarship.destroy');
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
	// SubjectInfos
	Route::get('/subjectinfos', 'Admin\SubjectInfosController@index')->name('admin.subjectinfos');
	Route::get('/subjectinfo/create', 'Admin\SubjectInfosController@create')->name('admin.subjectinfo.create');
	Route::post('/subjectinfo/store', 'Admin\SubjectInfosController@store')->name('admin.subjectinfo.store');
	Route::get('/subjectinfo/edit/{id}', 'Admin\SubjectInfosController@edit')->name('admin.subjectinfo.edit');
	Route::post('/subjectinfo/update/{id}', 'Admin\SubjectInfosController@update')->name('admin.subjectinfo.update');
	Route::get('/subjectinfo/delete/{id}', 'Admin\SubjectInfosController@destroy')->name('admin.subjectinfo.destroy');  
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
	Route::get('/counters', 'Admin\CounterController@index')->name('admin.counters');
	Route::get('/counter/create', 'Admin\CounterController@create')->name('admin.counter.create');
	Route::post('/counter/store', 'Admin\CounterController@store')->name('admin.counter.store');
	Route::get('/counter/edit/{id}', 'Admin\CounterController@edit')->name('admin.counter.edit');
	Route::post('/counter/update/{id}', 'Admin\CounterController@update')->name('admin.counter.update');
	Route::get('/counter/delete/{id}', 'Admin\CounterController@destroy')->name('admin.counter.destroy');
	 //Settings
    Route::get('/settings','Admin\SettingController@index')->name('settings');
	Route::post('/setting/update/{id}','Admin\SettingController@update')->name('setting.update');
	//Users
	Route::get('/users', 'Admin\UsersController@index')->name('admin.users');
	Route::get('/user/create', 'Admin\UsersController@create')->name('admin.user.create');
	Route::post('/user/store', 'Admin\UsersController@store')->name('admin.user.store');
	Route::get('/user/edit/{id}', 'Admin\UsersController@edit')->name('admin.user.edit');
	Route::post('/user/update/{id}', 'Admin\UsersController@update')->name('admin.user.update');
	Route::get('/user/delete/{id}', 'Admin\UsersController@destroy')->name('admin.user.destroy');
	Route::get('/user/admin/{id}', 'Admin\UsersController@admin')->name('admin.user.admin');
	Route::get('/user/notadmin/{id}', 'Admin\UsersController@notadmin')->name('admin.user.notadmin');
	// Profile
	Route::get('/user/profile', 'Admin\ProfilesController@index')->name('admin.user.profile');
	Route::post('/user/profile/update', 'Admin\ProfilesController@update')->name('admin.user.profile.update');
});

// Frontend
Route::get('/', 'Front\HomeController@index')->name('index');
Route::get('/about', 'Front\HomeController@about')->name('about');
Route::get('/about/company-profile', 'Front\HomeController@companyprofile')->name('about.companyprofile');
Route::get('/ourteam', 'Front\HomeController@ourteam')->name('ourteam');
Route::get('/ourteam/{slug}', 'Front\HomeController@singleTeam')->name('single.team');
Route::get('/service/{slug}', 'Front\HomeController@singleService')->name('single.service');
Route::get('/universities', 'Front\HomeController@universities')->name('universities');
Route::get('/ourcourses/{slug}', 'Front\HomeController@ourcourses')->name('ourcourses');
Route::get('/scholarship', 'Front\HomeController@scholarship')->name('scholarship');
Route::get('/scholarship/{country}', 'Front\HomeController@singleScholarship')->name('single.scholarship');
Route::get('/scholarship/{country}/apply', 'Front\HomeController@applyScholarship')->name('apply.scholarship');
Route::get('/contact-us', 'Front\HomeController@contactus')->name('contactus');
Route::get('/destinations', 'Front\HomeController@destinations')->name('destinations');
Route::get('/destinations/{slug}', 'Front\HomeController@singleDestination')->name('single.destination');



// Route::get('/home', 'HomeController@index')->name('home');