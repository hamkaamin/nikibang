<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Validator;
use App\Model\Konsultan_paten; 
use App\Model\Countries; 
use DB;

class KonsultanPatenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        session()->put('nama_menu_sidebar', 'menu_master_konsultan_paten');
        $data_konsultan_paten = Konsultan_paten::all();
        return view('public_admin.konsultan_paten.konsultan_paten',compact('data_konsultan_paten'));
    }
    public function modal_tambah()
    {
        $data_countries = Countries::all();
        return view('public_admin.konsultan_paten.modal_tambah_konsultan_paten',compact('data_countries'));
    }

    public function simpan_konsultan_paten(Request $request)
    { 
        $konsultan_paten = new Konsultan_paten();
        $konsultan_paten->nama = $request->get('nama'); 
        $konsultan_paten->alamat = $request->get('alamat'); 
        $konsultan_paten->countries_id = $request->get('countries_id');
        $konsultan_paten->paten_id = $request->get('id'); 
        $konsultan_paten->save();
        session()->put('status', 'Data berhasil Ditambahkan!'); 
    }

    public function modal_ubah(Request $request)
    { 
        $id = $request->id;
        $data_konsultan_paten = Konsultan_paten::find($id);   
        $data_countries = Countries::all();
        return view('public_admin.konsultan_paten.modal_ubah_konsultan_paten',compact('data_konsultan_paten','data_countries'));
    }

    public function simpan_konsultan_paten_ubah(Request $request,$id)
    {  
        $konsultan_paten = Konsultan_paten::find($id);
        $konsultan_paten->nama = $request->get('nama'); 
        $konsultan_paten->alamat = $request->get('alamat'); 
        $konsultan_paten->countries_id = $request->get('countries_id'); 
        // $konsultan_paten->keterangan = $request->get('keterangan'); 
        $konsultan_paten->save();
        session()->put('status', 'Konsultan Paten berhasil diubah!');  
        return redirect('/admin/konsultan_paten');
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
        $konsultan_paten = Konsultan_paten::find($id);
        $konsultan_paten->delete();
        return redirect('/admin/konsultan_paten');
    }
}
