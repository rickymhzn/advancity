<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Models\Profile;
use Session;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $users=User::create([
        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>bcrypt('password')
    ]);

    $profile=Profile::create([
        'user_id'=>$users->id,
        'avatar'=>'uploads/avatars/male.jpg'
    ]);
    
    return redirect()->route('admin.users')->with('success',"User Added Successfully");

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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=User::findOrFail($id);
        $user->profile->delete();
        $user->delete();

        return redirect()->route('admin.users')->with('success',"User Deleted Successfully");

    
    }
    public function admin($id)
{
    $user=User::findOrFail($id);
    $user->admin=1;
    $user->save();
    return redirect()->route('admin.users')->with('success',"Permission Granted Successfilly.");
}
public function notadmin($id)
{
    $user=User::findOrFail($id);
    $user->admin=0;
    $user->save();
    return redirect()->route('admin.users')->with('warning',"Permission Removed Successfully.");
}

}
