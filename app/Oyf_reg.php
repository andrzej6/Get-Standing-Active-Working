<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oyf_reg extends Model
{
    protected $fillable = [
        'title', 'fname', 'lname', 'email', 'workphone', 'mobilephone', 'ename', 'address1', 'address2',
        'postcode', 'city', 'county', 'country', 'jpos', 'dep', 'behalf',
        'event_loc', 'workplace_size', 'workplace_extra', 'workplace_extra_size', 'hear_from', 'extras'
    ];
}
