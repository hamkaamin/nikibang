<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Validator;
use App\Model\Prioritas_desain; 
use DB;

class PrioritasDesainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         session()->put('nama_menu_sidebar', 'menu_master_prioritas_desain');
        $data_prioritas_desain = Prioritas_desain::all();

        if(Auth::user()->role_id !=1 && Auth::user()->role_id !=3){
            return redirect()->back();
        }
        else
        {
        return view('public_admin.prioritas_desain.prioritas_desain',compact('data_prioritas_desain'));
        } 
    }
    public function modal_tambah()
    {
        return view('public_admin.prioritas_desain.modal_tambah_prioritas_desain');
    }

    public function simpan_prioritas_desain(Request $request)
    { 
        $prioritas_desain = new Prioritas_desain();
        $prioritas_desain->nomor = $request->get('nomor'); 
        $prioritas_desain->tanggal = $request->get('tanggal'); 
        $prioritas_desain->countries_id = $request->get('countries_id'); 
        $prioritas_desain->desain_id = $request->get('id'); 
        $prioritas_desain->save(); 
    }

    public function modal_ubah(Request $request)
    { 
        $id = $request->id;
        $data_prioritas_desain = Prioritas_desain::find($id);   
        return view('public_admin.prioritas_desain.modal_ubah_prioritas_desain',compact('data_prioritas_desain'));
    }

    public function simpan_prioritas_desain_ubah(Request $request,$id)
    {  
        $prioritas_desain = Prioritas_desain::find($id);
        $prioritas_desain->nomor = $request->get('nomor'); 
        $prioritas_desain->tanggal = $request->get('tanggal'); 
        $prioritas_desain->countries_id = $request->get('countries_id'); 
        // $prioritas_desain->keterangan = $request->get('keterangan'); 
        $prioritas_desain->save();
        session()->put('status', 'Prioritas (Desain) berhasil diubah!');  
        return redirect('/admin/prioritas_desain');
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
        $prioritas_desain = Prioritas_desain::find($id);
        $prioritas_desain->delete(); 
    }
}