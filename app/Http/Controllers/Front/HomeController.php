<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Country;
use App\Models\University;
use App\Models\Team;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::orderBy('id','asc')->get();
        $countries = Country::orderBy('id','asc')->limit(6)->get();
        $universities = University::orderBy('id','asc')->limit(6)->get();
        $teams = Team::orderBy('id','asc')->get();
        return view('front.index',compact('sliders','countries','universities','teams'));
    }
}
