<?php

use App\Http\Controllers\Admin_Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User_Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route for everyone
Route::get('/sign-in', [App\Http\Controllers\System_Controller::class, 'sign_in'])->name('sign-in');

// main page functions
Route::get('/ocean-heaven-hotel', [User_Controller::class, 'home_page'])->name("main-page");
Route::view('/about-us', 'User_Page.about_us')->name('about-us');
Route::get('/terms-and-conditions', [User_Controller::class, 'terms_and_conditions'])->name('terms-and-conditions');
Route::view('/hotel-restaurant', 'User_Page.restaurant')->name('hotel-restaurant');
Route::view('/exclusive-member', 'User_Page.member')->name('exclusive-member');

// hotel rooms functions
Route::get('/hotel-room', [User_Controller::class, 'hotel_room'])->name('hotel-room');
Route::get('hotel-room/fetch_room_data', [User_Controller::class, 'fetch_room_data']);
Route::post('/hotel-room-selection', [User_Controller::class, 'hotel_room_selection'])->name('hotel-room-selection');

// hotel hall functions
Route::get('/hotel-hall', [User_Controller::class, 'hotel_hall'])->name("hotel-hall");

// hotel room bookings functions
Route::get('/room-booking-details/{room_type_name}', [User_Controller::class, 'room_booking_details'])->name('room-booking-details');
Route::post('/booking-registration/{room_type_name}', [User_Controller::class, 'booking_registration'])->name('booking-registration');
Route::post('/booking-payment/{room_type_name}', [User_Controller::class, 'booking_payment'])->name('booking-payment');
Route::post('/booking-confirmation', [User_Controller::class, 'booking_confirmation'])->name('booking-confirmation');
Route::post('/cancel-booking', [User_Controller::class, 'cancel_booking'])->name('cancel-booking');

// Route for Admin View
Route::get('/admin-dashboard', [Admin_Controller::class, 'dashboard'])->name('admin-dashboard');

// Route for adding the new room type
Route::get('/room-setting', [Admin_Controller::class, 'room_setting'])->name('room-setting');
Route::get('/room-setting/fetch_room_data', [Admin_Controller::class, 'fetch_room_data']);
Route::get("/room-setting/{roomName}", [Admin_Controller::class, 'getHotelData'])->name('getHotelData');
Route::post('/add-new-facilities', [Admin_Controller::class, 'add_newFacilities'])->name('addNewFacilities');
Route::post('/update-room-data', [Admin_Controller::class, 'update_roomData'])->name('update-room-data');