<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Validator;
use App\Model\Prioritas_paten; 
use App\Model\PrioritasPatenData; 
use App\Model\Countries; 
use DB;

class PrioritasPatenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         session()->put('nama_menu_sidebar', 'menu_master_prioritas_paten');
        $data_prioritas_paten = Prioritas_paten::all();

        if(Auth::user()->role_id !=1 && Auth::user()->role_id !=3){
            return redirect()->back();
        }
        else
        {
        return view('public_admin.prioritas_paten.prioritas_paten',compact('data_prioritas_paten'));
        } 
    }
    public function modal_tambah()
    {
        $data_countries = Countries::all();
        return view('public_admin.prioritas_paten.modal_tambah_prioritas_paten',compact('data_countries'));
    }

    public function simpan_prioritas_paten(Request $request)
    { 
        // dd($request);
        $prioritas_paten = new PrioritasPatenData();
        $prioritas_paten->nomor_prioritas = $request->get('nomor'); 
        $prioritas_paten->tanggal_prioritas = $request->get('tanggal'); 
        $prioritas_paten->negara = $request->get('countries_id'); 
        $prioritas_paten->paten_id = $request->get('id'); 
        $prioritas_paten->save(); 
    }

    public function modal_ubah(Request $request)
    { 
        $id = $request->id;
        $data_countries = Countries::all(); 
        $data_prioritas_paten = Prioritas_paten::find($id);   
        return view('public_admin.prioritas_paten.modal_ubah_prioritas_paten',compact('data_prioritas_paten','data_countries'));
    }

    public function simpan_prioritas_paten_ubah(Request $request,$id)
    {  
        $prioritas_paten = Prioritas_paten::find($id);
        $prioritas_paten->nomor = $request->get('nomor'); 
        $prioritas_paten->tanggal = $request->get('tanggal'); 
        $prioritas_paten->countries_id = $request->get('countries_id'); 
        // $prioritas_paten->keterangan = $request->get('keterangan'); 
        $prioritas_paten->save();
        session()->put('status', 'Prioritas (Paten) berhasil diubah!');  
        return redirect('/admin/prioritas_paten');
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
        $prioritas_paten = PrioritasPatenData::find($id);
        $prioritas_paten->delete();
        return redirect('/admin/prioritas_paten');
    }
}