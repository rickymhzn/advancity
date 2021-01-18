<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;
use Image;
use Validator;

class TestimonialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonial::orderBy('id', 'asc')->get();
        return view('admin.testimonial.index',compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testimonial.create');
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
            'name'      => 'required',
            'description'      => 'required',
            'image'      => 'required|mimes:jpeg,jpg,png,svg',
        ]);
        //--- Validation Section Ends

        //--- Logic Section
        $testimonial = new Testimonial();
        $testimonial->name = $request->name;
        $testimonial->subtitle = $request->subtitle;
        $testimonial->description = $request->description;

        if ($request->file('image')) 
         {      
            $file = $request->file('image');
            $image = time().$file->getClientOriginalName();
            $file->move('assets/images/testimonial',$image);           
            $testimonial->image = $image;
        } 
        
        $testimonial->save();
        //--- Logic Section Ends

        //--- Redirect Section        
        return redirect()->route('admin.testimonials')->with('success',"Testimonial Created Successfully");
         
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
        $testimonial = Testimonial::findOrFail($id);
        return view('admin.testimonial.edit',compact('testimonial'));
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
            'name'      => 'required',
            'description'      => 'required',
            'image'      => 'mimes:jpeg,jpg,png,svg',
        ]);
        //--- Validation Section Ends

        //--- Logic Section
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->name = $request->name;
        $testimonial->subtitle = $request->subtitle;
        $testimonial->description = $request->description;

        if ($request->file('image')) 
         {      
            @unlink(public_path('assets/images/testimonial/'.$testimonial->image));
            $file = $request->file('image');
            $image = time().$file->getClientOriginalName();
            $file->move('assets/images/testimonial',$image);           
            $testimonial->image = $image;
        } 
        
        $testimonial->save();
        //--- Logic Section Ends

        //--- Redirect Section        
        return redirect()->route('admin.testimonials')->with('success',"Testimonial Updated Successfully");
         
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
        $testimonial = Testimonial::findOrFail($id);
        @unlink(public_path('assets/images/testimonial/'.$testimonial->image));
        $testimonial->delete();
        return redirect()->route('admin.testimonials')->with('error','Testimonial Deleted Successfully');
    }
}
