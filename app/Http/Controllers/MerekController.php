<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Validator;
use App\Model\Merek;  
use App\Model\Prioritas_merek;  
use App\Model\Pemegang_merek; 
use App\Model\Konsultan_merek;  
use App\Model\Upload_merek;  
use App\Model\Ipc;  
use App\Model\Kelas;  
use App\Model\Inventor;  
use App\Model\Countries;  
use App\Model\Pemilik;  
use DB;

class MerekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        session()->put('nama_menu_sidebar', 'menu_master_merek');
        $data_merek = Merek::all();
        if(Auth::user()->role_id !=1){
            return redirect()->back();
        }
        else
        {
            return view('public_admin.merek.merek',compact('data_merek'));
        }
    }

    public function modal_tambah()
    { 
        return view('public_admin.merek.modal_tambah_merek');
    } 

    public function modal_ubah(Request $request)
    {  
        $id = $request->id;
        $data_merek = Merek::find($id);   
        return view('public_admin.merek.modal_ubah_merek',compact('data_merek'));
    }

    public function modal_detail(Request $request)
    {  
        $id = $request->id;
        $data_merek = Merek::find($id);   
        return view('public_admin.merek.modal_detail_merek',compact('data_merek'));
    }

    public function simpan_merek(Request $request)
    { 
        $image = $request->file('select_file');
        $validation = Validator::make($request->all(), [
            'select_file' => 'required|mimes:jpeg,png,jpg|max:2048'
        ]);

        if ($validation->passes()) { 

        $merek = new Merek();
        $merek->nomor_pendaftaran = $request->get('nomor_pendaftaran'); 
        $merek->tanggal_pendaftaran = $request->get('tanggal_pendaftaran'); 
        $merek->nomor_pengumuman = $request->get('nomor_pengumuman'); 
        $merek->tanggal_pengumuman = $request->get('tanggal_pengumuman'); 
        $merek->status = $request->get('status_merek'); 
        $merek->nama = $request->get('nama_merek'); 
        $merek->nomor_permohonan = $request->get('nomor_permohonan'); 
        $merek->tanggal_penerimaan = $request->get('tanggal_penerimaan');   
        $merek->tanggal_perlindungan = $request->get('tanggal_perlindungan');
        $merek->tanggal_end_perlindungan = $request->get('tanggal_end_perlindungan'); 
        $merek->translasi = $request->get('translasi'); 
        $merek->save();
        $last2 = DB::table('merek')->orderBy('id', 'DESC')->first();
        $merek_id = 0; 
        $merek_id = $last2->id; 
        $merek_ids = $merek_id+1;

        $new_name = 'merek_'.$merek_ids.'_' . $image->getClientOriginalName();
        $image->move(('file_upload/merek'), $new_name); 
        // dd($new_name);

        $mereks = Merek::find($merek_id); 
        $mereks->nama_file = 'file_upload/merek/' . $new_name;
        $mereks->path_file = 'file_upload/merek/' . $new_name;  
        $mereks->save();
        }
        else{ 
            echo "upload_gagal";
        }
        session()->put('status', 'Data berhasil Ditambahkan!');  
        return redirect('/admin/merek');
    }

    public function simpan_merek_ubah(Request $request,$id)
    { 
        $merek = Merek::find($id); 
        $merek->nomor_pendaftaran = $request->get('nomor_pendaftaran'); 
        $merek->tanggal_pendaftaran = $request->get('tanggal_pendaftaran'); 
        $merek->nomor_pengumuman = $request->get('nomor_pengumuman'); 
        $merek->tanggal_pengumuman = $request->get('tanggal_pengumuman'); 
        $merek->status = $request->get('status_merek'); 
        $merek->nama = $request->get('nama_merek'); 
        $merek->nomor_permohonan = $request->get('nomor_permohonan'); 
        $merek->tanggal_penerimaan = $request->get('tanggal_penerimaan');   
        $merek->tanggal_perlindungan = $request->get('tanggal_perlindungan');
        $merek->tanggal_end_perlindungan = $request->get('tanggal_end_perlindungan'); 
        $merek->translasi = $request->get('translasi'); 
        $merek->save();

        session()->put('status', 'Data berhasil Diubah!');  
        return redirect('/admin/merek');
    }  

    public function modal_isi_merek(Request $request)
    { 
        $id = $request->id;
        return view('public_admin.merek.modal_isi_merek',compact('id'));
    } 

    public function div_tabel_data_prioritas_merek($id,Request $request)
    { 
        $data_prioritas_merek = Prioritas_merek::where('merek_id',$id)->get();
        $data_countries = Countries::all();  
        // dd($data_prioritas_merek);  
        return view('public_admin.merek.div_tabel_data_prioritas_merek',compact('data_prioritas_merek','id','data_countries')); 
    }

    public function div_tabel_data_kelas($id,Request $request)
    { 
        $data_kelas = Kelas::where('merek_id',$id)->get();
        $data_countries = Countries::all();  
        // dd($data_kelas);  
        return view('public_admin.merek.div_tabel_data_kelas',compact('data_kelas','id','data_countries')); 
    }

    public function div_tabel_data_pemilik($id,Request $request)
    { 
        $data_pemilik = Pemilik::where('merek_id',$id)->get();
        $data_countries = Countries::all();  
        // dd($data_pemilik);  
        return view('public_admin.merek.div_tabel_data_pemilik',compact('data_pemilik','id','data_countries')); 
    }

    public function div_tabel_data_upload_merek($id,Request $request)
    { 
        $data_upload_merek = Upload_merek::where('merek_id',$id)->get(); 
        // dd($data_upload_merek);  
        return view('public_admin.merek.div_tabel_data_upload_merek',compact('data_upload_merek','id')); 
    } 

    public function div_tabel_data_konsultan_merek($id,Request $request)
    { 
        $data_konsultan_merek = Konsultan_merek::where('merek_id',$id)->get();
        $data_countries = Countries::all();  
        // dd($data_konsultan_merek);  
        return view('public_admin.merek.div_tabel_data_konsultan_merek',compact('data_konsultan_merek','id','data_countries')); 
    }

    function action(Request $request)
    { 
            $merek_id = $request->get('merek_id');
            $image = $request->file('select_file');
            $new_name = 'art_'.$request->get('merek_id').'_' . $image->getClientOriginalName() ;
            $image->move(('file_upload/upload_merek/'.$merek_id), $new_name); 
            $data = new Upload_merek;
            $data->merek_id  = $request->get('merek_id');
            $data->nama_file = $request->get('nama_file');
            $data->keterangan = $request->get('keterangan'); 
            $data->path = 'upload_merek/' .$merek_id.'/'. $new_name; 
            $data->save();

            return response()->json([
                'message' => 'File Upload Successfully',
                'uploaded_image' => '<img src="/file_upload/upload_merek/' . $new_name . '" class="img-thumbnail" width="300"/>',
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
        $upload_merek = Upload_merek::find($id);
        $upload_merek->delete();  
        
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
        $pemilik = Merek::find($id);
        $pemilik->delete();
        return redirect('/admin/merek');
    }
}
