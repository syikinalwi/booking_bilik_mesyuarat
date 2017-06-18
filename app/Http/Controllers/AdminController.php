<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function__contruct()
    {
        $this->middleware('auth');
    }
        // show dashboard page
    public function dashboard(){
        return view('admin.dashboard');
    }

    // public function users()
    // {
        

    //     $branch = Branch::all();
    //     $ltype = Leavetype::all();
    //     $ltime = Leavetime::all();
    //     $staff = Staff::all();
    //     $position = Position::all();

    //     return view('admin.users')->with('branchview', $branch)->with('ltview', $ltype)->with('ltiview', $ltime)->with('staff', $staff)->with('position', $position);
    
    // }

   
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
        //
    }
}
