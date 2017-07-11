<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');	
// Route::get('/try/try', 'TryController@index');
Route::get('calendar', 'CalendarController@index');
// Route::post('/bookingroom', 'BookingRoomController@store');
//Route::get('/bookingroom/create', 'BookingRoomController@create');

//route for files
Route::resource('bookingroom', 'BookingRoomController');
Route::get('/bookingrooms/getallevents', 'BookingRoomController@getAllEvents');
Route::post('/bookingroom/updateevents/{event_id}', 'BookingRoomController@updateevents');
// Route::get('bookingroom/add_events', 'BookingRoomController@getevents');


// route for AdminControllers
Route::get('/admin/form', 'AdminController@index');
 Route::post('/admin/meetingroom', 'AdminController@store');
Route::get('/admin/adddepartmentname', 'AdminController@create');
Route::get('/admin/meetingroom', 'AdminController@createmeetingroom');
Route::get('/admin/addstuff', 'AdminController@createaddstuff');
// Route::get('/bookingrooms/event', 'BookingRoomController@getevents');
