<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;
use Image;
use Validator;

class TeamsController extends Controller
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
        $teams = Team::orderBy('id', 'asc')->get();
        return view('admin.team.index',compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.team.create');
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
        'designation'      => 'required',
        'image'      => 'required|mimes:jpeg,jpg,png,svg',
       
    ]);
    //--- Validation Section Ends

    //--- Logic Section
    $team = new Team();
    $team->name = $request->name;
    $team->designation = $request->designation;
    $team->contact = $request->contact;
    $team->email = $request->email;
    $team->description = $request->description;
   

    if ($request->file('image')) 
     {      
        $file = $request->file('image');
        $image = time().$file->getClientOriginalName();
        $file->move('assets/images/team',$image);           
        $team->image = $image;
    } 
   
    $team->save();
    //--- Logic Section Ends

    //--- Redirect Section        
    return redirect()->route('admin.teams')->with('success',"Team Member Created Successfully");
     
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
        $team = Team::findOrFail($id);
        return view('admin.team.edit',compact('team')); 
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
        'designation'      => 'required',
        'image'      => 'mimes:jpeg,jpg,png,svg',
       
    ]);
    //--- Validation Section Ends

    //--- Logic Section
    $team = Team::findOrFail($id);
    $team->name = $request->name;
    $team->designation = $request->designation;
    $team->contact = $request->contact;
    $team->email = $request->email;
    $team->description = $request->description;
   

    if ($request->file('image')) 
     {      
        @unlink(public_path('assets/images/team/'.$team->image));
        $file = $request->file('image');
        $image = time().$file->getClientOriginalName();
        $file->move('assets/images/team',$image);           
        $team->image = $image;
    } 
   
    $team->save();
    //--- Logic Section Ends

    //--- Redirect Section        
    return redirect()->route('admin.teams')->with('success',"Team Member Updated Successfully");
     
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
        $team = Team::findOrFail($id);
        @unlink(public_path('assets/images/team/'.$team->image));
        $team->delete();
        return redirect()->route('admin.teams')->with('error','Team Member Deleted Successfully');
    }
}
