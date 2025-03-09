<?php

namespace App\Http\Controllers;

use App\Models\facilities;
use App\Models\room_facilities;
use App\Models\room_type;
use DB;
use Illuminate\Http\Request;

class Admin_Controller extends Controller
{
    public function dashboard()
    {
        return view('Admin_Page.dashboard');
    }

    public function room_setting()
    {
        $room_data = DB::table('room_type')
            ->orderBy('room_price')
            ->paginate(4);

        $room_info = DB::table('rooms')
            ->join('room_type', 'room_type.room_type_id', '=', 'rooms.room_type_id')
            ->select('room_type.room_type_name', 'rooms.availability_status')
            ->orderBy('room_type.room_price')
            ->get();

        $room_facilities = room_facilities::select('*')
            ->join('room_type', 'room_type.room_type_id', '=', 'room_facilities.room_type_id')
            ->join('facilities', 'facilities.facility_id', '=', 'room_facilities.facility_id')
            ->get();

        $list_room_facilities = DB::table("facilities")
            ->get();

        return view(
            'Admin_Page.room_setting',
            [
                'room_data' => $room_data,
                'room_info' => $room_info,
                'room_facilities' => $room_facilities,
                'list_room_facilities' => $list_room_facilities,
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

            $room_facilities = room_facilities::select('*')
                ->join('room_type', 'room_type.room_type_id', '=', 'room_facilities.room_type_id')
                ->join('facilities', 'facilities.facility_id', '=', 'room_facilities.facility_id')
                ->get();

            return response()->json(['room_data' => $room_data, 'room_info' => $room_info, 'room_facilities' => $room_facilities]);
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

    public function add_newFacilities(Request $request)
    {
        $facility_id = $request->facility_id;
        $facility_name = $request->facility_name;

        facilities::create([
            "facility_id" => $facility_id,
            'facility_name' => $facility_name,
        ]);

        return redirect()->route('room-setting')->with("success_newFacilities", 'New Facilities Added Successfully');
    }

    public function update_roomData(Request $request)
    {
        $room_name = $request->room_name;
        $room_price = $request->room_price;
        $room_capacity = $request->room_capacity;
        $room_description = $request->room_description;
        $room_facility = $request->facilities;

        // $new_roomData = room_type::where("room_type", $room_name);

        // $new_roomData->sync($room_name, $room_price, $room_capacity, $room_description, $room_capacity);

        return redirect()->route('room-setting')->with("success_updateRoom", "Room Updated Successfully");
    }
}