<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tips extends Model
{
    protected $fillable = ['message', 'trigger_temp'];
}
