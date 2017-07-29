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
use Alert;

class AdminController extends Controller
{
    public function index()
    {
       return view ('admin.form');
    }
    // Admin controller 
    // function to register new admin
    public function getRegisterAdmin()
    {
        return view ('admin.registeradmin');
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

    public function create()
    {
        
        // return view ('admin.adddepartmentname');
    }

    public function event()
    {
        return view ('bookingrooms.event');
    }

    public function show($id)
    {
        //
    }
    
   

    public function update(Request $request, $id)
    {
        //  $rooms = room::find($id);
        
        // $rooms->title = $request->input('title');
        // $rooms->status = $request->input('status');
        // $rooms->color = $request->input('color');
        // $rooms->save();
    }

    //------------department name controller---------------------------
    public function createdepartmentname()
    {
        
        return view ('admin.adddepartmentname');
    }

    public function addDepartmentName(CreateDepartmentNameRequest $request) 
    {
        $department = new Department;
        $department->department_name = $request->input('department_name');
        $department->status = $request->input('status');
       
        $department->save();

        return redirect()->route('admin.adddepartmentname')->withSuccess('New Department created!!');    
    }

     public function editdepartmentname($id)
    { 
        // dd('asasa');
        $department= Department::findOrFail($id)->pluck('department_name', 'id');
        
        //needs to pluck status  
        return view('admin.editdepartmentname', compact('department'));
    }

    public function showdepartmentname()
    {
        // dd('asas');

        $department = Department::paginate(8);
        
        // $products = Product::with('brand','subcategory','area','user');
         // $department = $department->orderBy('id', 'desc');

        // $department = $department->paginate(2);

        return view('admin.showdepartmentname')->with('departments', $department);
    }
    public function updatedepartmentname(Request $request)
    {
        // needs this function to update and replace old data with the latest booked room
        // update data by id
        
        // $department =  Department::find($id);
        //insert data into db

        // $department= Department::findOrFail($id)->pluck('department_name', 'id');
        
        $department->department_name = $request->input('department_name');
        $department->status = $request->input('status');
       
        $department->save();

        return redirect()->route('admin.editdepartmentname');
    }

    public function destroydepartmentname(Request $request)
    {
        // dd('asas'); 
        $id = $request->input('id');
        // $department = Department::find($id);
        $department = Department::findOrFail($id);
        $department->delete();

        // flash('department successfully deleted')->success();
        // Alert::success('department successfully deleted!');

        return redirect()->route('admin.showdepartmentname');
        // return view('admin.form');
    }



    //-------- meeting room controller-----------------
    public function createmeetingroom()
    {
        return view ('admin.meetingroom');
    }

        // store meetingroom
    public function editmeetingroom($id)
    { 
        // dd('asasa');
        $room= room::where('status', '=', 'aktif')->pluck('title', 'id');
        
        //needs to pluck status  
        return view('admin.editmeetingroom', compact('room'));
    }
      public function showmeetingroom()
    {
        // dd('asas');
        $rooms = room::paginate(2);
        // $rooms = room::all();//->paginate(2);
        return view('admin.showmeetingroom')->with('rooms', $rooms);
    }
     
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

  
    public function destroymeetingroom(Request $request)
    {
        // dd('asas'); 
        $id = $request->input('id');
        $rooms = room::findOrFail($id);
        $rooms->delete();

        // flash('room successfully deleted')->success();
        // Alert::success('room successfully deleted!');

        return redirect()->route('admin.showmeetingroom');
        // return view('admin.form');
    }


    //---------------------stuff controller----------------------------------
    public function createaddstuff()
    {
        return view ('admin.addstuff');
    }

    // store new stuff
     public function addStuffList(CreateStuffListRequest $request) {

        $stuffs = new stuff;
        $stuffs->stuff_name = $request->input('stuff_list');
        $stuffs->status = $request->input('status');
        $stuffs->save();

        return redirect()->route('admin.addstuff')->withSuccess('New Stuff created!!');    

    }

    public function showstuff()
    {
        // dd('asas');

        $stuffs = stuff::paginate(3);
        
        // $products = Product::with('brand','subcategory','area','user');
         // $stuff = $stuff->orderBy('id', 'desc');

        // $stuff = $stuff->paginate(2);

        return view('admin.showstuff')->with('stuffs', $stuffs);
    }

          // store meetingroom
    public function editstuff($id)
    { 
        // dd('asasa'); //->where($entity_model->getKeyName(), $id)
        // $stuffs = stuff::findOrFail($id)->where($stuff->stuff(), $id);//get from internet
        // $stuffs= stuff::findOrFail($id)->pluck('stuff_name', 'id');
        $stuffs= stuff::all();
        
        //needs to pluck status  

        return view('admin.editstuff', compact('stuffs')); 
    }

    public function destroystuff(Request $request)
    {
        // dd('asas'); 
        $id = $request->input('id');
        $stuff = stuff::findOrFail($id);
        $stuff->delete();

        // flash('stuff successfully deleted')->success();
        // Alert::success('stuff successfully deleted!');

        return redirect()->route('admin.showstuff');
        // return view('admin.form');
    }
     
}
