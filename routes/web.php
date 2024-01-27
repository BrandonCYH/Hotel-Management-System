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
Route::get('/future-hotel-management-system', [App\Http\Controllers\User_Controller::class, 'home_page'])->name("main-page");

// Route for User View
Route::get('/guest-info/{data}', [App\Http\Controllers\User_Controller::class, 'guest_info'])->name('guest-info');
Route::get('/about-us',[App\Http\Controllers\User_Controller::class,'about_us'])->name('about-us');

// Route for Admin View
Route::get('/admin-dashboard', [App\Http\Controllers\Admin_Controller::class, 'dashboard'])->name('admin-dashboard');

// Route for adding the new room type
Route::get('/add-room', [App\Http\Controllers\Admin_Controller::class, 'add_room'])->name('add-room');
Route::post('/add-room-process', [App\Http\Controllers\Admin_Controller::class, 'add_room_process'])->name('add-room-process');

// Route for check the availability of the hotel room
Route::get('/room-availability',[App\Http\Controllers\Admin_Controller::class,'room_availability'])->name('room-availability');