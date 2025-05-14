<?php

namespace App\Http\Controllers;

use App\JenisBarang;
use Illuminate\Http\Request;

class JenisBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jenis_barang = JenisBarang::all();
        if(Auth::user()->role_id !=1 && Auth::user()->role_id !=3){
            return redirect()->back();
        }
        else
        {
            return view('public_admin.jenis_barang.index',compact('jenis_barang'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('public_admin.jenis_barang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jenis_barang = new JenisBarang();
        $jenis_barang->nama = $request->nama;
        $jenis_barang->save();
        session()->put('status', 'Jenis berhasil ditambahkan!');  
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\JenisBarang  $jenisBarang
     * @return \Illuminate\Http\Response
     */
    public function show(JenisBarang $jenisBarang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\JenisBarang  $jenisBarang
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $id = $request->id;
        $data_jenis_barang = JenisBarang::find($id);
        return view('public_admin.jenis_barang.edit',compact('data_jenis_barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\JenisBarang  $jenisBarang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $jenis_barang = JenisBarang::find($id);
        $jenis_barang->nama = $request->nama;
        $jenis_barang->save();
        session()->put('status', 'Jenis Barang berhasil diubah!');  
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\JenisBarang  $jenisBarang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jenis_barang = JenisBarang::find($id);
        $jenis_barang->delete();
        return redirect()->back();
    }
}