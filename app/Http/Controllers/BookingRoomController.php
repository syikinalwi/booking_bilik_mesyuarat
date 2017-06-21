<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Department;
use App\room;
use App\food;
use App\stuff;
use App\drink;
use App\meetingtitle;
use App\bookingroom;
use App\Http\Requests\CreatebookingroomRequest;
// add carbon

class BookingRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $departments = Department::pluck('department_name', 'id');
        $rooms = Department::pluck('room_name', 'id');
      


       return view ('bookingroom.create', compact ('departments', 'rooms'));
    }

   
    public function create()
    {
        //namedb=model.php::pluck from AttributeDb
        $departments= Department::pluck('department_name', 'id');
        $rooms= room::pluck('room_name', 'id');
        $meetingtitles = meetingtitle::pluck('meetingtitle_name', 'id');
        $foods = food::pluck('food_name', 'id');
        $drinks = drink::pluck('drink_name', 'id');
      

         return view ('bookingroom.create' , compact('departments','rooms', 'meetingtitles', 'foods', 'drinks'));
    }

    
    public function store(CreatebookingroomRequest $request)
    {
        $bookingroom = new bookingroom; 
        $bookingroom->department_name = $request->department_name;
        $bookingroom->title = $request->room; //room_name->title
        $bookingroom->meetingtitle_name = $request->meetingtitle_name;
        $bookingroom->stuff_list = $request->stuff_list;
        $bookingroom->food_name = $request->food_name;
        $bookingroom->drink_name = $request->drink_name;
        $bookingroom->start = $request->room;
        $bookingroom->save();
        // $db name-> db column name = form name
    // slpas berjya simpan, set success msg
        
       

        // kembali ke bookingroom.index
        return redirect()->route('bookingroom.create');
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
        //
    }

    
    
    public function destroy($id)
    {
        //
    }
}
