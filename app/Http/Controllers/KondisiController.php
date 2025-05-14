<?php

namespace App\Http\Controllers;

use App\Kondisi;
use Illuminate\Http\Request;

class KondisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kondisi = Kondisi::all();
        if(Auth::user()->role_id !=1 && Auth::user()->role_id !=3){
            return redirect()->back();
        }
        else
        {
            return view('public_admin.kondisi.index',compact('kondisi'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('public_admin.kondisi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kondisi = new Kondisi();
        $kondisi->nama = $request->nama;
        $kondisi->save();
        session()->put('status', 'Kondisi berhasil ditambahkan!');  
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kondisi  $jenisDokumentasi
     * @return \Illuminate\Http\Response
     */
    public function show(Kondisi $jenisDokumentasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kondisi  $jenisDokumentasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $id = $request->id;
        $data_kondisi = Kondisi::find($id);
        return view('public_admin.kondisi.edit',compact('data_kondisi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kondisi  $jenisDokumentasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $kondisi = Kondisi::find($id);
        $kondisi->nama = $request->nama;
        $kondisi->save();
        session()->put('status', 'Kondisi berhasil diubah!');  
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kondisi  $jenisDokumentasi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kondisi = Kondisi::find($id);
        $kondisi->delete();
        return redirect()->back();
    }
}