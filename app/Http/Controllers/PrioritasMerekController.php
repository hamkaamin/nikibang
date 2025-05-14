<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Validator;
use App\Model\Prioritas_merek; 
use DB;

class PrioritasMerekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        session()->put('nama_menu_sidebar', 'menu_master_prioritas_merek');
        $data_prioritas_merek = Prioritas_merek::all();
        if(Auth::user()->role_id !=1 && Auth::user()->role_id !=3){
            return redirect()->back();
        }
        else
        {
        return view('public_admin.prioritas_merek.prioritas_merek',compact('data_prioritas_merek')); 
        }
    }

    public function modal_tambah()
    {
        return view('public_admin.prioritas_merek.modal_tambah_prioritas_merek');
    }

    public function simpan_prioritas_merek(Request $request)
    { 
        $prioritas_merek = new Prioritas_merek();
        $prioritas_merek->nomor = $request->get('nomor'); 
        $prioritas_merek->tanggal = $request->get('tanggal'); 
        $prioritas_merek->countries_id = $request->get('countries_id'); 
        $prioritas_merek->merek_id = $request->get('id'); 
        $prioritas_merek->save(); 
    }

    public function modal_ubah(Request $request)
    { 
        $id = $request->id;
        $data_prioritas_merek = Prioritas_merek::find($id);   
        return view('public_admin.prioritas_merek.modal_ubah_prioritas_merek',compact('data_prioritas_merek'));
    }

    public function simpan_prioritas_merek_ubah(Request $request,$id)
    {  
        $prioritas_merek = Prioritas_merek::find($id);
        $prioritas_merek->nomor = $request->get('nomor'); 
        $prioritas_merek->tanggal = $request->get('tanggal'); 
        $prioritas_merek->kewarganegaraan = $request->get('kewarganegaraan'); 
        // $prioritas_merek->keterangan = $request->get('keterangan'); 
        $prioritas_merek->save();
        session()->put('status', 'Prioritas (Merek) berhasil diubah!');  
        return redirect('/admin/prioritas_merek');
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
        $prioritas_merek = Prioritas_merek::find($id);
        $prioritas_merek->delete(); 
    }
}