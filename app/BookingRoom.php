<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookingRoom extends Model
{
    //
    protected $table='booking_rooms';
    protected $fillable=[
        'order_id',
        'customer_id',
        'industry_type_id',
        'channel_id',
        'room_no',
        'room_type',
        'checkin',
        'checkout',
        'amount',
        'mobile',
        'lodge_name',
        'lodge_address',
        'lodge_id',
        'booked_by',
        'username',
        'age',
        'gender',
        'address',
        'no_of_guest',
        'txn_date',
        'gateway_name',
        'resp_code',
        'bank_name',
        'payment_mode',
        'MID',
        'txn_id',
        'banktxnid',
        'payment_status',
        'checksum'
    ];
}
