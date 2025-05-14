<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use Auth;
use Illuminate\Support\Facades\Validator;
use App\Model\Kelas_locarno; 
use App\Model\Countries; 
use DB;
class KelasLocarnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        session()->put('nama_menu_sidebar', 'menu_master_kelas_locarno');
        $data_kelas_locarno = Kelas_locarno::all();
        return view('public_admin.kelas_locarno.kelas_locarno',compact('data_kelas_locarno')); 
    }

    public function modal_tambah()
    { 
        return view('public_admin.kelas_locarno.modal_tambah_kelas_locarno');
    }

    public function simpan_kelas_locarno(Request $request)
    { 
        $kelas_locarno = new Kelas_locarno();
        $kelas_locarno->kode = $request->get('kode'); 
        $kelas_locarno->keterangan = $request->get('keterangan'); 
        $kelas_locarno->desain_id = $request->get('id');  
        $kelas_locarno->save(); 
    }

    public function modal_ubah(Request $request)
    { 
        $id = $request->id;
        $data_kelas_locarno = Kelas_locarno::find($id);   
        return view('public_admin.kelas_locarno.modal_ubah_kelas_locarno',compact('data_kelas_locarno'));
    }

    public function simpan_kelas_locarno_ubah(Request $request,$id)
    {  
        $kelas_locarno = Kelas_locarno::find($id);
        $kelas_locarno->kode = $request->get('kode'); 
        $kelas_locarno->keterangan = $request->get('keterangan');  
        // $kelas_locarno->keterangan = $request->get('keterangan'); 
        $kelas_locarno->save();
        session()->put('status', 'Kelas Locaro berhasil diubah!');  
        return redirect('/admin/kelas_locarno');
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
        $kelas_locarno = Kelas_locarno::find($id);
        $kelas_locarno->delete(); 
    }
}
