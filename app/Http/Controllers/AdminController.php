<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Admin;
class AdminController extends Controller
{
    public function index()
    {
        //

       return view ('admin.form');
    }

    public function create()
    {
        return view ('admin.add');
    }

     public function event()
    {
        return view ('bookingrooms.event');
    }

    
    public function store(Request $request)
    {
        //
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
