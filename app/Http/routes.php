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
Route::get('/try/try', 'TryController@index');
Route::get('/try/try2', 'Try2Controller@index');
Route::get('calendar', 'CalendarController@index');
Route::get('/bookingroom/create', 'BookingRoomController@create');
Route::post('/bookingroom', 'BookingRoomController@store');

//route for files
Route::resource('bookingroom', 'BookingRoomController');


// route for AdminControllers
