<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'payment_id',
        'transaction_id',
        'payment_date',
        'payment_method',
        'amount_paid',
        'status'
    ];
}
