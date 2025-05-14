<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Validator;
use App\Model\Konsultan_desain; 
use App\Model\Countries; 
use DB;

class KonsultanDesainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        session()->put('nama_menu_sidebar', 'menu_master_konsultan_desain');
        $data_konsultan_desain = Konsultan_desain::all();
        return view('public_admin.konsultan_desain.konsultan_desain',compact('data_konsultan_desain'));
    }

    public function modal_tambah()
    {
        $data_countries = Countries::all();
        return view('public_admin.konsultan_desain.modal_tambah_konsultan_desain',compact('data_countries'));
    }

    public function simpan_konsultan_desain(Request $request)
    { 
        $konsultan_desain = new Konsultan_desain();
        $konsultan_desain->nama = $request->get('nama'); 
        $konsultan_desain->alamat = $request->get('alamat'); 
        $konsultan_desain->countries_id = $request->get('countries_id'); 
        $konsultan_desain->desain_id = $request->get('id'); 
        $konsultan_desain->save(); 
    }

    public function modal_ubah(Request $request)
    { 
        $id = $request->id;
        $data_konsultan_desain = Konsultan_desain::find($id);   
        $data_countries = Countries::all();
        return view('public_admin.konsultan_desain.modal_ubah_konsultan_desain',compact('data_konsultan_desain','data_countries'));
    }

    public function simpan_konsultan_desain_ubah(Request $request,$id)
    {  
        $konsultan_desain = Konsultan_desain::find($id);
        $konsultan_desain->nama = $request->get('nama'); 
        $konsultan_desain->alamat = $request->get('alamat'); 
        $konsultan_desain->countries_id = $request->get('countries_id'); 
        // $konsultan_desain->keterangan = $request->get('keterangan'); 
        $konsultan_desain->save();
        session()->put('status', 'Konsultan Desain berhasil diubah!');  
        return redirect('/admin/konsultan_desain');
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
        $konsultan_desain = Konsultan_desain::find($id);
        $konsultan_desain->delete();
    }
}
