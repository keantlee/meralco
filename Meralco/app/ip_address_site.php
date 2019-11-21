<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ip_address_site extends Model
{
    protected $table = ['ip_address_site'];

    protected $fillable = ['id', 'ip_address', 'site_name'];
}
