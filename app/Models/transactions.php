<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transactions extends Model
{
    use HasFactory;

    protected $fillable = [
        'transaction_id',
        'booking_id',
        'transaction_date',
        'amount',
        'date_description'
    ];
}
