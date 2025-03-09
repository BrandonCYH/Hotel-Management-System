<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hall_facilities extends Model
{
    use HasFactory;

    protected $fillable = [
        "hall_id",
        "facility_id",
    ];
}
