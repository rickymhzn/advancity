<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubjectInfo;
use App\Models\Subject;

class SubjectInfosController extends Controller
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
        $subjectinfos = SubjectInfo::with('subject')->orderBy('id', 'asc')->get();
        return view('admin.subject.subjectinfo.index',compact('subjectinfos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subjects = Subject::orderBy('id', 'asc')->get();
        return view('admin.subject.subjectinfo.create',compact('subjects'));
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
            'subjectid'      => 'required',
            'title'      => 'required',
            'description'      => 'required', 
        ]);
        //--- Validation Section Ends

        //--- Logic Section
        $subjectinfo = new SubjectInfo();
        $subjectinfo->subject_id = $request->subjectid;
        $subjectinfo->title = $request->title;
        $subjectinfo->description = $request->description;
        $subjectinfo->save();
        //--- Logic Section Ends

        //--- Redirect Section        
        return redirect()->route('admin.subjectinfos')->with('success',"Subject Info Created Successfully");
         
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
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subjects = Subject::orderBy('id', 'asc')->get();
        $subjectinfo = SubjectInfo::findOrFail($id);
        return view('admin.subject.subjectinfo.edit',compact('subjects','subjectinfo')); 
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
            'subjectid'      => 'required',
            'title'      => 'required',
            'description'      => 'required', 
        ]);
        //--- Validation Section Ends

        //--- Logic Section
        $subjectinfo = SubjectInfo::findOrFail($id);
        $subjectinfo->subject_id = $request->subjectid;
        $subjectinfo->title = $request->title;
        $subjectinfo->description = $request->description;
        $subjectinfo->save();
        //--- Logic Section Ends

        //--- Redirect Section        
        return redirect()->route('admin.subjectinfos')->with('success',"Subject Info Updated Successfully");
         
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
        $subjectinfo = SubjectInfo::findOrFail($id);
        $subjectinfo->delete();
        return redirect()->route('admin.subjectinfos')->with('error','Subject Info Deleted Successfully');
    }
}
