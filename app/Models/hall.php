<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hall extends Model
{
    use HasFactory;

    protected $table = "hall";

    protected $fillable = [
        'hall_id',
        'hall_name',
        'hall_description',
        'hall_price',
        'hall_seat',
        'availability_status',
    ];
}
