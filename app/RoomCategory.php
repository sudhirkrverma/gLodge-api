<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomCategory extends Model
{
    //
    protected $table='room_categories';
    protected $fillable=[
        'room_type',
        'lodge_id',
        'image',
        'status',
        'price',
    ];
}
