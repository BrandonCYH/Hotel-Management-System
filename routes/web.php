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
Route::get('/future-hotel-management-system', [User_Controller::class, 'home_page'])->name("main-page");
Route::view('/about-us', 'User_Page.about_us')->name('about-us');
Route::get('/terms-and-conditions', [User_Controller::class, 'terms_and_conditions'])->name('terms-and-conditions');

// hotel rooms functions
Route::get('/hotel-room', [User_Controller::class, 'hotel_room'])->name('hotel-room');
Route::get('hotel-room/fetch_room_data', [User_Controller::class, 'fetch_room_data']);
Route::post('/hotel-room-selection', [User_Controller::class, 'hotel_room_selection'])->name('hotel-room-selection');

// hotel room bookings functions
Route::get('/room-booking/{room_type_name}', [User_Controller::class, 'room_booking'])->name('room-booking');
Route::get('/booking-registration/{room_type_name}', [User_Controller::class, 'booking_registration'])->name('booking-registration');

Route::get('/booking-payment', [User_Controller::class, 'booking_payment'])->name('booking-payment');
Route::get('/booking-confirmation', [User_Controller::class, 'booking_confirmation'])->name('booking-confirmation');

Route::view('/hotel-restaurant', 'User_Page.restaurant')->name('hotel-restaurant');
Route::view('/exclusive-member', 'User_Page.member')->name('exclusive-member');

// Route for Admin View
Route::get('/admin-dashboard', [Admin_Controller::class, 'dashboard'])->name('admin-dashboard');

// Route for adding the new room type
Route::get('/add-room', [Admin_Controller::class, 'add_room'])->name('add-room');
Route::post('/add-room-process', [Admin_Controller::class, 'add_room_process'])->name('add-room-process');