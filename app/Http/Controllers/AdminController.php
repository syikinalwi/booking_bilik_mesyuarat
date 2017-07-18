<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Admin;
use App\Department;
use App\room;
// use App\bookingroom;
use App\stuff;
// use Carbon\Carbon;
use App\User;
use Session;
use App\Http\Requests\CreateAdminRequest;
use App\Http\Requests\CreateDepartmentNameRequest;
use App\Http\Requests\CreateStuffListRequest;
use App\Http\Requests\CreateRegisterAdminRequest;

class AdminController extends Controller
{
    public function index()
    {

       return view ('admin.form');
    }
    public function getRegisterAdmin()
    {
        return view ('admin.registeradmin');
    }

    public function create()
    {
        
        // return view ('admin.adddepartmentname');
    }

      public function createdepartmentname()
    {
        
        return view ('admin.adddepartmentname');
    }
     public function createmeetingroom()
    {
        return view ('admin.meetingroom');
    }

     public function createaddstuff()
    {
        return view ('admin.addstuff');
    }

     public function event()
    {
        return view ('bookingrooms.event');
    }

    // store new meeting room
    public function store(CreateAdminRequest $request)
    {
        // dd('asas');
        $rooms = new room;
        $rooms->title = $request->input('title');
        $rooms->status = $request->input('status');
        $rooms->color = $request->input('color');
        $rooms->save();

        return redirect()->route('admin.createmeetingroom')->withSuccess('Room created!!');
    }
    // store new department
    public function addDepartmentName(CreateDepartmentNameRequest $request) {

        $department = new Department;
        $department->department_name = $request->input('department_name');
        $department->status = $request->input('status');
       
        $department->save();

        return redirect()->route('admin.adddepartmentname')->withSuccess('New Department created!!');    

    }
    
    // store new stuff
     public function addStuffList(CreateStuffListRequest $request) {

        $stuffs = new stuff;
        $stuffs->stuff_name = $request->input('stuff_list');
        $stuffs->status = $request->input('status');
        $stuffs->save();

        return redirect()->route('admin.addstuff')->withSuccess('New Department created!!');    

    }

    // store registered admin
    public function RegisterAdmin(CreateRegisterAdminRequest $request)
    {

        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->position = $request->input('position');
        $user->save();


        return view('admin.form');


    } 
    
    public function show($id)
    {
        //
    }
    
    // edit meeting room
    public function editmeetingroom()
    {

        $room= room::where('status', '=', 'aktif')->pluck('title', 'title');
       
        return view('admin.editmeetingroom', compact('room'));
    }

    public function update(Request $request, $id)
    {
        //  $rooms = room::find($id);
        
        // $rooms->title = $request->input('title');
        // $rooms->status = $request->input('status');
        // $rooms->color = $request->input('color');
        // $rooms->save();
    }

    public function destroy($id)
    {
        //
    }
}
