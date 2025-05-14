<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Validator;
use App\Model\Pencipta; 
use App\Model\Countries; 
use DB;

class PenciptaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        session()->put('nama_menu_sidebar', 'menu_master_pencipta');
        $data_pencipta = Pencipta::all();
        if(Auth::user()->role_id !=1 && Auth::user()->role_id !=3){
            return redirect()->back();
        }
        else
        {
            return view('public_admin.pencipta.pencipta',compact('data_pencipta')); 
        }
    }

    public function modal_tambah()
    {
        $data_countries = Countries::all();
        return view('public_admin.pencipta.modal_tambah_pencipta',compact('data_countries'));
    }

    public function simpan_pencipta(Request $request)
    { 
        $pencipta = new Pencipta();
        $pencipta->nama = $request->get('nama'); 
        $pencipta->alamat = $request->get('alamat'); 
        $pencipta->countries_id = $request->get('countries_id'); 
        $pencipta->cipta_id = $request->get('id'); 
        $pencipta->save(); 
    }

    public function modal_ubah(Request $request)
    { 
        $id = $request->id;
        $data_pencipta = Pencipta::find($id);  
        $data_countries = Countries::all(); 
        return view('public_admin.pencipta.modal_ubah_pencipta',compact('data_pencipta','data_countries'));
    }

    public function simpan_pencipta_ubah(Request $request,$id)
    {  
        $pencipta = Pencipta::find($id);
        $pencipta->nama = $request->get('nama'); 
        $pencipta->alamat = $request->get('alamat'); 
        $pencipta->countries_id = $request->get('countries_id'); 
        // $pencipta->keterangan = $request->get('keterangan'); 
        $pencipta->save();
        session()->put('status', 'Pencipta berhasil diubah!');  
        return redirect('/admin/pencipta');
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
        $pencipta = Pencipta::find($id);
        $pencipta->delete(); 
    }
}