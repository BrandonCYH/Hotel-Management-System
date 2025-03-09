<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class guest_info extends Model
{
    use HasFactory;

    protected $table ="guest_info";
    protected $fillable = [
        'guest_id',
        'guest_name',
        'guest_email',
        'guest_phoneNumber',
        'guest_country',
        'guest_city',
        'guest_specialRequest',
    ];
}
