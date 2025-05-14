<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Validator;
use App\Model\Inventor; 
use App\Model\InventorPaten; 
use App\Model\Countries; 
use DB;

class InventorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        session()->put('nama_menu_sidebar', 'menu_master_inventor');
        $data_inventor = Inventor::all();
        if(Auth::user()->role_id !=1){
            return redirect()->back();
        }
        else
        {
            return view('public_admin.inventor.inventor',compact('data_inventor'));
        } 
    }
    public function modal_tambah()
    {
        $data_countries = Countries::all();
        return view('public_admin.inventor.modal_tambah_inventor',compact('data_countries'));
    }

    public function simpan_inventor(Request $request)
    { 
        $inventor = new InventorPaten();
        $inventor->nama = $request->get('nama'); 
        $inventor->alamat_inventor = $request->get('alamat_inventor'); 
        $inventor->nomor_telepon = $request->get('nomor_telepon'); 
        $inventor->email = $request->get('email'); 
        $inventor->kewarganegaraan = $request->get('countries_id'); 
        $inventor->paten_id = $request->get('id'); 
        $inventor->save();
        session()->put('status', 'Data berhasil Ditambahkan!'); 
    }

    public function modal_ubah(Request $request)
    { 
        $data_countries = Inventor::all();
        $id = $request->id;
        $data_inventor = Inventor::find($id);   
        return view('public_admin.inventor.modal_ubah_inventor',compact('data_inventor','data_countries'));
    }

    public function simpan_inventor_ubah(Request $request,$id)
    {  
        $inventor = Inventor::find($id);
        $inventor->nama = $request->get('nama'); 
        $inventor->alamat = $request->get('alamat'); 
        $inventor->countries_id = $request->get('countries_id'); 
        $inventor->paten_id = $request->get('id'); 
        // $inventor->keterangan = $request->get('keterangan'); 
        $inventor->save();
        session()->put('status', 'Inventor  berhasil diubah!');  
        return redirect('/admin/inventor');
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
        $inventor = InventorPaten::find($id);
        $inventor->delete();
        return redirect('/admin/inventor');
    }
}
