<?php

namespace App\Http\Controllers;

use App\Models\hotel_event;
use DB;
use Illuminate\Http\Request;

class Admin_Controller extends Controller
{
    public function dashboard()
    {
        return view('Admin_Page.dashboard');
    }

    public function add_room()
    {
        return view('Admin_Page.add_room');
    }

    public function add_room_process(Request $request)
    {
        $requestData = $request->input('photo');
        $fileName = $request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs('images', $fileName, 'public');
        $requestData["photo"] = '/storage/' . $path;

        //due to image cannot store in database I used my own method
        //loop through the array and only get the images data to store in database
        foreach ($requestData as $data) {
            $image = $data;
        }
        
        DB::insert('insert into hotel_event (photo) values (?)', [$image]);
        return redirect('/add-room')->with('flash_message', 'Room Addedd!');
    }

    public function room_availability()
    {
        $hotel_room = DB::select('SELECT * FROM hotel_event');
        return view('Admin_Page.room_availability')->with('hotel_room', $hotel_room);
    }
}