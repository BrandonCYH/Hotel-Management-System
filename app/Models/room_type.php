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
        'room_price',
        'room_description',
        'room_guest',
        'room_bed',
        'room_size',
        'deposit',
    ];
}
