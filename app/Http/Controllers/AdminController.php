<?php

namespace App\Http\Controllers;

use App\Models\QrCode;
use App\Models\WxGroup;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(WxGroup $wxGroup)
    {
        $data = $wxGroup->all();

        return view('admin.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, WxGroup $wxGroup)
    {
        $data = [
            'name' => $request->get('name'),
            'cid' => $request->get('cid'),
            'desc' => $request->get('desc'),
        ];
        $res = $wxGroup->create($data);
        if ($res) {
            return redirect(route('admin.add.index'));
        }
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int                      $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id, WxGroup $wxGroup)
    {
        $res = $wxGroup->destroy($id);
        if ($res) {
            return redirect(route('admin.add.index'));
        }
    }
}
