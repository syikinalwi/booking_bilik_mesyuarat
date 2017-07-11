<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Admin;
use App\Department;
use App\room;
// use Carbon\Carbon;
class AdminController extends Controller
{
    public function index()
    {

       return view ('admin.form');
    }

    public function create()
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

    
    public function store(CreateAdminRequest $request)
    {
        //
        $admin = new Admin;
        $admin ->department_name = $request->input('department_name');
        $admin ->room = $request->input('room');
        $admin->save();
    }
 
    public function show($id)
    {
        //
    }
    
    public function edit($id)
    {
        //
     }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {
        //
    }
}
