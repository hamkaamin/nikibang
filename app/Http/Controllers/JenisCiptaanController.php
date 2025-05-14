<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Validator;
use App\Model\Jenis_ciptaan; 
use App\Model\Countries; 
use DB;

class JenisCiptaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        session()->put('nama_menu_sidebar', 'menu_master_jenis_ciptaan');
        $data_jenis_ciptaan = Jenis_ciptaan::all();
        return view('public_admin.jenis_ciptaan.jenis_ciptaan',compact('data_jenis_ciptaan')); 
    }
    public function modal_tambah()
    { 
        return view('public_admin.jenis_ciptaan.modal_tambah_jenis_ciptaan');
    }

    public function simpan_jenis_ciptaan(Request $request)
    { 
        $jenis_ciptaan = new Jenis_ciptaan();
        $jenis_ciptaan->kode = $request->get('kode'); 
        $jenis_ciptaan->keterangan = $request->get('keterangan'); 
        $jenis_ciptaan->cipta_id = $request->get('id');  
        $jenis_ciptaan->save(); 
    }

    public function modal_ubah(Request $request)
    { 
        $id = $request->id;
        $data_jenis_ciptaan = Jenis_ciptaan::find($id);   
        return view('public_admin.jenis_ciptaan.modal_ubah_jenis_ciptaan',compact('data_jenis_ciptaan'));
    }

    public function simpan_jenis_ciptaan_ubah(Request $request,$id)
    {  
        $jenis_ciptaan = Jenis_ciptaan::find($id);
        $jenis_ciptaan->kode = $request->get('kode'); 
        $jenis_ciptaan->keterangan = $request->get('keterangan');  
        // $jenis_ciptaan->keterangan = $request->get('keterangan'); 
        $jenis_ciptaan->save();
        session()->put('status', 'Jenis Ciptaan berhasil diubah!');  
        return redirect('/admin/jenis_ciptaan');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jenis_ciptaan = Jenis_ciptaan::find($id);
        $jenis_ciptaan->delete(); 
    }
}
