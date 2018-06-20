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




Route::resource('room', 'RoomController');

Route::resource('bookings', 'BookingController');

Route::resource('customer', 'CustomerController');



Route::post('/booking', function () {
    return 'votre réservation est bien enregistrée';
});




