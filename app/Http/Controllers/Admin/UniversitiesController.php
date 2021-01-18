<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\University;
use App\Models\Country;
use Image;
use Validator;

class UniversitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $universities = University::with('country')->orderBy('id', 'asc')->get();
        return view('admin.university.index',compact('universities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::orderBy('id', 'asc')->get();
        return view('admin.university.create',compact('countries'));
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
            'name'      => 'required',
            'logo'      => 'required|mimes:jpeg,jpg,png,svg',
            'image'      => 'required|mimes:jpeg,jpg,png,svg',
            'website'      => 'required',
        ]);
        //--- Validation Section Ends

        //--- Logic Section
        $university = new University();
        $university->country_id = $request->countryid;
        $university->name = $request->name;
        $university->website = $request->website;
      
        if ($request->file('logo')) 
        {      
           $file2 = $request->file('logo');
           $logo = time().$file2->getClientOriginalName();
           $file2->move('assets/images/university/logo',$logo);           
           $university->logo = $logo;
       } 
        if ($request->file('image')) 
         {      
            $file = $request->file('image');
            $image = time().$file->getClientOriginalName();
            $file->move('assets/images/university',$image);           
            $university->image = $image;
        } 
       
        $university->save();
        //--- Logic Section Ends

        //--- Redirect Section        
        return redirect()->route('admin.universities')->with('success',"University Created Successfully");
         
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
        $university = University::findOrFail($id);
        $countries = Country::orderBy('id', 'asc')->get();
        return view('admin.university.edit',compact('university','countries')); 
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
            'name'      => 'required',
            'logo'      => 'mimes:jpeg,jpg,png,svg',
            'image'      => 'mimes:jpeg,jpg,png,svg',
            'website'      => 'required',
        ]);
        //--- Validation Section Ends

        //--- Logic Section
        $university = University::findOrFail($id);
        $university->country_id = $request->countryid;
        $university->name = $request->name;
        $university->website = $request->website;
      
        if ($request->file('logo')) 
        {    
            @unlink(public_path('assets/images/university/logo/'.$university->logo));  
           $file2 = $request->file('logo');
           $logo = time().$file->getClientOriginalName();
           $file2->move('assets/images/university/logo',$logo);           
           $university->logo = $logo;
       } 
        if ($request->file('image')) 
         {      
            @unlink(public_path('assets/images/university/'.$university->image));
            $file = $request->file('image');
            $image = time().$file->getClientOriginalName();
            $file->move('assets/images/university',$image);           
            $university->image = $image;
        } 
       
        $university->save();
        //--- Logic Section Ends

        //--- Redirect Section        
        return redirect()->route('admin.universities')->with('success',"University Updated Successfully");
         
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
        $university = University::findOrFail($id);
        @unlink(public_path('assets/images/university/logo/'.$university->logo));  
        @unlink(public_path('assets/images/university/'.$university->image));
        $university->delete();
        return redirect()->route('admin.universities')->with('error','University Deleted Successfully');
    }
}
