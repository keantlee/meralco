<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sensor_datalog extends Model
{
    protected $fillable = ['id', 'ip_address_sites_id', 'temperature', 'light', 'battery', 'EC', 'PH', 'water_level', 'water_level', 'status_id'];

    public function datalog_ip()
    {
        return $this->belongsTo('\App\ip_address_site', 'ip_address_sites_id', 'id');
    }

    public function datalog_status()
    {
        return $this->belongsTo('App\sensor_status', 'status_id', 'id');
    }
}
