<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ip_address_site extends Model
{
    protected $fillable = ['id', 'ip_address', 'name', 'address', 'latitude', 'longitude'];

    public function ip_address_sites()
    {
        return $this->hasMany("\App\sensor_datalog");
    }
    public function ip_sensor_stat()
    {
        return $this->hasMany("\App\sensor_status");
    }
}
