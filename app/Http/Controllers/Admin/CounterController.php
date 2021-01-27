<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Counter;

class CounterController extends Controller
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
        $counters = Counter::orderBy('id','asc')->get();
        return view('admin.counter.index',compact('counters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.counter.create');
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
            'order'      => 'required',
            'icon'      => 'required',
            'title'       => 'required',
            'value'       => 'required',
                   
        ]);
        //--- Validation Section Ends 
         //--- Logic Section
        $counter = new Counter();
        $counter->order = $request->order;
        $counter->icon = $request->icon;
        $counter->title = $request->title;
        $counter->value = $request->value;
      
                  
        //--- Logic Section Ends
        //--- Redirect Section   
        if(  $counter->save() ){
            return redirect()->route('admin.counters')->with('success',"Counter Created Successfully");
        }
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
        $counter = Counter::findOrFail($id);
        return view('admin.counter.edit',compact('counter'));
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
            'order'      => 'required',
            'icon'      => 'required',
            'title'       => 'required',
            'value'       => 'required',
                   
        ]);
        //--- Validation Section Ends 
         //--- Logic Section
        $counter = Counter::findOrFail($id);
        $counter->order = $request->order;
        $counter->icon = $request->icon;
        $counter->title = $request->title;
        $counter->value = $request->value;
      
                  
        //--- Logic Section Ends
        //--- Redirect Section   
        if(  $counter->save() ){
            return redirect()->route('admin.counters')->with('success',"Counter Updated Successfully");
        }
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
        $counter = Counter::findOrFail($id);

        $counter->delete();
        return redirect()->route('admin.counters')->with('error','Counter Deleted Successfully');
    }
}
