<?php

namespace App\Http\Controllers;

use App\Models\WxGroup;
use App\Models\QrCode;
use Illuminate\Http\Request;

class WxGroupController extends Controller
{
    public function index($cid, WxGroup $wxGroup, QrCode $qrCode)
    {
        print_r($cid);
        $data = $wxGroup->where('cid', $cid)->first();
        $info = $qrCode->where('wx_group_id', $data['id'])->where('view', '<', '2')->first();
        if (! $info) {
            $info = $qrCode->where('wx_group_id', $data['id'])->first()->toArray();
        }
        $qrCode->where('id', $info['id'])->increment('view');

        return view('wx.index', compact('info'));
    }
}
