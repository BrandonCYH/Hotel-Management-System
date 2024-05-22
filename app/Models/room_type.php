<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class room_type extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_type_id',
        'room_type_name',
        'price_per_night',
        'facility_id',
        'guest',
        'offer',
    ];
}
