<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    //

    protected $fillable = [
        'logo',
        'sitetitle',
        'meta_des',
        'meta_key',
        'chat',
        'address',
        'phone',
        'email',
        'facebook',
        'twitter',
        'google',
        'line',
    ];
}
