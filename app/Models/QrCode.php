<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QrCode extends Model
{
    protected $fillable = ['wx_group_id', 'name', 'pic_url', 'views', 'sort'];

    public function wx()
    {
        return $this->belongsTo('App\Models\WxGroup');
    }
}
