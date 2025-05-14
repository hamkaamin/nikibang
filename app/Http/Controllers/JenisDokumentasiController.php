<?php

namespace App\Http\Controllers;

use App\JenisDokumentasi;
use Illuminate\Http\Request;

class JenisDokumentasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jenis_dokumentasi = JenisDokumentasi::all();
        if(Auth::user()->role_id !=1 && Auth::user()->role_id !=3){
            return redirect()->back();
        }
        else
        {
            return view('public_admin.jenis_dokumentasi.index',compact('jenis_dokumentasi'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('public_admin.jenis_dokumentasi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jenis_dokumentasi = new JenisDokumentasi();
        $jenis_dokumentasi->nama = $request->nama;
        $jenis_dokumentasi->save();
        session()->put('status', 'Jenis berhasil ditambahkan!');  
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\JenisDokumentasi  $jenisDokumentasi
     * @return \Illuminate\Http\Response
     */
    public function show(JenisDokumentasi $jenisDokumentasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\JenisDokumentasi  $jenisDokumentasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $id = $request->id;
        $data_jenis_dokumentasi = JenisDokumentasi::find($id);
        return view('public_admin.jenis_dokumentasi.edit',compact('data_jenis_dokumentasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\JenisDokumentasi  $jenisDokumentasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $jenis_dokumentasi = JenisDokumentasi::find($id);
        $jenis_dokumentasi->nama = $request->nama;
        $jenis_dokumentasi->save();
        session()->put('status', 'Jenis Dokumentasi berhasil diubah!');  
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\JenisDokumentasi  $jenisDokumentasi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jenis_dokumentasi = JenisDokumentasi::find($id);
        $jenis_dokumentasi->delete();
        return redirect()->back();
    }
}