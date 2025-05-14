<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use User;
use Auth;
use App\Model\Konseling;
use DB; 
use Webpatser\Uuid\Uuid;
use Alert;

class KonselingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data_konseling = Konseling::All();
        if(Auth::user()->role_id !=1 && Auth::user()->role_id !=3){
            return redirect()->back();
        }
        else
        {
            return view('public_admin.konseling.konseling',compact('data_konseling'));
        }
    }

    public function simpan_konseling(Request $request)
    {
        $image = $request->file('file_upload');  
        $validation = Validator::make($request->all(), [
            'file_upload' => 'max:2048'
        ]);

        if ($validation->passes())
        {
            if(empty($image)){ 
                $konseling = new Konseling();
                $konseling->judul = $request->get('judul');
                $konseling->deskripsi = $request->get('deskripsi');
                $konseling->kategori = $request->get('kategori');
                $konseling->user_id = $request->get('user_id');
                $konseling->save();  
                $konseling2 = Konseling::find($konseling->id); 
                $tanggal = date('d-m-y');
                $tgl_update= str_replace("-", "", $tanggal);
                $ekonsultasi = $tgl_update.$konseling->id; 
                $konseling2->uuid = $this->getUUID($konseling->id, $konseling->created_at);
                $konseling2->ekonsultasi = $ekonsultasi;  
                $konseling2->save(); 
            }else{ 
                $konseling = new Konseling();
                $konseling->judul = $request->get('judul');
                $konseling->deskripsi = $request->get('deskripsi');
                $konseling->kategori = $request->get('kategori');
                $konseling->user_id = $request->get('user_id');
                $konseling->save(); 


                $konseling2 = Konseling::find($konseling->id); 
                $tanggal = date('d-m-y');
                $tgl_update= str_replace("-", "", $tanggal);
                $ekonsultasi = $tgl_update.$konseling->id;
                $new_name = 'konseling_'.$ekonsultasi;
                $image->move(('file_upload/konseling'), $new_name);
                $konseling2->uuid = $this->getUUID($konseling->id, $konseling->created_at);
                $konseling2->ekonsultasi = $ekonsultasi; 
                $konseling2->nama_file = 'file_upload/konseling/'.$new_name;
                $konseling2->path_file = 'file_upload/konseling/'.$new_name; 
                $konseling2->save(); 
                Alert::success('Berhasil', 'E-Konsultasi Telah Terbit '.$ekonsultasi);
                return redirect()->back(); 
            } 
        }else{
            Alert::warning('Gagal', 'Format File harus benar');
            return redirect()->back(); 
        }
    }

    public function simpan_tanggapan(Request $request)
    {  ;
        $konseling = Konseling::find($request->get('konseling_id'));
        $konseling->kategori = $request->get('kategori');
        $konseling->tanggapan = $request->get('tanggapan');
        $konseling->save(); 
        Alert::success('Berhasil', 'Berhasil ditambahkan');
        return redirect()->back(); 
    }

    public function detail(Request $request)
    {  
        $data = Konseling::where('uuid', '=', $request->uuid)->first();
        return view('public_admin.konseling.detail', compact('data'));
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