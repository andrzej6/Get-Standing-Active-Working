<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customers1 extends Model
{
    protected $connection = 'mysql2';
    protected $fillable = [
        'title', 'first_name', 'last_name', 'organization', 'jobposition','department','furiniture_supplier',
        'street','town','county','postcode','country','phone','email',
        'dietary', 'allergy', 'assistance', 'date_created', 'correspondence','details'
    ];
}