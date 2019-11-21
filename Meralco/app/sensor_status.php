<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sensor_status extends Model
{
    protected $table = ['sensor_status'];

    protected $fillable = ['id', 'name'];
}
