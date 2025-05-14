<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Validator;
use App\Model\Desain;  
use App\Model\Prioritas_desain;  
use App\Model\Pemegang_desain; 
use App\Model\Konsultan_desain;  
use App\Model\Kelas_locarno;  
use App\Model\Upload_desain;  
use App\Model\Ipc;  
use App\Model\Kelas;   
use App\Model\Pendesain;   
use App\Model\Countries;   
use DB;

class DesainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        session()->put('nama_menu_sidebar', 'menu_master_desain');
        $data_desain = Desain::all();
        return view('public_admin.desain.desain',compact('data_desain'));
    }
     public function modal_tambah()
    { 
        return view('public_admin.desain.modal_tambah_desain');
    } 

    public function modal_ubah(Request $request)
    {  
        $id = $request->id;
        $data_desain = Desain::find($id);   
        return view('public_admin.desain.modal_ubah_desain',compact('data_desain'));
    }

    public function simpan_desain(Request $request)
    { 
        $image = $request->file('select_file');
        $desain = new Desain();

        $validation = Validator::make($request->all(), [
            'select_file' => 'required|mimes:jpeg,png,jpg|max:2048'
        ]);

        if ($validation->passes()) { 

        $desain->nomor_pendaftaran = $request->get('nomor_pendaftaran'); 
        $desain->tanggal_pendaftaran = $request->get('tanggal_pendaftaran'); 
        $desain->nomor_pengumuman = $request->get('nomor_pengumuman'); 
        $desain->tanggal_pengumuman = $request->get('tanggal_pengumuman'); 
        $desain->status = $request->get('status_desain'); 
        $desain->nama = $request->get('nama_desain'); 
        $desain->nomor_permohonan = $request->get('nomor_permohonan'); 
        $desain->tanggal_penerimaan = $request->get('tanggal_penerimaan');   
        $desain->tanggal_perlindungan = $request->get('tanggal_perlindungan');
        $desain->tanggal_end_perlindungan = $request->get('tanggal_end_perlindungan'); 
        $desain->kegunaan_produk = $request->get('kegunaan_produk'); 
        $desain->deskripsi_klaim = $request->get('deskripsi'); 
        $desain->save();

        $last2 = DB::table('desain_industri')->orderBy('id', 'DESC')->first();
        $desain_id = 0; 
        $desain_id = $last2->id; 
        $desain_ids = $desain_id+1;

        $new_name = 'desain_'.$desain_ids.'_' . $image->getClientOriginalName();
        $image->move(('file_upload/desains'), $new_name); 
        // dd($new_name);

        $desains = Desain::find($desain_id); 
        $desains->nama_file = 'file_upload/desains/' . $new_name;
        $desains->path_file = 'file_upload/desains/' . $new_name;  
        $desains->save();
        }
        else{ 
            echo "upload_gagal";
        }
        session()->put('status', 'Data berhasil Ditambahkan!');  
        return redirect('/admin/desain');
    }

    public function simpan_desain_ubah(Request $request,$id)
    { 
        $desain = Desain::find($id); 
        $desain->nomor_pendaftaran = $request->get('nomor_pendaftaran'); 
        $desain->tanggal_pendaftaran = $request->get('tanggal_pendaftaran'); 
        $desain->nomor_pengumuman = $request->get('nomor_pengumuman'); 
        $desain->tanggal_pengumuman = $request->get('tanggal_pengumuman'); 
        $desain->status = $request->get('status_desain'); 
        $desain->nama = $request->get('nama_desain'); 
        $desain->nomor_permohonan = $request->get('nomor_permohonan'); 
        $desain->tanggal_penerimaan = $request->get('tanggal_penerimaan');   
        $desain->tanggal_perlindungan = $request->get('tanggal_perlindungan');
        $desain->tanggal_end_perlindungan = $request->get('tanggal_end_perlindungan');   
        $desain->kegunaan_produk = $request->get('kegunaan_produk'); 
        $desain->deskripsi_klaim = $request->get('deskripsi');
        $desain->save();
        session()->put('status', 'Data berhasil Diubah!');  
        return redirect('/admin/desain');
    }  
    public function modal_detail(Request $request)
    {  
        $id = $request->id;
        $data_desain = Desain::find($id);   
        return view('public_admin.desain.modal_detail_desain',compact('data_desain'));
    }

    public function modal_isi_desain(Request $request)
    { 
        $id = $request->id;
        return view('public_admin.desain.modal_isi_desain',compact('id'));
    } 

    public function div_tabel_data_kelas_locarno($id,Request $request)
    { 
        $data_kelas_locarno = Kelas_locarno::where('desain_id',$id)->get(); 
        // dd($data_kelas_locarno);  
        return view('public_admin.desain.div_tabel_data_kelas_locarno',compact('data_kelas_locarno','id')); 
    }

    public function div_tabel_data_prioritas_desain($id,Request $request)
    { 
        $data_prioritas_desain = Prioritas_desain::where('desain_id',$id)->get();
        $data_countries = Countries::all();   
        // dd($data_prioritas_desain);  
        return view('public_admin.desain.div_tabel_data_prioritas_desain',compact('data_prioritas_desain','id','data_countries')); 
    }
    public function div_tabel_data_pemegang_desain($id,Request $request)
    { 
        $data_pemegang_desain = Pemegang_desain::where('desain_id',$id)->get();
        $data_countries = Countries::all();   
        // dd($data_pemegang_desain);  
        return view('public_admin.desain.div_tabel_data_pemegang_desain',compact('data_pemegang_desain','id','data_countries')); 
    }

    public function div_tabel_data_pendesain($id,Request $request)
    { 
        $data_pendesain = Pendesain::where('desain_id',$id)->get();
        $data_countries = Countries::all();   
        // dd($data_pendesain);  
        return view('public_admin.desain.div_tabel_data_pendesain',compact('data_pendesain','id','data_countries')); 
    } 

    public function div_tabel_data_konsultan_desain($id,Request $request)
    { 
        $data_konsultan_desain = Konsultan_desain::where('desain_id',$id)->get();
        $data_countries = Countries::all();   
        // dd($data_konsultan_desain);  
        return view('public_admin.desain.div_tabel_data_konsultan_desain',compact('data_konsultan_desain','id','data_countries')); 
    }

    public function div_tabel_data_upload_desain($id,Request $request)
    { 
        $data_upload_desain = Upload_desain::where('desain_id',$id)->get();
        $data_countries = Countries::all();  
        // dd($data_upload_desain);  
        return view('public_admin.desain.div_tabel_data_upload_desain',compact('data_upload_desain','id','data_countries')); 
    } 

    function action(Request $request)
    { 
            $desain_id = $request->get('desain_id');
            $image = $request->file('select_file');
            $new_name = 'art_'.$request->get('desain_id').'_' . $image->getClientOriginalName() ;
            $image->move(('file_upload/upload_desain/'.$desain_id), $new_name); 
            $data = new Upload_desain;
            $data->desain_id  = $request->get('desain_id');
            $data->nama_file = $request->get('nama_file');
            $data->keterangan = $request->get('keterangan'); 
            $data->path = 'upload_desain/' .$desain_id.'/'. $new_name; 
            $data->save();

            return response()->json([
                'message' => 'File Upload Successfully',
                'uploaded_image' => '<img src="/file_upload/upload_desain/' . $new_name . '" class="img-thumbnail" width="300"/>',
                'class_name' => 'alert-success',
                'res' => 'success'
            ]); 
            return response()->json([ 
                'uploaded_image' => '',
                'class_name' => 'alert-danger',
                'res' => 'Gagal'
            ]);
        
    } 

    public function hapus_file_data(Request $request)
    { 
        $id = $request->id;
        $upload_desain = Upload_desain::find($id);
        $upload_desain->delete();  
        
        return 'success';
        // return redirect('/admin/portofolio');
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
}
