<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //

    protected $table = 'orders';

    protected $primaryKey = 'orderid';

    public $timestamps = false;

    protected $fillable = [
        'orderid','userid','stationid','bikeid','orderdate','starttime','endtime','startingprice','endprice','status','endstationid',
    ];

    protected $hidden = [
        //'orderid',
    ];



}
