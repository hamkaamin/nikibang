<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Validator;
use App\Model\Pemilik; 
use App\Model\Countries; 
use DB;

class PemilikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        session()->put('nama_menu_sidebar', 'menu_master_pemilik');
        $data_pemilik = Pemilik::all();
        if(Auth::user()->role_id !=1 && Auth::user()->role_id !=3){
            return redirect()->back();
        }
        else
        {
            return view('public_admin.pemilik.pemilik',compact('data_pemilik')); 
        }
    }


    public function modal_tambah()
    {
        $data_countries = Countries::all();
        return view('public_admin.pemilik.modal_tambah_pemilik',compact('data_countries'));
    }

    public function simpan_pemilik(Request $request)
    { 
        $pemilik = new Pemilik();
        $pemilik->nama = $request->get('nama'); 
        $pemilik->alamat = $request->get('alamat'); 
        $pemilik->countries_id = $request->get('countries_id'); 
        $pemilik->merek_id = $request->get('id'); 
        $pemilik->save();
    }

    public function modal_ubah(Request $request)
    { 
        $id = $request->id;
        $data_pemilik = Pemilik::find($id);  
        $data_countries = Countries::all(); 
        return view('public_admin.pemilik.modal_ubah_pemilik',compact('data_pemilik','data_countries'));
    }

    public function simpan_pemilik_ubah(Request $request,$id)
    {  
        $pemilik = Pemilik::find($id);
        $pemilik->nama = $request->get('nama'); 
        $pemilik->alamat = $request->get('alamat'); 
        $pemilik->countries_id = $request->get('countries_id'); 
        // $pemilik->keterangan = $request->get('keterangan'); 
        $pemilik->save();
        session()->put('status', 'Pemilik berhasil diubah!');  
        return redirect('/admin/pemilik');
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
        $pemilik = Pemilik::find($id);
        $pemilik->delete();
    }
}