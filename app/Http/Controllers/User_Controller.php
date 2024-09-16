<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Stripe;
use Session;

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

    public function about_us()
    {
        return view('User_Page.about_us');
    }

    public function terms_and_conditions()
    {
        return view('User_Page.terms_and_condition');
    }

    public function hotel_room(Request $request)
    {
        $room_data = DB::table('room_type')
            ->orderBy('price_per_night')
            ->paginate(4);

        $room_info = DB::table('rooms')
            ->join('room_type', 'room_type.room_type_id', '=', 'rooms.room_type_id')
            ->select('room_type.room_type_name', 'rooms.availability_status')
            ->orderBy('room_type.price_per_night')
            ->get();

        return view('User_Page.rooms', ['room_data' => $room_data, 'room_info' => $room_info]);
    }

    public function fetch_data(Request $request)
    {
        if ($request->ajax()) {
            $room_data = DB::table('room_type')
                ->orderBy('price_per_night')
                ->paginate(4);

            $room_info = DB::table('rooms')
                ->join('room_type', 'room_type.room_type_id', '=', 'rooms.room_type_id')
                ->select('room_type.room_type_name', 'rooms.availability_status')
                ->orderBy('room_type.price_per_night')
                ->get();

            return response()->json(['room_data' => $room_data, 'room_info' => $room_info]);
        }
    }

    public function hotel_selection(Request $request)
    {
        if ($request->ajax()) {
            $user_check_in_date = $request->check_in_date;
            $user_check_out_date = $request->check_out_date;
            $guest = $request->guest;
            $user_priceRange_before = $request->price_min;
            $user_priceRange_after = $request->price_max;

            $replace_priceMin = str_replace("$", "", $user_priceRange_before);
            $replace_priceMax = str_replace("$", "", $user_priceRange_after);

            $actual_priceMin = doubleval($replace_priceMin);
            $actual_priceMax = doubleval($replace_priceMax);

            $room_info = DB::table('rooms')
                ->join('room_type', 'room_type.room_type_id', '=', 'rooms.room_type_id')
                ->select('room_type.room_type_name', 'rooms.availability_status')
                ->orderBy('room_type.price_per_night')
                ->get();

            $room_data = DB::table('room_type')
                ->whereBetween('price_per_night', [$actual_priceMin, $actual_priceMax])
                ->orderBy('room_type.price_per_night')
                ->paginate(4);

            $pagination = '';
            foreach ($room_data->links()->elements[0] as $page => $url) {
                $pagination .= '<a href="' . $url . '" class="page-link ';
                $pagination .= $page == $room_data->currentPage() ? 'active' : '';
                $pagination .= ' pagination-link" data-page="' . $page . '">' . $page . '</a>';
            }

            return response()->json(['room_data' => $room_data, 'pagination' => $pagination, 'room_info' => $room_info]);
        }
    }

    public function room_booking($room_name)
    {
        $room_data = DB::table('room_type')
            ->where('room_type_name', '=', $room_name)
            ->get();

        $room_facilities = DB::table('room_facilities')
            ->join('room_type', 'room_type.room_type_id', '=', 'room_facilities.room_type_id')
            ->join('facilities', 'facilities.facility_id', '=', 'room_facilities.facility_id')
            ->where('room_type.room_type_name', '=', $room_name)
            ->get();

        $room_info = DB::table('rooms')
            ->join('room_type', 'room_type.room_type_id', '=', 'rooms.room_type_id')
            ->select('room_type.room_type_name', 'rooms.availability_status')
            ->where('room_type.room_type_name', '=', $room_name)
            ->get();

        return view('User_Page.room_booking_details', ['room_data' => $room_data, 'room_facilities' => $room_facilities, 'room_info' => $room_info]);
    }

    public function hotel_restaurant()
    {
        return view('User_Page.restaurant');
    }

    public function exclusive_member()
    {
        return view('User_Page.member');
    }

    public function booking_confirmation()
    {
        return view('User_Page.booking_confirmation');
    }

    public function booking_registration()
    {
        return view('User_Page.booking_registration');
    }
}