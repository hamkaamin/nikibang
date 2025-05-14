<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Validator;
use App\Model\Kelas; 
use DB;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        session()->put('nama_menu_sidebar', 'menu_master_kelas');
        $data_kelas = Kelas::all();
        if(Auth::user()->role_id !=1 && Auth::user()->role_id !=3){
            return redirect()->back();
        }
        else
        {
            return view('public_admin.kelas.kelas',compact('data_kelas'));
        } 
    }
    public function modal_tambah()
    {
        return view('public_admin.kelas.modal_tambah_kelas');
    }

    public function simpan_kelas(Request $request)
    { 
        $kelas = new Kelas();
        $kelas->kode_kelas = $request->get('kode'); 
        $kelas->jenis = $request->get('jenis'); ; 
        $kelas->merek_id = $request->get('id');  
        $kelas->save(); 
    }

    public function modal_ubah(Request $request)
    { 
        $id = $request->id;
        $data_kelas = Kelas::find($id);   
        return view('public_admin.kelas.modal_ubah_kelas',compact('data_kelas'));
    }

    public function simpan_kelas_ubah(Request $request,$id)
    {  
        $kelas = Kelas::find($id);
        $kelas->kode_kelas = $request->get('kode'); 
        $kelas->jenis = $request->get('jenis');
        $kelas->save();
        session()->put('status', 'Kelas berhasil diubah!');  
        return redirect('/admin/kelas');
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
        $kelas = Kelas::find($id);
        $kelas->delete();
        return redirect('/admin/kelas');
    }
}