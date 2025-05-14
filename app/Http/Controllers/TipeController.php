<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Validator;
use App\Model\Tipe; 
use DB;


class TipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        session()->put('nama_menu_sidebar', 'menu_master_pdki');
        $data_tipe = Tipe::all();
        if(Auth::user()->role_id !=1){
            return redirect()->back();
        }
        else
        {
        return view('public_admin.tipe.tipe',compact('data_tipe')); 
        }
    }

    public function modal_tambah()
    {
        return view('public_admin.tipe.modal_tambah_tipe');
    }

    public function simpan_tipe(Request $request)
    { 
        $tipe = new Tipe();
        $tipe->nama = $request->get('nama');   
        $tipe->save();
        session()->put('status', 'Data berhasil Ditambahkan!');
        return redirect ('/admin/tipe');
    }

    public function modal_ubah(Request $request)
    { 
        $id = $request->id;
        $data_tipe = Tipe::find($id);   
        return view('public_admin.tipe.modal_ubah_tipe',compact('data_tipe'));
    }

    public function simpan_tipe_ubah(Request $request,$id)
    {  
        $tipe = Tipe::find($id);
        $tipe->nama = $request->get('nama'); 
        // $tipe->keterangan = $request->get('keterangan'); 
        $tipe->save();
        session()->put('status', 'Tipe berhasil diubah!');  
        return redirect('/admin/tipe');
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
        $tipe = Tipe::find($id);
        $tipe->delete();
        return redirect('/admin/tipe');
    }
}
