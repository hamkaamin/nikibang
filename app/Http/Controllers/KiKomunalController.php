<?php

namespace App\Http\Controllers;

use App\KiKomunal;
use App\JenisBarang;
use App\JenisDokumentasi;
use App\Kondisi;
use App\UpayaPelestarian;
use App\KondisiKomunal;;
use App\DokumentasiKomunal;
use Illuminate\Support\Facades\Validator;
use App\PelestarianKomunal;
use Auth;
use Alert;
use App\Model\Visitor;
use Illuminate\Http\Request;

class KiKomunalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function drafting_komunal()
    {
        
        Visitor::hit();
        $user_id =  Auth::id();
        $jenis_barang = JenisBarang::all();
        $jenis_dokumentasi = JenisDokumentasi::all();
        $kondisi = Kondisi::all();
        $upaya_pelestarian = UpayaPelestarian::all();
        $data_drafting = KiKomunal::where('user_id','=',$user_id)->whereNull('is_verif')->get();  
        return view('landing_page.drafting.ki_komunal.drafting_komunal',compact('data_drafting','jenis_barang','jenis_dokumentasi','kondisi','upaya_pelestarian'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $arr_req = json_decode(json_encode($request->all()), true);
        extract($arr_req);
        $thumbnail = $request->thumbnail;
        $validator = Validator::make($request->all(), [
            'thumbnail' => 'required|mimes:jpeg,png,jpg|max:5000', 
        ],
        [ 
            'thumbnail.max' => 'Maximum File Thumbnail Harus 5MB.', 
        ]);
        if ($validator->fails()) { 
            $msg = "";
            foreach ($validator->messages()->all() as $message) {
                $msg .= $message . ".
                ";
            }
            session()->put('statusT', $msg); 
            return redirect()->back(); 
        }else{           

        $komunal = new KiKomunal();
        $komunal->nama = $request->nama_ig;
        $komunal->nama_lain = $nama_lain_ig;
        $komunal->nama_potensi = $nama_potensi;
        $komunal->nama_pemohon = $nama_pemohon;
        $komunal->jenis_barang_id = $jenis_barang_id;
        $komunal->karakter_produk = $karakter_produk;
        $komunal->uraian_wilayah = $uraian_wilayah;
        $komunal->tempat_pelaporan = $tempat_pelaporan;
        $komunal->tanggal_pelaporan = $tanggal_pelaporan;
        $komunal->uraian_geografis = $uraian_deskripsi;
        $komunal->refrensi = $refrensi;
        $komunal->user_id = Auth::user()->id;
        $komunal->save();
        $new_name = 'ki_komunal_'.$komunal->id.'_' . $thumbnail->getClientOriginalName();
        $thumbnail->move(('file_upload/ki_komunal'), $new_name); 
        $komunal->name_file = 'file_upload/ki_komunal/' . $new_name;
        $komunal->path_file = 'file_upload/ki_komunal/' . $new_name;  
        $komunal->save();
        for ($i = 0; $i < sizeof($kondisi); $i++) {
            $data_user = new KondisiKomunal;
            $data_user->komunal_id = $komunal->id;
            $data_user->kondisi_id = $kondisi[$i];
            $data_user->save();
        }

        for ($i = 0; $i < sizeof($jenis_dokumentasi); $i++) {
            $data_user = new DokumentasiKomunal;
            $data_user->komunal_id = $komunal->id;
            $data_user->dokumentasi_id = $jenis_dokumentasi[$i];
            $data_user->save();
        }
        for ($i = 0; $i < sizeof($upaya_pelestarian); $i++) {
            $data_user = new PelestarianKomunal;
            $data_user->komunal_id = $komunal->id;
            $data_user->pelestarian_id = $upaya_pelestarian[$i];
            $data_user->save();
        }

        Alert::success('Berhasil', 'Data Berhasil ditambahkan'); 
        return redirect()->back();
        }
    }



    public function index_belum_verif_biaya()
    { 
        $data_ki_komunal_belum_biaya = KiKomunal::where('is_verif','=',NULL)->get(); 
        return view('public_admin.ki_komunal.biaya.ki_komunal_belum_verif_biaya',compact('data_ki_komunal_belum_biaya'));
    }

    public function index_belum_biaya()
    { 
        $data_ki_komunal_belum_biaya = KiKomunal::where('is_verif','=',0)->get(); 
        return view('public_admin.ki_komunal.biaya.ki_komunal_belum_biaya',compact('data_ki_komunal_belum_biaya'));
    }

    public function modal_verif_ki_komunal_belum_biaya(Request $request)
    { 
        $id = $request->id;
        $data_ki_komunal = KiKomunal::find($id);   
        return view('public_admin.ki_komunal.biaya.modal_verif_ki_komunal_belum_biaya',compact('data_ki_komunal'));
    }

    public function simpan_verifikasi_ki_komunal_pembiayaan(Request $request)
    { 
        $id = $request->ki_komunal_id;
        $sts_verif = $request->sts_verif; 
        $status = 0;
        $data_ki_komunal = KiKomunal::find($id);
        if($sts_verif == 'on')
        {
            $status = 1;
        }
        $data_ki_komunal->ket_verif = $request->keterangan; 
        $data_ki_komunal->is_verif = $status;
        $data_ki_komunal->save();
        session()->put('status', 'Data berhasil Diverifikasi!');  
        return redirect()->back();
    }


    public function verif_tidak_biayai_kirim(Request $request)
    {
        $id = $request->get('id');
        $data_verif_biaya = KiKomunal::find($id);
        $data_verif_biaya->is_verif = 1;
        $data_verif_biaya->save();
        return 'success'; 
    }


    public function index_sudah_biaya()
    { 
        $data_ki_komunal_sudah_biaya = KiKomunal::where('is_verif','=',1)->get(); 
        return view('public_admin.ki_komunal.biaya.ki_komunal_sudah_biaya',compact('data_ki_komunal_sudah_biaya'));
    }

    public function pembiayaan_ki_komunal()
    {   
        Visitor::hit();
        $user_id =  Auth::id();
        $data_pembiayaan = KiKomunal::where('user_id','=',$user_id)->whereNotNull('is_verif')->get();
        return view('landing_page.pembiayaan.pembiayaan_ki_komunal',compact('data_pembiayaan'));
    }

    public function modal_detail(Request $request)
    {  
        $id = $request->id;
        $data_ki_komunal = KiKomunal::find($id);   
        $kondisi_komunal = KondisiKomunal::where('komunal_id','=',$id)->get();
        $jenis_dokumentasi = DokumentasiKomunal::where('komunal_id','=',$id)->get();
        $pelestarian_komunal = PelestarianKomunal::where('komunal_id','=',$id)->get();
        return view('public_admin.ki_komunal.modal_detail_ki_komunal',compact('data_ki_komunal','kondisi_komunal','jenis_dokumentasi','pelestarian_komunal'));
    }
    
    
    /**
     * Display the specified resource.
     *
     * @param  \App\KiKomunal  $kiKomunal
     * @return \Illuminate\Http\Response
     */
    public function show(KiKomunal $kiKomunal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\KiKomunal  $kiKomunal
     * @return \Illuminate\Http\Response
     */
    public function edit(KiKomunal $kiKomunal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\KiKomunal  $kiKomunal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KiKomunal $kiKomunal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\KiKomunal  $kiKomunal
     * @return \Illuminate\Http\Response
     */
    
    public function destroy($id)
    { 
        $data_ki_komunal = KiKomunal::find($id);
        $data_ki_komunal->delete();
        return redirect()->back();
    }
}