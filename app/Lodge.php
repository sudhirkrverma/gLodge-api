<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lodge extends Model
{
    //
    protected $table='lodges';
    protected $fillable=[
        'lodge_name',
        'owner_name',
        'owner_contact',
        'receptionist_contact',
        'description',
        'lodge_img',
        'img1',
        'img2',
        'img3',
        'username',
        'password',
        'status',
        'address'
    ];
}
