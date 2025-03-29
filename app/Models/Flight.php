<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    protected $primarykey = 'flight_id';
    protected $table = 'my_flights';
    protected $connection = 'mysql';
}
