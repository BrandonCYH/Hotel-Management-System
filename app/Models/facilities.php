<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class facilities extends Model
{
    use HasFactory;

    protected $primaryKey = 'facility_id';

    protected $fillable = [
        'facility_id',
        'facility_name',
    ];

    public function rooms()
    {
        return $this->belongsToMany(room_type::class, 'room_facility', 'facility_id', 'room_type_id');
    }
}
