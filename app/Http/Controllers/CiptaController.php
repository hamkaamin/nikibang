<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Validator;
use App\Model\Cipta;  
use App\Model\Prioritas_cipta;  
use App\Model\Pemegang_cipta; 
use App\Model\Konsultan_cipta;  
use App\Model\Jenis_ciptaan;  
use App\Model\Upload_cipta;  
use App\Model\Ipc;  
use App\Model\Kelas;  
use App\Model\Pencipta;  
use App\Model\Inventor;  
use App\Model\Countries;  
use App\Model\Pemilik;  
use DB;


class CiptaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        session()->put('nama_menu_sidebar', 'menu_master_cipta');
        $data_cipta = Cipta::all();
        if(Auth::user()->role_id !=1 && Auth::user()->role_id !=3){
            return redirect()->back();
        }
        else
        {
        return view('public_admin.cipta.cipta',compact('data_cipta'));
        }
    }
    public function modal_tambah()
    { 
        return view('public_admin.cipta.modal_tambah_cipta');
    } 

    public function modal_isi_cipta(Request $request)
    { 
        $id = $request->id;
        return view('public_admin.cipta.modal_isi_cipta',compact('id'));
    } 

    public function modal_ubah(Request $request)
    {  
        $id = $request->id;
        $data_cipta = Cipta::find($id);   
        return view('public_admin.cipta.modal_ubah_cipta',compact('data_cipta'));
    }
     public function simpan_cipta(Request $request)
    { 
        $image = $request->file('select_file');
        $validation = Validator::make($request->all(), [
            'select_file' => 'required|mimes:jpeg,png,jpg|max:2048'
        ]);

        if ($validation->passes()) { 
 
        $cipta = new Cipta();
        $cipta->nomor_pencatatan = $request->get('nomor_pencatatan'); 
        $cipta->tanggal_pencatatan = $request->get('tanggal_pencatatan');  
        $cipta->status = $request->get('status_cipta'); 
        $cipta->nama = $request->get('nama_cipta');  
        $cipta->tanggal_permohonan = $request->get('tanggal_permohonan');    
        $cipta->tanggal_end_perlindungan = $request->get('tanggal_end_perlindungan'); 
        $cipta->uraian_ciptaan = $request->get('uraian'); 
        $cipta->save();
        $last2 = DB::table('hak_cipta')->orderBy('id', 'DESC')->first();
        $cipta_id = 0; 
        $cipta_id = $last2->id; 
        $cipta_ids = $cipta_id+1;

        $new_name = 'cipta_'.$cipta_ids.'_' . $image->getClientOriginalName();
        $image->move(('file_upload/cipta'), $new_name); 
        // dd($new_name);

        $ciptas = Cipta::find($cipta_id); 
        $ciptas->nama_file = 'file_upload/cipta/' . $new_name;
        $ciptas->path_file = 'file_upload/cipta/' . $new_name;  
        $ciptas->save();
        }
        else{ 
            $cipta = new Cipta();
            $cipta->nomor_pencatatan = $request->get('nomor_pencatatan'); 
            $cipta->tanggal_pencatatan = $request->get('tanggal_pencatatan');  
            $cipta->status = $request->get('status_cipta'); 
            $cipta->nama = $request->get('nama_cipta');  
            $cipta->tanggal_permohonan = $request->get('tanggal_permohonan');    
            $cipta->tanggal_end_perlindungan = $request->get('tanggal_end_perlindungan'); 
            $cipta->uraian_ciptaan = $request->get('uraian'); 
            $cipta->save();
            }
            session()->put('status', 'Data berhasil Ditambahkan!');  
            return redirect('/admin/cipta');
    }

    public function div_tabel_data_pemegang_cipta($id,Request $request)
    { 
        $data_pemegang_cipta = Pemegang_cipta::where('cipta_id',$id)->get();
        $data_countries = Countries::all();  
        // dd($data_pemegang_cipta);  
        return view('public_admin.cipta.div_tabel_data_pemegang_cipta',compact('data_pemegang_cipta','id','data_countries')); 
    }

    public function div_tabel_data_jenis_ciptaan($id,Request $request)
    { 
        $data_jenis_ciptaan = Jenis_ciptaan::where('cipta_id',$id)->get();
        $data_countries = Countries::all();  
        // dd($data_jenis_ciptaan);  
        return view('public_admin.cipta.div_tabel_data_jenis_ciptaan',compact('data_jenis_ciptaan','id','data_countries')); 
    }
    public function div_tabel_data_pencipta($id,Request $request)
    { 
        $data_pencipta = Pencipta::where('cipta_id',$id)->get();
        $data_countries = Countries::all();  
        // dd($data_pencipta);  
        return view('public_admin.cipta.div_tabel_data_pencipta',compact('data_pencipta','id','data_countries')); 
    }
    
    public function div_tabel_data_konsultan_cipta($id,Request $request)
    { 
        $data_konsultan_cipta = Konsultan_cipta::where('cipta_id',$id)->get();
        $data_countries = Countries::all();  
        // dd($data_konsultan_cipta);  
        return view('public_admin.cipta.div_tabel_data_konsultan_cipta',compact('data_konsultan_cipta','id','data_countries')); 
    }

    public function modal_detail(Request $request)
    {  
        $id = $request->id;
        $data_cipta = Cipta::find($id);   
        return view('public_admin.cipta.modal_detail_cipta',compact('data_cipta'));
    }

    public function simpan_cipta_ubah(Request $request,$id)
    { 
        $cipta = Cipta::find($id); 
        $cipta->nomor_pencatatan = $request->get('nomor_pencatatan'); 
        $cipta->tanggal_pencatatan = $request->get('tanggal_pencatatan');  
        $cipta->status = $request->get('status_cipta'); 
        $cipta->nama = $request->get('nama_cipta');  
        $cipta->tanggal_permohonan = $request->get('tanggal_permohonan');    
        $cipta->tanggal_end_perlindungan = $request->get('tanggal_end_perlindungan'); 
        $cipta->uraian_ciptaan = $request->get('uraian_2'); 
        $cipta->save();
        session()->put('status', 'Data berhasil Diubah!');  
        return redirect('/admin/cipta');
    } 


    public function div_tabel_data_upload_cipta($id,Request $request)
    { 
        $data_upload_cipta = Upload_cipta::where('cipta_id',$id)->get(); 
        // dd($data_upload_cipta);  
        return view('public_admin.cipta.div_tabel_data_upload_cipta',compact('data_upload_cipta','id')); 
    } 
     function action(Request $request)
    { 
            $cipta_id = $request->get('cipta_id');
            $image = $request->file('select_file');
            $new_name = 'art_'.$request->get('cipta_id').'_' . $image->getClientOriginalName() ;
            $image->move(('file_upload/upload_cipta/'.$cipta_id), $new_name); 
            $data = new Upload_cipta;
            $data->cipta_id  = $request->get('cipta_id');
            $data->nama_file = $request->get('nama_file');
            $data->keterangan = $request->get('keterangan'); 
            $data->path = 'upload_cipta/' .$cipta_id.'/'. $new_name; 
            $data->save();

            return response()->json([
                'message' => 'File Upload Successfully',
                'uploaded_image' => '<img src="/file_upload/upload_cipta/' . $new_name . '" class="img-thumbnail" width="300"/>',
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
        $upload_cipta = Upload_cipta::find($id);
        $upload_cipta->delete();  
        
        return 'success';
        // return redirect('/admin/portofolio');
    }

    public function index_belum_biaya()
    { 
        $data_cipta_belum_biaya = Cipta::where('is_biaya','=',0)->get(); 
        return view('public_admin.cipta.biaya.cipta_belum_biaya',compact('data_cipta_belum_biaya'));
    }

    public function index_belumverif_biaya()
    { 
        $data_cipta_belum_biaya = Cipta::whereNULL('is_biaya')->get(); 
        return view('public_admin.cipta.biaya.cipta_belumverif_biaya',compact('data_cipta_belum_biaya'));
    }

    public function verif_tidak_biayai_kirim(Request $request)
    {
        $id = $request->get('id');
        $data_verif_biaya = Cipta::find($id);
        $data_verif_biaya->is_biaya = 1;
        $data_verif_biaya->save();
        return 'success'; 
    }

    public function index_sudah_biaya()
    { 
        $data_cipta_sudah_biaya = Cipta::where('is_biaya','=',1)->get(); 
        return view('public_admin.cipta.biaya.cipta_sudah_biaya',compact('data_cipta_sudah_biaya'));
    }

    public function modal_verif_cipta_belum_biaya(Request $request)
    { 
        $id = $request->id;
        $data_cipta = Cipta::find($id);   
        return view('public_admin.cipta.biaya.modal_verif_cipta_belum_biaya',compact('data_cipta'));
    }

    public function simpan_verifikasi_cipta_pembiayaan(Request $request)
    { 
        $id = $request->cipta_id;
        $sts_verif = $request->sts_verif; 
        $status = 0;
        $data_cipta = Cipta::find($id);
        if($sts_verif == 'on')
        {
            $status = 1;
        }
        $data_cipta->ket_biaya = $request->keterangan; 
        $data_cipta->is_biaya = $status;
        $data_cipta->save();
        session()->put('status', 'Data berhasil Diverifikasi!');  
        return redirect('/admin/cipta');
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
        $cipta = Cipta::find($id);
        $cipta->delete();
        return redirect('/admin/cipta');
    }
}