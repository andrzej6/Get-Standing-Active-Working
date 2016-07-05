<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gbs_reg extends Model
{
    protected $fillable = [
        'regtitle', 'fname', 'lname', 'email', 'workphone', 'mobilephone', 'ename', 'address1', 'address2',
        'postcode', 'city', 'county', 'jpos', 'dep', 'behalf', 'fquest'
    ];
}
