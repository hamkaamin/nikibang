<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Validator;
use App\Model\Pendesain; 
use App\Model\Countries; 
use DB;

class PendesainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        session()->put('nama_menu_sidebar', 'menu_master_pendesain');
        $data_pendesain = Pendesain::all();
        if(Auth::user()->role_id !=1 && Auth::user()->role_id !=3){
            return redirect()->back();
        }
        else
        {
            return view('public_admin.pendesain.pendesain',compact('data_pendesain')); 
        }
    }
    public function modal_tambah()
    {
        $data_countries = Countries::all();
        return view('public_admin.pendesain.modal_tambah_pendesain',compact('data_countries'));
    }

    public function simpan_pendesain(Request $request)
    { 
        $pendesain = new Pendesain();
        $pendesain->nama = $request->get('nama'); 
        $pendesain->alamat = $request->get('alamat'); 
        $pendesain->countries_id = $request->get('countries_id'); 
        $pendesain->desain_id = $request->get('id'); 
        $pendesain->save(); 
    }

    public function modal_ubah(Request $request)
    { 
        $id = $request->id;
        $data_pendesain = Pendesain::find($id);  
        $data_countries = Countries::all(); 
        return view('public_admin.pendesain.modal_ubah_pendesain',compact('data_pendesain','data_countries'));
    }

    public function simpan_pendesain_ubah(Request $request,$id)
    {  
        $pendesain = Pendesain::find($id);
        $pendesain->nama = $request->get('nama'); 
        $pendesain->alamat = $request->get('alamat'); 
        $pendesain->countries_id = $request->get('countries_id'); 
        // $pendesain->keterangan = $request->get('keterangan'); 
        $pendesain->save();
        session()->put('status', 'Pendesain berhasil diubah!');  
        return redirect('/admin/pendesain');
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
        $pendesain = Pendesain::find($id);
        $pendesain->delete(); 
    }
}