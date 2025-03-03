<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hall extends Model
{
    use HasFactory;

    protected $fillable = [
        'hall_id',
        'hall_name',
        'hall_description',
        'availability_status',
    ];
}
