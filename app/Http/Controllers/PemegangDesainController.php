<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use Auth;
use Illuminate\Support\Facades\Validator;
use App\Model\Pemegang_desain; 
use App\Model\Countries; 
use DB;

class PemegangDesainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        session()->put('nama_menu_sidebar', 'menu_master_pemegang_desain');
        $data_pemegang_desain = Pemegang_desain::all();
        return view('public_admin.pemegang_desain.pemegang_desain',compact('data_pemegang_desain')); 
    }
    public function modal_tambah()
    {
        $data_countries = Countries::all();
        return view('public_admin.pemegang_desain.modal_tambah_pemegang_desain',compact('data_countries'));
    }

    public function simpan_pemegang_desain(Request $request)
    { 
        $pemegang_desain = new Pemegang_desain();
        $pemegang_desain->nama = $request->get('nama'); 
        $pemegang_desain->alamat = $request->get('alamat'); 
        $pemegang_desain->countries_id = $request->get('countries_id'); 
        $pemegang_desain->desain_id = $request->get('id'); 
        $pemegang_desain->save(); 
    }

    public function modal_ubah(Request $request)
    { 
        $id = $request->id;
        $data_countries = Countries::all();
        $data_pemegang_desain = Pemegang_desain::find($id);   
        return view('public_admin.pemegang_desain.modal_ubah_pemegang_desain',compact('data_pemegang_desain','data_countries'));
    }

    public function simpan_pemegang_desain_ubah(Request $request,$id)
    {  
        $pemegang_desain = Pemegang_desain::find($id);
        $pemegang_desain->nama = $request->get('nama'); 
        $pemegang_desain->alamat = $request->get('alamat'); 
        $pemegang_desain->countries_id = $request->get('countries_id'); 
        // $pemegang_desain->keterangan = $request->get('keterangan'); 
        $pemegang_desain->save();
        session()->put('status', 'Pemegang Desain Industri berhasil diubah!');  
        return redirect('/admin/pemegang_desain');
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

        $pemegang_desain = Pemegang_desain::find($id);
        $pemegang_desain->delete(); 
    }
}
