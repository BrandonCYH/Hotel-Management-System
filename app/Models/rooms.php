<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rooms extends Model
{
    use HasFactory;

    protected $table = "rooms";

    protected $fillable = [
        'room_id',
        'room_number',
        'room_type_id',
        'availability_status',
    ];
}
