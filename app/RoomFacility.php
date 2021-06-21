<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomFacility extends Model
{
    //
    protected $table='room_facilities';
    protected $fillable=[
        'room_type',
        'toilet',
        'single_bed',
        'double_bed',
        'no_of_bed',
        'tv',
        'wifi',
        'geyser',
        'ac',
        'lodge_id'
    ];
}
