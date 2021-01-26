<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use App\Models\Setting;


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
        // // Get the currently authenticated user...
        // $currentuser = Auth::user()->with('profile');
        // View::share('currentuser', $currentuser);
    }
}