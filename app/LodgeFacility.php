<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LodgeFacility extends Model
{
    //
    protected $table='lodge_facilities';
    protected $fillable=[
        'facility',
        'status',
        'lodge_id'

    ];
}
