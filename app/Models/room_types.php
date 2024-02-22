<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class room_types extends Model
{
    use HasFactory;

    protected $fillable = [
        'type_id',
        'type_name',
        'description',
    ];
}
