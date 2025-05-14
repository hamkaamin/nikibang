<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Validator;
use App\Model\Konsultan_merek; 
use App\Model\Countries; 
use DB;

class KonsultanMerekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        session()->put('nama_menu_sidebar', 'menu_master_konsultan_merek');
        $data_konsultan_merek = Konsultan_merek::all();
        return view('public_admin.konsultan_merek.konsultan_merek',compact('data_konsultan_merek'));
    }

    public function modal_tambah()
    {
        $data_countries = Countries::all();
        return view('public_admin.konsultan_merek.modal_tambah_konsultan_merek',compact('data_countries'));
    }

    public function simpan_konsultan_merek(Request $request)
    { 
        $konsultan_merek = new Konsultan_merek();
        $konsultan_merek->nama = $request->get('nama'); 
        $konsultan_merek->alamat = $request->get('alamat'); 
        $konsultan_merek->countries_id = $request->get('countries_id'); 
        $konsultan_merek->merek_id = $request->get('id'); 
        $konsultan_merek->save(); 
    }

    public function modal_ubah(Request $request)
    { 
        $id = $request->id;
        $data_konsultan_merek = Konsultan_merek::find($id);   
        $data_countries = Countries::all();
        return view('public_admin.konsultan_merek.modal_ubah_konsultan_merek',compact('data_konsultan_merek','data_countries'));
    }

    public function simpan_konsultan_merek_ubah(Request $request,$id)
    {  
        $konsultan_merek = Konsultan_merek::find($id);
        $konsultan_merek->nama = $request->get('nama'); 
        $konsultan_merek->alamat = $request->get('alamat'); 
        $konsultan_merek->countries_id = $request->get('countries_id'); 
        // $konsultan_merek->keterangan = $request->get('keterangan'); 
        $konsultan_merek->save();
        session()->put('status', 'Konsultan Merek berhasil diubah!');  
        return redirect('/admin/konsultan_merek');
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
        $konsultan_merek = Konsultan_merek::find($id);
        $konsultan_merek->delete(); 
    }
}
