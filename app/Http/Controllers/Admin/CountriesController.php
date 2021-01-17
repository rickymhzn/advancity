<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;
use Image;
use Validator;


class CountriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Country::orderBy('id', 'asc')->get();
        return view('admin.destination.country.index',compact('countries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.destination.country.create');
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
            'country'      => 'required',
            'description'      => 'required',
            'image'      => 'required|mimes:jpeg,jpg,png,svg',
            'thumbnail'      => 'required|mimes:jpeg,jpg,png,svg',
        ]);
        //--- Validation Section Ends

        //--- Logic Section
        $country = new Country();
        $country->country = $request->country;
        $country->description = $request->description;

        if ($request->file('image')) 
         {      
            $file = $request->file('image');
            $image = time().$file->getClientOriginalName();
            $file->move('assets/images/country',$image);           
            $country->image = $image;
        } 
        if ($request->file('thumbnail')) 
        {      
           $file2 = $request->file('thumbnail');
           $thumbnail = time().$file->getClientOriginalName();
           $file2->move('assets/images/country/thumb',$thumbnail);           
           $country->thumbnail = $thumbnail;
       } 
        $country->save();
        //--- Logic Section Ends

        //--- Redirect Section        
        return redirect()->route('admin.countries')->with('success',"Country Created Successfully");
         
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
        $country = Country::findOrFail($id);
        return view('admin.destination.country.edit',compact('country')); 
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
            'country'      => 'required',
            'description'      => 'required',
        ]);
        //--- Validation Section Ends

        //--- Logic Section
        $country = Country::findOrFail($id);
        $country->country = $request->country;
        $country->description = $request->description;

        if ($request->file('image')) 
         {      
            @unlink(public_path('assets/images/country/'.$country->image));
            $file = $request->file('image');
            $image = time().$file->getClientOriginalName();
            $file->move('assets/images/country',$image);           
            $country->image = $image;
        } 
        if ($request->file('thumbnail')) 
        {     
          @unlink(public_path('assets/images/country/thumb/'.$country->thumbnail)); 
           $file2 = $request->file('thumbnail');
           $thumbnail = time().$file->getClientOriginalName();
           $file2->move('assets/images/country/thumb',$thumbnail);           
           $country->thumbnail = $thumbnail;
       } 
        $country->save();
        //--- Logic Section Ends

        //--- Redirect Section        
        return redirect()->route('admin.countries')->with('success',"Country Updated Successfully");
         
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
        $country = Country::findOrFail($id);
        @unlink(public_path('assets/images/country/'.$country->image));
        @unlink(public_path('assets/images/country/thumb/'.$country->thumbnail));
        $country->delete();
        return redirect()->route('admin.countries')->with('error','Country Deleted Successfully');
    }
}
