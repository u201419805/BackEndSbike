<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //

    protected $table = 'users';

    protected $primaryKey = 'userid';

    public $timestamps = false;

    protected $fillable = [
        'userid','email', 'password', 'fname', 'lname', 'address', 'phone', 'gender', 'photo', 'birthday', 'dni', 'usertype',
    ];

    protected $hidden = [
        //'userid','password',
    ];


}
