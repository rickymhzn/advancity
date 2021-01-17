<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\CountryInfo;
use Image;
use Validator;

class CountryInfosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $countryinfos = CountryInfo::with('country')->orderBy('id', 'asc')->get();
        return view('admin.destination.countryinfo.index',compact('countryinfos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::orderBy('id', 'asc')->get();
        return view('admin.destination.countryinfo.create',compact('countries'));
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
            'title'      => 'required',
            'content'      => 'required', 
        ]);
        //--- Validation Section Ends

        //--- Logic Section
        $countryinfo = new CountryInfo();
        $countryinfo->country_id = $request->countryid;
        $countryinfo->title = $request->title;
        $countryinfo->content = $request->content;
        $countryinfo->save();
        //--- Logic Section Ends

        //--- Redirect Section        
        return redirect()->route('admin.countryinfos')->with('success',"Country Info Created Successfully");
         
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
        $countryinfo = CountryInfo::findOrFail($id);
        return view('admin.destination.countryinfo.edit',compact('countries','countryinfo')); 
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
            'title'      => 'required',
            'content'      => 'required',
        ]);
        //--- Validation Section Ends

        //--- Logic Section
        $countryinfo = CountryInfo::findOrFail($id);
        $countryinfo->country_id = $request->countryid;
        $countryinfo->title = $request->title;
        $countryinfo->content = $request->content;
        $countryinfo->save();
        //--- Logic Section Ends

        //--- Redirect Section        
        return redirect()->route('admin.countryinfos')->with('success',"Country Info Updated Successfully");
         
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
        $countryinfo = CountryInfo::findOrFail($id);
        $countryinfo->delete();
        return redirect()->route('admin.countryinfos')->with('error','Country Info Deleted Successfully');
    }
}
