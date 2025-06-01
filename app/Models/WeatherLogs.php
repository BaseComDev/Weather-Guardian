<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WeatherLogs extends Model
{
    protected $fillable = ['area_id','temperature', 'humidity', 'wind_speed', 'description'];
}
