<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;

class PenyewaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alat = order::all();
        return view('pesanan.tmp', compact('alat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $alat = new order;
        return view('pesanan.create', compact('alat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $alat = new order;
        $alat->name = $request->name;
        $alat->number = $request->number;
        $alat->months_id = $request->months_id;
        $alat->heavyequipmenttypes_id = $request->heavyequipmenttypes_id;
        $alat->price = $request->price;
        $alat->save();

        return redirect('pesanan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alat = order::find($id);
        return view('pesanan.edit', compact('alat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $alat = order::find($id);
        $alat->name = $request->name;
        $alat->number = $request->number;
        $alat->months_id = $request->months_id;
        $alat->heavyequipmenttypes_id = $request->heavyequipmenttypes_id;
        $alat->price = $request->price;
        $alat->save();

        return redirect('pesanan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alat = order::find($id);
        $alat->delete();
        return redirect('pesanan');
    }
}
