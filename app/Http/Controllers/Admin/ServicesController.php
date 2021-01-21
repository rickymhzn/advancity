<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use Image;
use Validator;

class ServicesController extends Controller
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
        $services = Service::orderBy('id', 'asc')->get();
        return view('admin.service.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.service.create');
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
            'title'      => 'required',
            'description'      => 'required',
            'image'      => 'required|mimes:jpeg,jpg,png,svg',
        ]);
        //--- Validation Section Ends

        //--- Logic Section
        $service = new Service();
        $service->title = $request->title;
        $service->description = $request->description;

        if ($request->file('image')) 
         {      
            $file = $request->file('image');
            $image = time().$file->getClientOriginalName();
            $file->move('assets/images/service',$image);           
            $service->image = $image;
        } 
       
        $service->save();
        //--- Logic Section Ends

        //--- Redirect Section        
        return redirect()->route('admin.services')->with('success',"Service Created Successfully");
         
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
        $service = Service::findOrFail($id);
        return view('admin.service.edit',compact('service')); 
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
            'title'      => 'required',
            'description'      => 'required',
            'image'      => 'mimes:jpeg,jpg,png,svg',
        ]);
        //--- Validation Section Ends

        //--- Logic Section
        $service = Service::findOrFail($id);
        $service->title = $request->title;
        $service->description = $request->description;

        if ($request->file('image')) 
         {      
            @unlink(public_path('assets/images/service/'.$service->image));
            $file = $request->file('image');
            $image = time().$file->getClientOriginalName();
            $file->move('assets/images/service',$image);           
            $service->image = $image;
        } 
       
        $service->save();
        //--- Logic Section Ends

        //--- Redirect Section        
        return redirect()->route('admin.services')->with('success',"Service Updated Successfully");
         
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
        $service = Service::findOrFail($id);
        @unlink(public_path('assets/images/service/'.$service->image));
        $service->delete();
        return redirect()->route('admin.services')->with('error','Service Deleted Successfully');
    }
}
