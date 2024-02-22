<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class invoices extends Model
{
    use HasFactory;

    protected $fillable = [
        'invoices_id',
        'booking_id',
        'invoices_date',
        'total_amount',
        'due_date',
        'status'
    ];
}
