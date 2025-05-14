<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Berita;
use Illuminate\Support\Facades\Validator;
use User; 
use DB; 
use Webpatser\Uuid\Uuid;
use Alert;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $berita = Berita::all();   
        return view('public_admin.berita.berita',compact('berita'));
    }

    public function modal_tambah(Request $request)
    {
        return view('public_admin.berita.tambah_modal_berita');
    }
    
    public function simpan_berita(Request $request)
    {
        $image = $request->file('file_upload');  
        $validation = Validator::make($request->all(), [
            'file_upload' => 'max:2048'
        ]);

        if ($validation->passes())
        {
            if(empty($image)){ 
                $berita = new Berita();
                $berita->judul = $request->get('judul'); 
                $berita->konten = $request->get('konten'); 
                $berita->kategori = $request->get('kategori'); 
                $berita->save();  
                $berita2 = Berita::find($berita->id);  
                $berita2->uuid = $this->getUUID($berita->id, $berita->created_at); 
                $berita2->save(); 
            }else{ 
                $berita = new Berita();
                $berita->judul = $request->get('judul');
                $berita->konten = $request->get('konten'); 
                $berita->kategori = $request->get('kategori'); 
                $berita->save(); 


                $berita2 = Berita::find($berita->id);  
                $new_name = 'berita_'.$berita->id.'_' . $image->getClientOriginalName();
                $image->move(('file_upload/berita'), $new_name);
                $berita2->uuid = $this->getUUID($berita->id, $berita->created_at); 
                $berita2->thumbnail = 'file_upload/berita/' . $new_name; 
                $berita2->save(); 
                session()->put('status', 'Berita berhasil Ditambahkan!');  
                return redirect()->back(); 
            } 
        }else{
            session()->put('statusT', 'Format File harus benar');
            return redirect()->back(); 
        }
    }

    public function modal_ubah(Request $request)
    {
        $id = $request->id;
        $berita = Berita::find($id);
        return view('public_admin.berita.ubah_modal_berita',compact('berita'));
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

    public function simpan_berita_ubah(Request $request,$id)
    {
        $berita = Berita::find($id);
        $berita->konten = $request->konten; 
        $berita->kategori = $request->kategori;
        $image = $request->file('file_upload');  
        $validation = Validator::make($request->all(), [
            'file_upload' => 'max:2048'
        ]);
        if(empty($image)){
            $berita->judul = $request->judul; 
            $berita->save();
        }else{
            unlink($berita->thumbnail);
            $new_name = 'berita_'.$berita->id.'_' . $image->getClientOriginalName();
            $image->move(('file_upload/berita'), $new_name); 
            $berita->thumbnail = 'file_upload/berita/' . $new_name; 
            $berita->save(); 
            
        }
        session()->put('status', 'Berita berhasil diubah!');  
        return redirect()->back();
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
        $berita = Berita::find($id);
        unlink($berita->thumbnail);
        $berita->delete();
        return redirect('/admin/berita');
    }
    public function getUUID($id, $tgl)
    {
        $i = rand(1,3);
        if ($i == 3) {
            return Uuid::generate(5, $tgl.' -> '.$id, Uuid::NS_DNS)->string;
        } else if ($i == 2) {
            return Uuid::generate(3, $tgl.' -> '.$id, Uuid::NS_DNS)->string;
        } else {
            return Uuid::generate(1, $tgl.' -> '.$id)->string;
        }
    }
}