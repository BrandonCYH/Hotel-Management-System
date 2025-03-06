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
        $room_data = DB::table('room_type')
            ->orderBy('room_price')
            ->paginate(4);

        $room_info = DB::table('rooms')
            ->join('room_type', 'room_type.room_type_id', '=', 'rooms.room_type_id')
            ->select('room_type.room_type_name', 'rooms.availability_status')
            ->orderBy('room_type.room_price')
            ->get();

        $room_facilities = DB::table("facilities")
            ->get();

        return view(
            'Admin_Page.add_room',
            [
                'room_data' => $room_data,
                'room_info' => $room_info,
                'room_facilities' => $room_facilities,
            ]
        );
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

    public function getHotelData(Request $request, $roomName)
    {
        if ($request->ajax()) {
            $room_data = DB::table('room_type')
                ->where("room_type_name", '=', $roomName)
                ->get();

            $room_facilities = DB::table('room_facilities')
                ->join('room_type', 'room_type.room_type_id', '=', 'room_facilities.room_type_id')
                ->join('facilities', 'facilities.facility_id', '=', 'room_facilities.facility_id')
                ->where('room_type.room_type_name', '=', $roomName)
                ->get();

            $list_room_facilities = DB::table("facilities")
                ->get();

            return response()->json(
                [
                    'room_data' => $room_data,
                    'room_facilities' => $room_facilities,
                    'list_room_facilities' => $list_room_facilities
                ]
            );
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
}