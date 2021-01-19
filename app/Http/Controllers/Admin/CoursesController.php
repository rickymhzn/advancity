<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use Image;
use Validator;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::orderBy('id', 'asc')->get();
        return view('admin.course.index',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.course.create');
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
            'image'      => 'mimes:jpeg,jpg,png,svg',
          
        ]);
        //--- Validation Section Ends

        //--- Logic Section
        $course = new Course();
        $course->name = $request->name;
        $course->description = $request->description;

        if ($request->file('image')) 
         {      
            $file = $request->file('image');
            $image = time().$file->getClientOriginalName();
            $file->move('assets/images/course',$image);           
            $course->image = $image;
        } 
      
        $course->save();
        //--- Logic Section Ends

        //--- Redirect Section        
        return redirect()->route('admin.courses')->with('success',"Course Created Successfully");
         
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
        $course = Course::findOrFail($id);
        return view('admin.course.edit',compact('course')); 
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
        $course = Course::findOrFail($id);
        $course->name = $request->name;
        $course->description = $request->description;

        if ($request->file('image')) 
         {  
             if(!$course->image == null ) 
             {
                 @unlink(public_path('assets/images/course/'.$course->image));  
             } 
            $file = $request->file('image');
            $image = time().$file->getClientOriginalName();
            $file->move('assets/images/course',$image);           
            $course->image = $image;
        } 
      
        $course->save();
        //--- Logic Section Ends

        //--- Redirect Section        
        return redirect()->route('admin.courses')->with('success',"Course Updated Successfully");
         
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
        $course = Course::findOrFail($id);
        if(!$course->image == null ) 
        {
        @unlink(public_path('assets/images/course/'.$course->image));
        }
        $course->delete();
        return redirect()->route('admin.courses')->with('error','Course Deleted Successfully');
    }
}
