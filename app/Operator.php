<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operator extends Model
{
    
    protected $table = 'operators';

    protected $primaryKey = 'operatorid';

    public $timestamps = false;

    protected $fillable = [
        'userid','stationid',
    ];
    
}
