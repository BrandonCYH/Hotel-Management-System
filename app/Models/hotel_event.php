<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hotel_event extends Model
{
    use HasFactory;

    public $table = 'hotel_event';
    protected $fillable = [
        'Promote_ID',
        'Photo',
        'Room_Type',
        'Original_Price',
        'Promotion',
        'Remaining',
    ];
}