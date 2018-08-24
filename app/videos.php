<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class videos extends Model
{
    protected $fillable = ['descripcion', 'url'];
    protected $table='videos';
}
