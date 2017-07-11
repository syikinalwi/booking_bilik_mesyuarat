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
use Carbon\Carbon;


class BookingRoomController extends Controller
{
    public function index(Request $request)
    {
        $departments = Department::pluck('department_name', 'id');
        $rooms = Department::pluck('title', 'id');
      


       return view ('bookingroom.create', compact ('departments', 'rooms'));
    }

   
    public function create()
    {
        //dbname=model.php::pluck from AttributeDb
        $departments= Department::pluck('department_name', 'id');
        $rooms= room::where('status', '=', 'aktif')->pluck('title', 'id');
        $meetingtitles = meetingtitle::pluck('meetingtitle_name', 'id');
        $foods = food::pluck('food_name', 'id');
        $drinks = drink::pluck('drink_name', 'id');
        $currtime = date('H:i');

         return view ('bookingroom.create' , compact('departments','rooms', 'meetingtitles', 'foods', 'drinks','currtime'));
    }

    
    public function store(CreatebookingroomRequest $request)
    {
        // dd('asas');
        $bookingroom = new bookingroom; 
        $bookingroom->department_name = $request->input('department_name');
        $bookingroom->title = $request->input('title'); //title->title
        // $bookingroom->start = $request->input('start'); 
        $bookingroom->time = $request->input('time'); 
        $bookingroom->meetingtitle_name = $request->input('meetingtitle_name');
        $bookingroom->stuff_list = $request->input('stuff_list');
        $bookingroom->food_name = $request->input('food_name');
        $bookingroom->drink_name = $request->input('drink_name');
        $dateevent = $request->input('start').' '.$request->input('time');
        $bookingroom->start = $dateevent;
        // $bookingroom->start = Carbon::parse($request->input('startdate'))->format('d-m-Y 00:00:00');
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
    public function getevents()
    {
        return view ('bookingroom.events');
    }

    public function getAllEvents() {
        $events=bookingroom::all();


        return json_encode($events);
    } //end func

    public function updateevents(Request $request, $event_id) {
     // dd($event_id, $updatedevent);

        $updatedevent = $request->date;
        // dd($updatedevent);
        $updatedevent=explode('T', $updatedevent);
        $eventstart = $updatedevent[0];
        $eventtime = $updatedevent[1];
        $eventdatetime=$eventstart.' '.$eventtime;

        
        $areas = bookingroom::where('id', '=', $event_id)->update(array ('start' => $eventdatetime, 'time'=>$eventtime));

        //return redirect('/admin/form');
        // return json_encode($events);
    } //end func

}
