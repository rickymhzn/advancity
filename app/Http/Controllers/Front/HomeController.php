<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Country;
use App\Models\University;
use App\Models\Team;
use App\Models\Subject;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::orderBy('id','asc')->get();
        $countries = Country::orderBy('id','asc')->limit(6)->get();
        $universities = University::orderBy('id','asc')->limit(6)->get();
        $teams = Team::orderBy('id','asc')->get();
        $testSubjects = Subject::whereIn('course_id', [1])->get();
        return view('front.index',compact('sliders','countries','universities','teams','testSubjects'));
    }
    public function about(){
        return view('front.about');
    }
    public function ourteam(){
        return view('front.ourteam');
    }
    public function services(){
        return view('front.services');
    }
    public function studyabroad(){
        return view('front.studyabroad');
    }
    public function ourcourses(){
        return view('front.ourcourses');
    }
    public function schoolarship(){
        return view('front.schoolarship');
    }
    public function contactus(){
        return view('front.contactus');
    }
    public function destinations(){
        $countries = Country::orderBy('id','asc')->get();
        return view('front.destinations',compact('countries'));
    }
    public function singleDestination($country){
        $country = Country::findOrFail($country);
        dd($country);
        //return view('front.singleDestination',compact('country'));
    }
}