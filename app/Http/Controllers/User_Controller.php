<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Str;
use Laravel\Socialite\Facades\Socialite;

class User_Controller extends Controller
{
    public function login_with_google()
    {
        return Socialite::driver('google')->redirect();
    }

    public function call_back_from_google()
    {
        try {
            $user = Socialite::driver('google')->user();
            dump($user);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function home_page()
    {
        return view('index');
    }

    public function room_availability(Request $request)
    {
        $check_in_date = $request->checkInDate;
        $check_out_date = $request->checkOutDate;
        $room_type = $request->roomType;

        $guest_choice = DB::table('rooms')->join('room_type', 'rooms.room_type_id', '=', 'room_type.room_type_id')
            ->select('room_type_name', 'availability_status', 'price_per_night')
            ->where('room_type_name', '=', $room_type)
            ->where('availability_status', '!=', 'Booked')
            ->get();


        // dump($guest_choice);
        return view('User_Page.room_availability', ['guest_choice' => $guest_choice]);
    }

    public function about_us()
    {
        return view('User_Page.about_us');
    }

    public function hotel_room()
    {
        return view('User_Page.rooms');
    }

    public function hotel_restaurant()
    {
        return view('User_Page.restaurant');
    }

    public function exclusive_member()
    {
        return view('User_Page.member');
    }

    public function guest_info($data)
    {
        $image = DB::table('hotel_event')->select('Photo')->where('Promote_ID', '=', $data)->get();

        foreach ($image as $i) {
            $hotel_image = $i->Photo;
        }
        return view('User_Page.guest_info', ['hotel_image' => $hotel_image]);
    }
}