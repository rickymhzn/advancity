<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Scholarship;
use App\Models\Country;
use App\Models\University;


class ScholarshipsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $scholarships = Scholarship::with('country','university')->orderBy('id', 'asc')->get();
        return view('admin.scholarship.index',compact('scholarships'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::orderBy('id', 'asc')->get();
        $universities = University::orderBy('id', 'asc')->get();
        return view('admin.scholarship.create',compact('countries','universities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //--- Validation Section
         $this->validate($request,[
            'countryid'      => 'required',
            'universityid'      => 'required',
            'title'      => 'required',
            'description'      => 'required', 
        ]);
        //--- Validation Section Ends

        //--- Logic Section
        $scholarship = new Scholarship();
        $scholarship->country_id = $request->countryid;
        $scholarship->university_id = $request->universityid;
        $scholarship->title = $request->title;
        $scholarship->description = $request->description;
        $scholarship->save();
        //--- Logic Section Ends

        //--- Redirect Section        
        return redirect()->route('admin.scholarships')->with('success',"Scholarship Created Successfully");
         
        //--- Redirect Section Ends  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $countries = Country::orderBy('id', 'asc')->get();
        $universities = University::orderBy('id', 'asc')->get();
        $scholarship = Scholarship::findOrFail($id);
        return view('admin.scholarship.edit',compact('countries','universities','scholarship')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       //--- Validation Section
       $this->validate($request,[
        'countryid'      => 'required',
        'universityid'      => 'required',
        'title'      => 'required',
        'description'      => 'required', 
    ]);
    //--- Validation Section Ends

    //--- Logic Section
    $scholarship = Scholarship::findOrFail($id);
    $scholarship->country_id = $request->countryid;
    $scholarship->university_id = $request->universityid;
    $scholarship->title = $request->title;
    $scholarship->description = $request->description;
    $scholarship->save();
    //--- Logic Section Ends

    //--- Redirect Section        
    return redirect()->route('admin.scholarships')->with('success',"Scholarship Updated Successfully");
     
    //--- Redirect Section Ends  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $scholarship = Scholarship::findOrFail($id);
        $scholarship->delete();
        return redirect()->route('admin.scholarships')->with('error','Scholarship Deleted Successfully');
    }
}
