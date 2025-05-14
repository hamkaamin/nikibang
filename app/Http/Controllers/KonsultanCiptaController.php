<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Validator;
use App\Model\Konsultan_cipta; 
use App\Model\Countries; 
use DB;


class KonsultanCiptaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        session()->put('nama_menu_sidebar', 'menu_master_konsultan_cipta');
        $data_konsultan_cipta = Konsultan_cipta::all();
        return view('public_admin.konsultan_cipta.konsultan_cipta',compact('data_konsultan_cipta'));
    }
    public function modal_tambah()
    {
        $data_countries = Countries::all();
        return view('public_admin.konsultan_cipta.modal_tambah_konsultan_cipta',compact('data_countries'));
    }

    public function simpan_konsultan_cipta(Request $request)
    { 
        $konsultan_cipta = new Konsultan_cipta();
        $konsultan_cipta->nama = $request->get('nama'); 
        $konsultan_cipta->alamat = $request->get('alamat'); 
        $konsultan_cipta->countries_id = $request->get('countries_id'); 
        $konsultan_cipta->cipta_id = $request->get('id'); 
        $konsultan_cipta->save(); 
    }

    public function modal_ubah(Request $request)
    { 
        $id = $request->id;
        $data_konsultan_cipta = Konsultan_cipta::find($id);   
        $data_countries = Countries::all();
        return view('public_admin.konsultan_cipta.modal_ubah_konsultan_cipta',compact('data_konsultan_cipta','data_countries'));
    }

    public function simpan_konsultan_cipta_ubah(Request $request,$id)
    {  
        $konsultan_cipta = Konsultan_cipta::find($id);
        $konsultan_cipta->nama = $request->get('nama'); 
        $konsultan_cipta->alamat = $request->get('alamat'); 
        $konsultan_cipta->countries_id = $request->get('countries_id'); 
        // $konsultan_cipta->keterangan = $request->get('keterangan'); 
        $konsultan_cipta->save();
        session()->put('status', 'Konsultan Cipta berhasil diubah!');  
        return redirect('/admin/konsultan_cipta');
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
        $konsultan_cipta = Konsultan_cipta::find($id);
        $konsultan_cipta->delete(); 
    }
}
