<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class guest_services extends Model
{
    use HasFactory;

    protected $fillable = [
        'guest_id',
        'services_name',
        'quantity',
        'price',
        'total_price',
    ];
}
