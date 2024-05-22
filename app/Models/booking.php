<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'booking_id',
        'customer_id',
        'room_id',
        'check_in_date',
        'check_out_date',
        'total_price',
        'booking_status',
    ];
}
