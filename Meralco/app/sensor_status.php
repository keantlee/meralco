<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sensor_status extends Model
{
    protected $fillable = ['id', 'name', 'status_limiter'];

    public function status()
    {
        return hasMany('\App\sensor_datalog');
    }

    public function ip_stat()
    {
        return hasOne('\App\ip_address_site');
    }
}
