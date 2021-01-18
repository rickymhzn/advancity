<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Counter;

class CounterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $counter = Counter::first();
        return view('admin.counter',compact('counter'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
            'background'      => 'mimes:jpeg,jpg,png,svg',
            'title'       => 'required',
            'name1'       => 'required',
            'value1'=> 'required',
            'name2'       => 'required',
            'value2'=> 'required',
                        
        ]);
        //--- Validation Section Ends 
         //--- Logic Section
        $counter = Counter::findOrFail($id);
        $counter->title = $request->title;
        $counter->subtitle = $request->subtitle;
        $counter->name1 = $request->name1;
        $counter->value1 = $request->value1;
        $counter->name2 = $request->name2;
        $counter->value2 = $request->value2;
        $counter->name3 = $request->name3;
        $counter->value3 = $request->value3;
        $counter->name4 = $request->name4;
        $counter->value4 = $request->value4;

        if($request->file('background')){
            @unlink(public_path('/assets/images/counter/'.$counter->background));
            $file = $request->file('background');
            $background = time().$file->getClientOriginalName();
            $file->move('assets/images/counter',$background);           
            $counter->background = $background;

        }
                   
        //--- Logic Section Ends
        //--- Redirect Section   
        if(  $counter->save() ){
            return redirect()->back()->with('success',"Counter Updated Successfully");
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
        //
    }
}
