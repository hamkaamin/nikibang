<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Validator;
use App\Model\Pemegang_paten; 
use App\Model\Countries; 
use DB;

class PemegangPatenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        session()->put('nama_menu_sidebar', 'menu_master_pemegang_paten');
        $data_pemegang_paten = Pemegang_paten::all();
        return view('public_admin.pemegang_paten.pemegang_paten',compact('data_pemegang_paten')); 
    }
    public function modal_tambah()
    {
        $data_countries = Countries::all();
        return view('public_admin.pemegang_paten.modal_tambah_pemegang_paten',compact('data_countries'));
    }

    public function simpan_pemegang_paten(Request $request)
    { 
        $pemegang_paten = new Pemegang_paten();
        $pemegang_paten->nama = $request->get('nama'); 
        $pemegang_paten->alamat = $request->get('alamat'); 
        $pemegang_paten->countries_id = $request->get('countries_id'); 
        $pemegang_paten->paten_id = $request->get('id'); 
        $pemegang_paten->save();
        session()->put('status', 'Data berhasil Ditambahkan!'); 
    }

    public function modal_ubah(Request $request)
    { 
        $id = $request->id;
        $data_pemegang_paten = Pemegang_paten::find($id);   
        $data_countries = Countries::all();
        return view('public_admin.pemegang_paten.modal_ubah_pemegang_paten',compact('data_pemegang_paten','data_countries'));
    }

    public function simpan_pemegang_paten_ubah(Request $request,$id)
    {  
        $pemegang_paten = Pemegang_paten::find($id);
        $pemegang_paten->nama = $request->get('nama'); 
        $pemegang_paten->alamat = $request->get('alamat'); 
        $pemegang_paten->countries_id = $request->get('countries_id'); 
        // $pemegang_paten->keterangan = $request->get('keterangan'); 
        $pemegang_paten->save();
        session()->put('status', 'Pemegang Paten berhasil diubah!');  
        return redirect('/admin/pemegang_paten');
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
        //
        $pemegang_paten = Pemegang_paten::find($id);
        $pemegang_paten->delete();
        return redirect('/admin/pemegang_paten');
    }
}
