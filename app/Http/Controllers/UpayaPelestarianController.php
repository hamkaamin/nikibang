<?php

namespace App\Http\Controllers;

use App\UpayaPelestarian;
use Illuminate\Http\Request;

class UpayaPelestarianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $upaya_pelestarian = UpayaPelestarian::all();
        return view('public_admin.upaya_pelestarian.index',compact('upaya_pelestarian'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('public_admin.upaya_pelestarian.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $upaya_pelestarian = new UpayaPelestarian();
        $upaya_pelestarian->nama = $request->nama;
        $upaya_pelestarian->save();
        session()->put('status', 'Upaya Pelestarian berhasil ditambahkan!');  
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UpayaPelestarian  $jenisDokumentasi
     * @return \Illuminate\Http\Response
     */
    public function show(UpayaPelestarian $jenisDokumentasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UpayaPelestarian  $jenisDokumentasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $id = $request->id;
        $data_upaya_pelestarian = UpayaPelestarian::find($id);
        return view('public_admin.upaya_pelestarian.edit',compact('data_upaya_pelestarian'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UpayaPelestarian  $jenisDokumentasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $upaya_pelestarian = UpayaPelestarian::find($id);
        $upaya_pelestarian->nama = $request->nama;
        $upaya_pelestarian->save();
        session()->put('status', 'Upaya Pelestarian berhasil diubah!');  
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UpayaPelestarian  $jenisDokumentasi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $upaya_pelestarian = UpayaPelestarian::find($id);
        $upaya_pelestarian->delete();
        return redirect()->back();
    }
}