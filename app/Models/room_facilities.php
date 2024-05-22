<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class room_facilities extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_type_id',
        'facility_id',
    ];
}
