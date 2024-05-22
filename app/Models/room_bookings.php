<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class room_bookings extends Model
{
    use HasFactory;

    protected $fillable = [
        'booking_id',
        'customer_id',
        'room_id',
        'check_in_date',
        'check_out_date',
        'room_amount',
        'total_price',
        'booking_status',
    ];
}
