<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Validator;
use App\Model\Paten;  
use App\Model\Prioritas_paten;  
use App\Model\Pemegang_paten; 
use App\Model\Konsultan_paten;  
use App\Model\Upload_paten;  
use App\Model\Ipc;  
use App\Model\Inventor;  
use App\Model\InventorPaten; 
use App\Model\PrioritasPatenData;   
use App\Model\Countries;  
use DB;

class PatenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        session()->put('nama_menu_sidebar', 'menu_master_paten');
        $data_paten = Paten::all();
        if(Auth::user()->role_id !=1 && Auth::user()->role_id !=3){
            return redirect()->back();
        }
        else
        {
            return view('public_admin.paten.paten',compact('data_paten'));
        }
    }

    public function modal_tambah()
    { 
        return view('public_admin.paten.modal_tambah_paten');
    } 

    public function modal_ubah(Request $request)
    {  
        $id = $request->id;
        $data_paten = Paten::find($id);   
        return view('public_admin.paten.modal_ubah_paten',compact('data_paten'));
    }
    public function modal_detail(Request $request)
    {  
        $id = $request->id;
        $data_paten = Paten::find($id);   
        return view('public_admin.paten.modal_detail_paten',compact('data_paten'));
    }


    public function simpan_paten(Request $request)
    { 
        $image = $request->file('select_file');
        $paten = new Paten();
        $validation = Validator::make($request->all(), [
            'select_file' => 'required|mimes:jpeg,png,jpg|max:2048'
        ]);

        if ($validation->passes()) { 
            
        $paten->nomor_pendaftaran = $request->get('nomor_pendaftaran'); 
        $paten->tanggal_pendaftaran = $request->get('tanggal_pendaftaran'); 
        $paten->nomor_pengumuman = $request->get('nomor_pengumuman'); 
        $paten->tanggal_pengumuman = $request->get('tanggal_pengumuman'); 
        $paten->status = $request->get('status_paten'); 
        $paten->nama = $request->get('nama_paten'); 
        $paten->nomor_permohonan = $request->get('nomor_permohonan'); 
        $paten->tanggal_penerimaan = $request->get('tanggal_penerimaan'); 
        $paten->nomor_paten = $request->get('nomor_paten');  
        $paten->tanggal_pemberian = $request->get('tanggal_pemberian');
        $paten->tanggal_perlindungan = $request->get('tanggal_perlindungan');
        $paten->tanggal_end_perlindungan = $request->get('tanggal_end_perlindungan');
        $paten->jumlah_klaim = $request->get('jumlah_klaim');
        $paten->nama_pemeriksa = $request->get('nama_pemeriksa');
        $paten->abstrak = $request->get('abstrak');
        $paten->nominal = $request->get('nominal');
        $paten->tahun_pembayaran_terakhir = $request->get('tahun_pembayaran_terakhir');
        $paten->tanggal_bayar = $request->get('tanggal_bayar');
        $paten->save();

        $last2 = DB::table('paten')->orderBy('id', 'DESC')->first();
        $paten_id = 0; 
        $paten_id = $last2->id; 
        $paten_ids = $paten_id+1;

        $new_name = 'paten_'.$paten_ids.'_' . $image->getClientOriginalName();
        $image->move(('file_upload/patens'), $new_name); 
        // dd($new_name);

        $patens = Paten::find($paten_id); 
        $patens->nama_file = 'file_upload/patens/' . $new_name;
        $patens->path_file = 'file_upload/patens/' . $new_name;  
        $patens->save();
        }
        else{  
        $paten->nomor_pendaftaran = $request->get('nomor_pendaftaran'); 
        $paten->tanggal_pendaftaran = $request->get('tanggal_pendaftaran'); 
        $paten->nomor_pengumuman = $request->get('nomor_pengumuman'); 
        $paten->tanggal_pengumuman = $request->get('tanggal_pengumuman'); 
        $paten->status = $request->get('status_paten'); 
        $paten->nama = $request->get('nama_paten'); 
        $paten->nomor_permohonan = $request->get('nomor_permohonan'); 
        $paten->tanggal_penerimaan = $request->get('tanggal_penerimaan'); 
        $paten->nomor_paten = $request->get('nomor_paten');  
        $paten->tanggal_pemberian = $request->get('tanggal_pemberian');
        $paten->tanggal_perlindungan = $request->get('tanggal_perlindungan');
        $paten->tanggal_end_perlindungan = $request->get('tanggal_end_perlindungan');
        $paten->jumlah_klaim = $request->get('jumlah_klaim');
        $paten->nama_pemeriksa = $request->get('nama_pemeriksa');
        $paten->abstrak = $request->get('abstrak');
        $paten->nominal = $request->get('nominal');
        $paten->tahun_pembayaran_terakhir = $request->get('tahun_pembayaran_terakhir');
        $paten->tanggal_bayar = $request->get('tanggal_bayar');
        $paten->save();
        }
        session()->put('status', 'Data berhasil Ditambahkan!');  
        return redirect('/admin/paten');
    }
    public function simpan_paten_ubah(Request $request,$id)
    { 
        $paten = Paten::find($id);
        $paten->nomor_pendaftaran = $request->get('nomor_pendaftaran'); 
        $paten->tanggal_pendaftaran = $request->get('tanggal_pendaftaran'); 
        $paten->nomor_pengumuman = $request->get('nomor_pengumuman'); 
        $paten->tanggal_pengumuman = $request->get('tanggal_pengumuman'); 
        $paten->status = $request->get('status_paten'); 
        $paten->nama = $request->get('nama_paten'); 
        $paten->nomor_permohonan = $request->get('nomor_permohonan'); 
        $paten->tanggal_penerimaan = $request->get('tanggal_penerimaan'); 
        $paten->nomor_paten = $request->get('nomor_paten');  
        $paten->tanggal_pemberian = $request->get('tanggal_pemberian');
        $paten->tanggal_perlindungan = $request->get('tanggal_perlindungan');
        $paten->tanggal_end_perlindungan = $request->get('tanggal_end_perlindungan');
        $paten->jumlah_klaim = $request->get('jumlah_klaim');
        $paten->nama_pemeriksa = $request->get('nama_pemeriksa');
        $paten->abstrak = $request->get('abstrak');
        $paten->nominal = $request->get('nominal');
        $paten->tahun_pembayaran_terakhir = $request->get('tahun_pembayaran_terakhir');
        $paten->tanggal_bayar = $request->get('tanggal_bayar');
        $paten->save();
        session()->put('status', 'Data berhasil Diubah!');  
        return redirect('/admin/paten');
    }

    public function modal_isi_paten(Request $request)
    { 
        $id = $request->id;
        return view('public_admin.paten.modal_isi_paten',compact('id'));
    } 

    public function div_tabel_data_prioritas_paten($id,Request $request)
    { 
        $data_prioritas_paten = PrioritasPatenData::where('paten_id',$id)->get();
        $data_countries = Countries::all();     
        return view('public_admin.paten.div_tabel_data_prioritas_paten',compact('data_prioritas_paten','id','data_countries')); 
    }

    public function div_tabel_data_pemegang_paten($id,Request $request)
    { 
        $data_pemegang_paten = Pemegang_paten::where('paten_id',$id)->get();
        $data_countries = Countries::all();  
        // dd($data_pemegang_paten);  
        return view('public_admin.paten.div_tabel_data_pemegang_paten',compact('data_pemegang_paten','id','data_countries')); 
    }

    public function div_tabel_data_inventor($id,Request $request)
    { 
        $data_inventor = InventorPaten::where('paten_id',$id)->get(); 
        $data_countries = Countries::all();  
        // dd($data_inventor);  
        return view('public_admin.paten.div_tabel_data_inventor',compact('data_inventor','id','data_countries')); 
    }
 

    public function div_tabel_data_konsultan_paten($id,Request $request)
    { 
        $data_konsultan_paten = Konsultan_paten::where('paten_id',$id)->get();
        $data_countries = Countries::all();  
        // dd($data_konsultan_paten);  
        return view('public_admin.paten.div_tabel_data_konsultan_paten',compact('data_konsultan_paten','id','data_countries')); 
    }

    public function div_tabel_data_ipc_paten($id,Request $request)
    { 
        $data_ipc_paten = Ipc::where('paten_id',$id)->get(); 
        // dd($data_ipc_paten);  
        return view('public_admin.paten.div_tabel_data_ipc_paten',compact('data_ipc_paten','id')); 
    }

    public function div_tabel_data_upload_paten($id,Request $request)
    { 
        $data_upload_paten = Upload_paten::where('paten_id',$id)->get();
        $data_countries = Countries::all();  
        // dd($data_upload_paten);  
        return view('public_admin.paten.div_tabel_data_upload_paten',compact('data_upload_paten','id','data_countries')); 
    } 


    function action(Request $request)
    { 
            $paten_id = $request->get('paten_id');
            $image = $request->file('select_file');
            $new_name = 'art_'.$request->get('paten_id').'_' . $image->getClientOriginalName() ;
            $image->move(('file_upload/upload_paten/'.$paten_id), $new_name); 
            $data = new Upload_paten;
            $data->paten_id  = $request->get('paten_id');
            $data->nama_file = $request->get('nama_file');
            $data->keterangan = $request->get('keterangan'); 
            $data->path = 'upload_paten/'.$paten_id.'/'.$new_name; 
            $data->save();

            return response()->json([
                'message' => 'File Upload Successfully',
                'uploaded_image' => '<img src="/file_upload/upload_paten/' . $new_name . '" class="img-thumbnail" width="300"/>',
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
        $upload_paten = Upload_paten::find($id);
        $upload_paten->delete();  
        
        return 'success';
        // return redirect('/admin/portofolio');
    }

    public function index_belum_biaya()
    { 
        $data_paten_belum_biaya = Paten::where('is_biaya','=',0)->get(); 
        return view('public_admin.paten.biaya.paten_belum_biaya',compact('data_paten_belum_biaya'));
    }

    public function index_belumverif_biaya()
    { 
        $data_paten_belum_biaya = Paten::whereNULL('is_biaya')->get(); 
        return view('public_admin.paten.biaya.paten_belumverif_biaya',compact('data_paten_belum_biaya'));
    }

    public function verif_tidak_biayai_kirim(Request $request)
    {
        $id = $request->get('id');
        $data_verif_biaya = Paten::find($id);
        $data_verif_biaya->is_biaya = 1;
        $data_verif_biaya->save();
        return 'success'; 
    }

    public function index_sudah_biaya()
    { 
        $data_paten_sudah_biaya = Paten::where('is_biaya','=',1)->get(); 
        return view('public_admin.paten.biaya.paten_sudah_biaya',compact('data_paten_sudah_biaya'));
    }

    public function modal_verif_paten_belum_biaya(Request $request)
    { 
        $id = $request->id;
        $data_paten = Paten::find($id);   
        return view('public_admin.paten.biaya.modal_verif_paten_belum_biaya',compact('data_paten'));
    }

    public function simpan_verifikasi_paten_pembiayaan(Request $request)
    { 
        $id = $request->paten_id;
        $sts_verif = $request->sts_verif; 
        $status = 0;
        $data_paten = Paten::find($id);
        if($sts_verif == 'on')
        {
            $status = 1;
        }
        $data_paten->ket_biaya = $request->keterangan; 
        $data_paten->is_biaya = $status;
        $data_paten->save();
        session()->put('status', 'Data berhasil Diverifikasi!');  
        return redirect('/admin/paten');
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
        $pemilik = Paten::find($id);
        $pemilik->delete();
        return redirect('/admin/paten');
    }
}