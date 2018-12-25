<?php

namespace App\Http\Controllers;

use App\Models\QrCode;
use App\Models\WxGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminWxGroupController extends Controller
{
    /**
     * @param                     $id
     * @param \App\Models\WxGroup $wxGroup
     * @param \App\Models\QrCode  $qrCode
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index($id, WxGroup $wxGroup, QrCode $qrCode)
    {
        $data = $wxGroup->where('id', $id)->first();
        $qrcode = $qrCode->where('wx_group_id', $id)->orderby('sort', 'desc')->with('wx')->get()->toArray();

        return view('admin_wx_group.index', compact('data', 'qrcode'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param                          $id
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\WxGroup      $wxGroup
     * @param \App\Models\QrCode       $qrCode
     * @return \Illuminate\Http\Response
     */
    public function create($id, Request $request, WxGroup $wxGroup, QrCode $qrCode)
    {
        if ($request->method() == 'GET') {
            $data = $wxGroup->where('id', $id)->first();

            return view('admin_wx_group.add', compact('id', 'data'));
        } else {
            $info = $request->all();
            $path = $request->file('pic_url')->store('uploads');
            $data = [
                'wx_group_id' => $id,
                'name' => $info['name'],
                'pic_url' => $path,
                'sort' => $info['sort'],
                'view' => $info['view'],
            ];
            $res = $qrCode->create($data);
            if ($res) {
                return redirect(route('admin_wx_group.index', ['id' => $id]));
            }
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int               $id
     * @param \App\Models\QrCode $qrCode
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, QrCode $qrCode)
    {
        $info = $qrCode->where('id', $id)->first();
        $res = $qrCode->destroy($id);
        if ($res) {
            return redirect(route('admin_wx_group.index', ['id' => $info['wx_group_id']]));
        }
    }
}
