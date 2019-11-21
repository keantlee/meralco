<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sensor_datalog extends Model
{
    protected $table = ['sensor_datalog'];

    protected $fillable = ['id', 'ip_address_sites_id', 'temperature', 'light', 'battery', 'EC', 'PH', 'water_level', 'water_level', 'status_id'];
}
