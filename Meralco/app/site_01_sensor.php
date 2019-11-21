<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class site_01_sensor extends Model
{
    protected $table = ['site_01_sensor'];
    
    protected $fillable = ['ip_address', 'temperature', 'light', 'battery', 'EC', 'PH', 'water_level', 'status_id'];
}
