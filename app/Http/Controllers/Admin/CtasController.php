<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cta;
use Image;
use Validator;

class CtasController extends Controller
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
        $ctas = Cta::orderBy('id', 'asc')->get();
        return view('admin.cta.index',compact('ctas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cta.create');
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
            'image'      => 'required|mimes:jpeg,jpg,png,svg',
        ]);
        //--- Validation Section Ends

        //--- Logic Section
        $cta = new Cta();
        $cta->title = $request->title;
        $cta->description = $request->description;
        $cta->link1 = $request->link1;
        $cta->link2 = $request->link2;
        $cta->status = $request->status == 'on' ? 1 : 0;
        

        if ($request->file('image')) 
         {      
            $file = $request->file('image');
            $image = time().$file->getClientOriginalName();
            $file->move('assets/images/cta',$image);           
            $cta->image = $image;
        } 
        
        $cta->save();
        //--- Logic Section Ends

        //--- Redirect Section        
        return redirect()->route('admin.ctas')->with('success',"CTA Created Successfully");
         
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
        $cta = Cta::findOrFail($id);
        return view('admin.cta.edit',compact('cta')); 
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
            'image'      => 'mimes:jpeg,jpg,png,svg',
        ]);
        //--- Validation Section Ends

        //--- Logic Section
        $cta = Cta::findOrFail($id);
        $cta->title = $request->title;
        $cta->description = $request->description;
        $cta->link1 = $request->link1;
        $cta->link2 = $request->link2;
        $cta->status = $request->status == 'on' ? 1 : 0;
        

        if ($request->file('image')) 
         {  
            @unlink(public_path('assets/images/cta/'.$cta->image));    
            $file = $request->file('image');
            $image = time().$file->getClientOriginalName();
            $file->move('assets/images/cta',$image);           
            $cta->image = $image;
        } 
        
        $cta->save();
        //--- Logic Section Ends

        //--- Redirect Section        
        return redirect()->route('admin.ctas')->with('success',"CTA Updated Successfully");
         
        // --- Redirect Section Ends
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cta = Cta::findOrFail($id);
        @unlink(public_path('assets/images/cta/'.$cta->image));
        $cta->delete();
        return redirect()->route('admin.ctas')->with('error','CTA Deleted Successfully');
    }
}
