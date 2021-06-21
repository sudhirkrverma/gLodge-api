<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    //
    protected $table='rooms';
    protected $fillable=[
        'room_no',
        'room_type',
        'img1',
        'img2',
        'img3',
        'room_status',
        'lodge_id'
    ];
}
