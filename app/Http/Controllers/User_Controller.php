<?php

namespace App\Http\Controllers;

use DB;
use Carbon\Carbon;
use Session;
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

    public function booking_registration(Request $request, $room_name)
    {
        $checkInDate = $request->checkIn_date;
        $checkOutDate = $request->checkOut_date;

        $room_data = DB::table('room_type')
            ->where('room_type_name', '=', $room_name)
            ->get();

        $room_facilities = DB::table('room_facilities')
            ->join('room_type', 'room_type.room_type_id', '=', 'room_facilities.room_type_id')
            ->join('facilities', 'facilities.facility_id', '=', 'room_facilities.facility_id')
            ->where('room_type.room_type_name', '=', $room_name)
            ->get();

        return view('User_Page.booking_registration', ['room_data' => $room_data, 'room_facilities' => $room_facilities, 'checkIn_date' => $checkInDate, 'checkOut_date' => $checkOutDate]);
    }

    public function booking_confirmation()
    {
        return view('User_Page.booking_confirmation');
    }

    private function generateGuestInfoID()
    {
        $prefix = "GUEST"; // Prefix for guest info
        $randomNumber = mt_rand(10000, 99999); // Random 5-digit number

        return $prefix . $randomNumber;
    }

    private function generateBookingID()
    {
        $prefix = "BKG"; // Prefix for booking
        $randomNumber = mt_rand(10000, 99999); // Random 5-digit number

        return $prefix . $randomNumber;
    }

    public function booking_payment(Request $request, $room_type_name, $checkInDate, $checkOutDate)
    {
        try {
            $totalServicesPrice = 0; // Initialize total service price
            $target_roomPrice = 0;

            $formatted_checkInDate = Carbon::createFromFormat('j F, Y', $checkInDate)->format('Y-m-d');
            $formatted_checkOutDate = Carbon::createFromFormat('j F, Y', $checkOutDate)->format('Y-m-d');

            // Check if the booking ID already exists in the session
            if (Session::has('booking_id') && Session::has('guest_id')) {
                $booking_id = Session::get('booking_id');
                $guest_id = Session::get('guest_id');
                $target_roomID = Session::get('room_id');
                $target_roomPrice = Session::get('room_price');
            } else {
                $booking_id = $this->generateBookingID();
                $guest_id = $this->generateGuestInfoID();

                $random_roomID = DB::table("rooms")
                    ->join("room_type", 'room_type.room_type_id', '=', 'rooms.room_type_id')
                    ->select('rooms.room_id', 'room_type.room_price')
                    ->where('room_type.room_type_name', '=', $room_type_name)
                    ->where('rooms.availability_status', '!=', "Not Available")
                    ->inRandomOrder()
                    ->first();

                if ($random_roomID) {
                    $target_roomID = $random_roomID->room_id;  // Use -> instead of []
                    $target_roomPrice = $random_roomID->room_price;

                    Session::put('booking_id', $booking_id);
                    Session::put('guest_id', $guest_id);
                    Session::put('room_id', $target_roomID);
                    Session::put('room_price', $target_roomPrice);
                }
            }

            $guest_firstName = $request->first_name;
            $guest_lastName = $request->last_name;

            $guest_fullName = $guest_firstName . ' ' . $guest_lastName;
            $guest_email = $request->email;
            $guest_phoneNumber = $request->phone_number;
            $guest_country = $request->country;
            $guest_city = $request->city;
            $guest_specialRequest = $request->special_request;
            $guest_requestServices = $request->services;

            DB::table('guest_info')
                ->updateOrInsert(
                    [
                        "guest_id" => $guest_id
                    ],
                    [
                        "guest_name" => $guest_fullName,
                        "guest_email" => $guest_email,
                        "guest_phoneNumber" => $guest_phoneNumber,
                        "guest_country" => $guest_country,
                        "guest_city" => $guest_city,
                        "guest_specialRequest" => $guest_specialRequest,
                    ]
                );

            foreach ($guest_requestServices as $serviceName => $serviceDetails) {
                $services_quantity = $serviceDetails['quantity']; // Get quantity
                $services_price = $serviceDetails['price']; // Get price

                if ($services_quantity > 0) {
                    $serviceTotal = $services_quantity * $services_price; // Calculate total for this service
                    $totalServicesPrice += $serviceTotal; // Add to total services price

                    DB::table('guest_services')->updateOrInsert(
                        [
                            'guest_id' => $guest_id, // Store guest ID
                            'services_name' => $serviceName, // Store service name
                        ],
                        [
                            'quantity' => $services_quantity, // Store quantity
                            'price' => $services_price, // Store price per unit
                            'total_price' => $serviceTotal, // Store total price
                        ]
                    );
                }
            }

            $totalBookingPrice = floatval($target_roomPrice) + floatval($totalServicesPrice);

            DB::table('room_booking')
                ->updateOrInsert(
                    [
                        'booking_id' => $booking_id,
                    ],
                    [
                        'guest_id' => $guest_id,
                        'room_id' => $target_roomID,
                        'check_in_date' => $formatted_checkInDate,
                        'check_out_date' => $formatted_checkOutDate,
                        'total_price' => $totalBookingPrice,
                        'booking_status' => "Pending",
                    ]
                );

            DB::table("rooms")
                ->where("room_id", '=', $target_roomID)
                ->update(['availability_status' => 'Not Available']);

            $guest_bookingInfo = DB::table("room_booking")
                ->join("guest_info", 'guest_info.guest_id', '=', 'room_booking.guest_id')
                ->where("room_booking.guest_id", '=', $guest_id)
                ->where("guest_info.guest_id", '=', $guest_id)
                ->get();

            $guest_servicesInfo = DB::table("guest_services")
                ->where("guest_id", $guest_id)
                ->get();

            $guest_roomInfo = DB::table("room_booking")
                ->join("rooms", 'rooms.room_id', '=', 'room_booking.room_id')
                ->get();

            // dump($guest_roomInfo);

            return view(
                'User_Page.booking_payment',
                [
                    'room_type_name' => $room_type_name,
                    'guest_bookingInfo' => $guest_bookingInfo,
                    'guest_servicesInfo' => $guest_servicesInfo
                ]
            );
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Booking Failed: ' . $e->getMessage());
        }
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