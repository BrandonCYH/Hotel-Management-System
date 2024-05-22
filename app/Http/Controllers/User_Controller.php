<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
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

    public function about_us()
    {
        return view('User_Page.about_us');
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

        return view('User_Page.room_booking', ['room_data' => $room_data, 'room_facilities' => $room_facilities, 'room_info' => $room_info]);
    }

    public function hotel_restaurant()
    {
        return view('User_Page.restaurant');
    }

    public function exclusive_member()
    {
        return view('User_Page.member');
    }

    public function booking_confirmation(Request $request)
    {
        $selected_roomName = $request->input('room-name');

        $room_number = DB::table('rooms')
            ->join('room_type', 'room_type.room_type_id', '=', 'rooms.room_type_id')
            ->select('room_type.room_type_name', 'rooms.room_number', 'rooms.room_id')
            ->orderBy('rooms.room_number')
            ->where('room_type.room_type_name', '=', $selected_roomName)
            ->get();

        // randomly pickup the room number from query value
        $random_room_number = $room_number->shuffle()->take(1);

        // Generate a random booking ID
        $bookingId = 'HTL_' . mt_rand(1000, 9999);

        $guest_name = $request->input('guest_name');
        $guest_email = $request->input('guest_email');
        $guest_phoneNumber = $request->input('guest_phoneNumber');

        $room_unit = $request->input('guest_roomUnit');
        $room_price = $request->input('room-price');

        $guest_check_in_date = $request->input('guest_checkIn_date');
        $guest_check_out_date = $request->input('guest_checkOut_date');

        $selectedParking = $request->input('parking-type');
        $selected_parkingPrice = $request->input('parking-price');

        $selectedServices = $request->input('service-type');
        $selected_priceServices = $request->input('service-price');

        $selectedOffer = $request->input('offer-type');
        $selected_offerPrice = $request->input('offer-price');

        $each_selectedServices = explode(', ', $selectedServices);
        $each_selected_priceServices = explode(', ', $selected_priceServices);
        $each_selectedOffer = explode(', ', $selectedOffer);
        $each_selected_priceOffer = explode(', ', $selected_offerPrice);

        // dump($random_room_number);

        return view(
            'User_Page.booking_confirmation',
            compact(
                'bookingId',
                'guest_name',
                'guest_email',
                'guest_phoneNumber',
                'selected_roomName',
                'random_room_number',
                'room_price',
                'room_unit',
                'guest_check_in_date',
                'guest_check_out_date',
                'selectedParking',
                'selected_parkingPrice',
                'each_selectedServices',
                'each_selected_priceServices',
                'each_selectedOffer',
                'each_selected_priceOffer'
            )
        );
    }

    public function booking_receipt(Request $request)
    {
        $booking_id = $request->input('booking-id');
        dump($booking_id);
        // return view('User_Page.booking_receipt');
    }
}