<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class room_booking extends Model
{
    use HasFactory;

    protected $table = "room_booking";
    protected $fillable = [
        'booking_id',
        'guest_id',
        'room_type_id',
        'room_id',
        'check_in_date',
        'check_out_date',
        'total_price',
        'booking_status',
    ];
}
