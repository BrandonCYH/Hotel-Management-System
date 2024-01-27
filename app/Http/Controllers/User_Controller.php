<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Str;

class User_Controller extends Controller
{
    public function home_page()
    {
        return view('index');
    }

    public function about_us()
    {
        return view('User_Page.about_us');
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