<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Subject;
use Image;
use Validator;

class SubjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subjects = Subject::with('course')->orderBy('id', 'asc')->get();
        return view('admin.subject.index',compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::orderBy('id', 'asc')->get();
        return view('admin.subject.create',compact('courses'));
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
            'courseid'      => 'required',
            'name'      => 'required',
            'description'      => 'required', 
            'image'      => 'required|mimes:jpeg,jpg,png,svg',
            'thumbnail'      => 'required|mimes:jpeg,jpg,png,svg',
        ]);
        //--- Validation Section Ends

        //--- Logic Section
        $subject = new Subject();
        $subject->course_id = $request->courseid;
        $subject->name = $request->name;
        $subject->description = $request->description;

        if ($request->file('image')) 
        {  
           $file = $request->file('image');
           $image = time().$file->getClientOriginalName();
           $file->move('assets/images/subject',$image);           
           $subject->image = $image;
       } 

       if ($request->file('thumbnail')) 
       {  
          $file2 = $request->file('thumbnail');
          $thumbnail = time().$file2->getClientOriginalName();
          $file2->move('assets/images/subject/thumb',$thumbnail);           
          $subject->thumbnail = $thumbnail;
      } 

        $subject->save();
        //--- Logic Section Ends

        //--- Redirect Section        
        return redirect()->route('admin.subjects')->with('success',"Subject Created Successfully");
         
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
        $courses = Course::orderBy('id', 'asc')->get();
        $subject = Subject::findOrFail($id);
        return view('admin.subject.edit',compact('courses','subject')); 
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
            'courseid'      => 'required',
            'name'      => 'required',
            'description'      => 'required', 
            'image'      => 'mimes:jpeg,jpg,png,svg',
            'thumbnail'      => 'mimes:jpeg,jpg,png,svg',
        ]);
        //--- Validation Section Ends

        //--- Logic Section
        $subject = Subject::findOrFail($id);
        $subject->course_id = $request->courseid;
        $subject->name = $request->name;
        $subject->description = $request->description;

        if ($request->file('image')) 
        {  
         @unlink(public_path('assets/images/subject/'.$subject->image));  
           $file = $request->file('image');
           $image = time().$file->getClientOriginalName();
           $file->move('assets/images/subject',$image);           
           $subject->image = $image;
       } 

       if ($request->file('thumbnail')) 
       {  
          @unlink(public_path('assets/images/subject/thumb'.$subject->thumbnail)); 
          $file2 = $request->file('thumbnail');
          $thumbnail = time().$file2->getClientOriginalName();
          $file2->move('assets/images/subject/thumb',$thumbnail);           
          $subject->thumbnail = $thumbnail;
      } 

        $subject->save();
        //--- Logic Section Ends

        //--- Redirect Section        
        return redirect()->route('admin.subjects')->with('success',"Subject Updated Successfully");
         
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
        $subject = Subject::findOrFail($id);
        @unlink(public_path('assets/images/subject/'.$subject->image));  
        @unlink(public_path('assets/images/subject/thumb'.$subject->thumbnail)); 
        $subject->delete();
        return redirect()->route('admin.subjects')->with('error','Subject Deleted Successfully');
    }
}
