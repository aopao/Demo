<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WxGroup extends Model
{
    protected $fillable = ['name', 'cid', 'desc'];
}
