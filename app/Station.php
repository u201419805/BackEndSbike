<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    //

    protected $table = 'stations';

    protected $primaryKey = 'stationid';

    public $timestamps = false;

    protected $fillable = [
        'stationid','name', 'address', 'capacity', 'urlimage',
    ];

    protected $hidden = [
        //'stationid',
    ];


}
