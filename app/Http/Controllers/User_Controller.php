<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class User_Controller extends Controller
{
    public function home_page()
    {
        $room_data = DB::table('room_type')
            ->orderBy('room_price')
            ->get();

        return view('index', ['room_data' => $room_data]);
    }

    public function about_us()
    {
        return view('User_Page.about_us');
    }

    public function terms_and_conditions()
    {
        return view('User_Page.terms_and_condition');
    }

    public function hotel_room()
    {
        $room_data = DB::table('room_type')
            ->orderBy('room_price')
            ->paginate(4);

        $room_info = DB::table('rooms')
            ->join('room_type', 'room_type.room_type_id', '=', 'rooms.room_type_id')
            ->select('room_type.room_type_name', 'rooms.availability_status')
            ->orderBy('room_type.room_price')
            ->get();

        return view('User_Page.rooms', ['room_data' => $room_data, 'room_info' => $room_info]);
    }

    public function fetch_room_data(Request $request)
    {
        if ($request->ajax()) {
            $room_data = DB::table('room_type')
                ->orderBy('room_price')
                ->paginate(4);

            $room_info = DB::table('rooms')
                ->join('room_type', 'room_type.room_type_id', '=', 'rooms.room_type_id')
                ->select('room_type.room_type_name', 'rooms.availability_status')
                ->orderBy('room_type.room_price')
                ->get();

            return response()->json(['room_data' => $room_data, 'room_info' => $room_info]);
        }
    }

    public function hotel_room_selection(Request $request)
    {
        if ($request->ajax()) {
            $facilities = $request->facilities;
            $guest = $request->room_guest;
            $user_priceRange_before = $request->price_min;
            $user_priceRange_after = $request->price_max;

            $number_guest = (int) $guest;

            $replace_priceMin = str_replace("$", "", $user_priceRange_before);
            $replace_priceMax = str_replace("$", "", $user_priceRange_after);

            $actual_priceMin = doubleval($replace_priceMin);
            $actual_priceMax = doubleval($replace_priceMax);

            $room_info = DB::table('rooms')
                ->join('room_type', 'room_type.room_type_id', '=', 'rooms.room_type_id')
                ->select('room_type.room_type_name', 'rooms.availability_status')
                ->orderBy('room_type.room_price')
                ->get();

            $room_data = DB::table('room_facilities')
                ->join('room_type', 'room_type.room_type_id', '=', 'room_facilities.room_type_id')
                ->join('facilities', 'facilities.facility_id', '=', 'room_facilities.facility_id')

                ->when($actual_priceMin && $actual_priceMax, function ($query) use ($actual_priceMin, $actual_priceMax) {
                    return $query->whereBetween('room_type.room_price', [$actual_priceMin, $actual_priceMax]);
                })
                ->when($number_guest, function ($query, $number_guest) {
                    return $query->where('room_type.room_guest', '=', $number_guest);
                })
                ->when($facilities, function ($query, $facilities) {
                    return $query->whereIn('facilities.facility_name', $facilities);
                })

                ->orderBy('room_type.room_price')
                ->groupBy('room_facilities.room_type_id')
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

    public function booking_registration($room_name)
    {
        $room_data = DB::table('room_type')
            ->where('room_type_name', '=', $room_name)
            ->get();

        $room_facilities = DB::table('room_facilities')
            ->join('room_type', 'room_type.room_type_id', '=', 'room_facilities.room_type_id')
            ->join('facilities', 'facilities.facility_id', '=', 'room_facilities.facility_id')
            ->where('room_type.room_type_name', '=', $room_name)
            ->get();

        return view('User_Page.booking_registration', ['room_data' => $room_data, 'room_facilities' => $room_facilities]);
    }

    public function booking_confirmation()
    {
        return view('User_Page.booking_confirmation');
    }

    public function updateServices(Request $request)
    {
        // Retrieve the selected services from the request
        $services = $request->input('services');

        // Iterate over the services and handle the logic
        foreach ($services as $service) {
            $serviceName = $service['service_name'];
            $servicePrice = $service['service_price'];
            $quantity = $service['quantity'];

            // Perform any logic you need with the service data
            // For example, save to the database, update totals, etc.
        }

        // Return a response to the AJAX request
        return response()->json(['success' => true, 'message' => 'Services updated successfully']);
    }

    public function booking_payment(Request $request)
    {
        $guest_firstName = $request->first_name;
        $guset_lastName = $request->last_name;
        $guest_email = $request->email;
        $guest_phoneNumber = $request->phone_number;
        $guest_country = $request->country;
        $guest_city = $request->city;
        $guest_specialRequest = $request->special_request;

        return view('User_Page.booking_payment');
    }

    public function hotel_restaurant()
    {
        return view('User_Page.restaurant');
    }

    public function exclusive_member()
    {
        return view('User_Page.member');
    }
}