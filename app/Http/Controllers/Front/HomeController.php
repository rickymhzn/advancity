<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Country;
use App\Models\University;
use App\Models\Team;
use App\Models\Subject;
use App\Models\SubjectInfo;
use App\Models\Counter;
use App\Models\Testimonial;
use App\Models\Course;
use App\Models\Service;
use App\Models\Scholarship;
use App\Models\Page;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::orderBy('id','asc')->get();
        $countries = Country::orderBy('id','asc')->limit(6)->get();
        $universities = University::orderBy('id','asc')->limit(6)->get();
        $teams = Team::orderBy('id','asc')->get();
        $testSubjects = Subject::whereIn('course_id', [1])->get();
        $testSubjectInfos = SubjectInfo::orderBy('id', 'asc')->get();
        $counters = Counter::orderBy('order','asc')->get();
        $testimonials = Testimonial::orderBy('id','desc')->limit(6)->get();

        return view('front.index',compact('sliders','countries','universities','teams','testSubjects','testSubjectInfos','counters','testimonials'));
    }
    public function about(){
        $about =  Page::where('slug','about-us')->first();
        return view('front.about',compact('about'));
    }
    public function companyprofile(){
        $page =  Page::where('slug','company-profile')->first();
        return view('front.companyProfile',compact('page'));
    }
    public function ourteam(){
        $teams = Team::orderBy('id','asc')->get();
        return view('front.ourteam',compact('teams'));
    }
    public function singleTeam($slug){
        $team =  Team::whereSlug($slug)->first();
        return view('front.single.teamProfile',compact('team'));
    }
    public function singleService($slug){
        $allservices = Service::orderBy('id','asc')->get();
        $service = Service::whereSlug($slug)->first();
        return view('front.single.singleService',compact('service','allservices'));
    }
    public function universities(){
        $universities = University::orderBy('id','asc')->get();
        return view('front.universities',compact('universities'));
    }
    public function ourcourses($slug){
        $course = Course::whereSlug($slug)->first();
        $subjects = Subject::where('course_id',$course->id)->get();
        return view('front.ourcourses',compact('course','subjects'));
    }
    public function singleSubject($slug, $subject,$id){
        $course = Course::whereSlug($slug)->first();
        $subject = Subject::where('slug',$subject)->first();
        $subjectinfos = SubjectInfo::where('subject_id',$id)->get();
        return view('front.single.singleSubject',compact('course','subject','subjectinfos'));
    }
    public function scholarship(){
        return view('front.scholarship');
    }
    public function singleScholarship($country){
        $country = Country::whereSlug($country)->first();
        $scholarships = Scholarship::where('country_id',$country->id)->get();
        return view('front.single.singleScholarship',compact('scholarships','country'));
    }
    public function applyScholarship($country){
        return view('front.apply');
    }
    public function contactus(){
        return view('front.contactus');
    }
    public function destinations(){
        $countries = Country::orderBy('id','asc')->get();
        return view('front.destinations',compact('countries'));
    }
    public function singleDestination($slug){
        $country = Country::whereSlug($slug)->first();
        return view('front.single.singleDestination',compact('country'));
    }
}