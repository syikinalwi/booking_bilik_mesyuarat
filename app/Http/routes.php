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
    return view('calendar');
});

Route::auth();

// Route::get('/home', 'HomeController@index');	
// Route::get('/try/try', 'TryController@index');
Route::get('calendar', 'CalendarController@index');
// Route::post('/bookingroom', 'BookingRoomController@store');

//Route::get('/bookingroom/create', 'BookingRoomController@create');

//route for booking
Route::resource('bookingroom', 'BookingRoomController');
Route::get('/bookingrooms/getallevents', 'BookingRoomController@getAllEvents');
Route::post('/bookingroom/updateevents/{event_id}', 'BookingRoomController@updateevents');
// Route::get('bookingroom/add_events', 'BookingRoomController@getevents');


// route for AdminControllers
// Route::resource('calendar', 'FormAdminController');
Route::resource('/admin/form', 'AdminController');

// create URI, Name at cmder 
Route::get('/admin/registeradmin',['as'=>'admin.registeradmin', 'uses'=> 'AdminController@getRegisterAdmin']);
Route::post('/admin/registeradmin',['as'=>'admin.registeradmin', 'uses'=> 'AdminController@RegisterAdmin']);



Route::get('/admin/adddepartmentname', ['as' => 'admin.adddepartmentname', 'uses' => 'AdminController@createdepartmentname']);
Route::post('/admin/form/adddepartmentname', ['as'=>'admin.form.adddepartmentname', 'uses'=>'AdminController@addDepartmentName']);
Route::get('/admin/showdepartmentname', ['as' => 'admin.showdepartmentname', 'uses' => 'AdminController@showdepartmentname']);
Route::get('/admin/editdepartmentname/{id}', ['as' => 'admin.editdepartmentname', 'uses' => 'AdminController@editdepartmentname']);
Route::post('/admin/destroydepartmentname', ['as' => 'admin.destroydepartmentname', 'uses' => 'AdminController@destroydepartmentname']);


Route::get('/admin/meetingroom', ['as' => 'admin.createmeetingroom', 'uses' => 'AdminController@createmeetingroom']);
Route::get('/admin/showmeetingroom', ['as' => 'admin.showmeetingroom', 'uses' => 'AdminController@showmeetingroom']);
Route::get('/admin/editmeetingroom/{id}', ['as' => 'admin.editmeetingroom', 'uses' => 'AdminController@editmeetingroom']);
Route::post('/admin/destroymeetingroom', ['as' => 'admin.destroymeetingroom', 'uses' => 'AdminController@destroymeetingroom']);


Route::get('/admin/addstuff', ['as' => 'admin.addstuff', 'uses' => 'AdminController@createaddstuff']);
Route::post('/admin/form/addstuff', ['as'=>'admin.form.addstuff', 'uses'=>'AdminController@addStuffList']);
Route::get('/admin/showstuff', ['as' => 'admin.showstuff', 'uses' => 'AdminController@showstuff']);
Route::get('/admin/editstuff/{id}', ['as' => 'admin.editstuff', 'uses' => 'AdminController@editstuff']);
Route::post('/admin/destroystuff', ['as' => 'admin.destroystuff', 'uses' => 'AdminController@destroystuff']);
// Route::get('/bookingrooms/event', 'BookingRoomController@getevents');
