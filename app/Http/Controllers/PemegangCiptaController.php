<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Validator;
use App\Model\Pemegang_cipta; 
use App\Model\Countries; 
use DB;

class PemegangCiptaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        session()->put('nama_menu_sidebar', 'menu_master_pemegang_cipta');
        $data_pemegang_cipta = Pemegang_cipta::all();
        return view('public_admin.pemegang_cipta.pemegang_cipta',compact('data_pemegang_cipta')); 
    }
    public function modal_tambah()
    {
        $data_countries = Countries::all();
        return view('public_admin.pemegang_cipta.modal_tambah_pemegang_cipta',compact('data_countries'));
    }

    public function simpan_pemegang_cipta(Request $request)
    { 
        $pemegang_cipta = new Pemegang_cipta();
        $pemegang_cipta->nama = $request->get('nama'); 
        $pemegang_cipta->alamat = $request->get('alamat'); 
        $pemegang_cipta->countries_id = $request->get('countries_id'); 
        $pemegang_cipta->cipta_id = $request->get('id'); 
        $pemegang_cipta->save(); 
    }

    public function modal_ubah(Request $request)
    { 
        $id = $request->id;
        $data_countries = Countries::all();
        $data_pemegang_cipta = Pemegang_cipta::find($id);   
        return view('public_admin.pemegang_cipta.modal_ubah_pemegang_cipta',compact('data_pemegang_cipta','data_countries'));
    }

    public function simpan_pemegang_cipta_ubah(Request $request,$id)
    {  
        $pemegang_cipta = Pemegang_cipta::find($id);
        $pemegang_cipta->nama = $request->get('nama'); 
        $pemegang_cipta->alamat = $request->get('alamat'); 
        $pemegang_cipta->countries_id = $request->get('countries_id'); 
        // $pemegang_cipta->keterangan = $request->get('keterangan'); 
        $pemegang_cipta->save();
        session()->put('status', 'Pemegang Cipta berhasil diubah!');  
        return redirect('/admin/pemegang_cipta');
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
        $pemegang_cipta = Pemegang_cipta::find($id);
        $pemegang_cipta->delete(); 
    }
}
