<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use App\Models\Setting;
use App\Models\Country;
use App\Models\Course;
use App\Models\Service;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $sitesetting=Setting::first();
        View::share('sitesetting', $sitesetting);
        $allCountries=Country::orderBy('id','asc')->get();
        View::share('allCountries', $allCountries);
        $allCourses=Course::orderBy('id','asc')->get();
        View::share('allCourses', $allCourses);
        $allServices=Service::orderBy('id','asc')->get();
        View::share('allServices', $allServices);
        // // Get the currently authenticated user...
        // $currentuser = Auth::user()->with('profile');
        // View::share('currentuser', $currentuser);
    }
}
