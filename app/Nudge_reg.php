<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nudge_reg extends Model
{
    protected $fillable = [
        'fname', 'lname', 'jpos', 'email', 'workphone', 'address1', 'address2',
        'postcode', 'city', 'country', 'licnum', 'years', 'ordercost'
    ];
}
