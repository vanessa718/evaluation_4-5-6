<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::resource('room', 'RoomController');

Route::resource('bookings', 'BookingController');

Route::resource('customer', 'CustomerController');

Route::get('booking', 'BookingController@getForm');
Route::post('booking', ['uses'=>'BookingController@postForm', 'as'=>'storeBooking']);

Route::post('/booking', function () {
    return 'votre réservation est bien enregistrée';
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
