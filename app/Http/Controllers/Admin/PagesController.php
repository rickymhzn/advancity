<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use Image;
use Validator;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::orderBy('id', 'asc')->get();
        return view('admin.page.index',compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.page.create');
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
        $page = new Page();
        $page->title = $request->title;
        $page->description = $request->description;
        $page->btnname = $request->btnname;
        $page->btnlink = $request->btnlink;

        if ($request->file('image')) 
         {      
            $file = $request->file('image');
            $image = time().$file->getClientOriginalName();
            $file->move('assets/images/page',$image);           
            $page->image = $image;
        } 
       
        $page->save();
        //--- Logic Section Ends

        //--- Redirect Section        
        return redirect()->route('admin.pages')->with('success',"Page Created Successfully");
         
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
        $page = Page::findOrFail($id);
        return view('admin.page.edit',compact('page')); 
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
        $page = Page::findOrFail($id);
        $page->title = $request->title;
        $page->description = $request->description;
        $page->btnname = $request->btnname;
        $page->btnlink = $request->btnlink;

        if ($request->file('image')) 
         {   
            @unlink(public_path('assets/images/page/'.$page->image));   
            $file = $request->file('image');
            $image = time().$file->getClientOriginalName();
            $file->move('assets/images/page',$image);           
            $page->image = $image;
        } 
       
        $page->save();
        //--- Logic Section Ends

        //--- Redirect Section        
        return redirect()->route('admin.pages')->with('success',"Page Updated Successfully");
         
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
        $page = Page::findOrFail($id);
        @unlink(public_path('assets/images/page/'.$page->image));

        $page->delete();
        return redirect()->route('admin.pages')->with('error','Page Deleted Successfully');
    }
}
