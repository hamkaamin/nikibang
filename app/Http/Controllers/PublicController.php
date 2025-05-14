<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Model\Tipe;
use App\Model\Paten;
use App\Model\Merek;
use App\Model\Desain;
use App\Model\Cipta;
use App\KiKomunal;
use App\KondisiKomunal;
use App\DokumentasiKomunal;
use App\PelestarianKomunal;
use App\Model\Tentang_kami;
use App\Model\Konseling;
use App\Model\Jenis_ciptaan_cipta;
use App\Model\Countries;
use App\Model\Provinsi;
use Auth;
use App\User;
use App\Model\Sliders;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Model\Visitor;
use App\Model\Berita;
use Alert;

class PublicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Visitor::hit();
        $data_sliders = Sliders::all();  
        return view('landing_page.berandapage',compact('data_sliders'));
    }
    public function home()
    {
        return view('landing_page.index');
    }
    public function berandapage()
    {
        Visitor::hit();
        $data_sliders = Sliders::all(); 
        return view('landing_page.berandapage',compact('data_sliders'));
    }

    public function konseling()
    { 
        Visitor::hit();
        $user_id =  Auth::id();
        $data_konseling = Konseling::where('user_id','=',$user_id)->get(); 
        return view('landing_page.konseling.konseling',compact('data_konseling'));
    }

    public function register_akun()
    {
        return view('auth.register');
    }

    public function drafting_paten()
    {   
        Visitor::hit();
        $user_id =  Auth::id();
        $data_negara = Countries::All();
        $data_drafting = Paten::where('user_id','=',$user_id)->get();  
        return view('landing_page.drafting.paten.drafting_paten',compact('data_drafting','data_negara'));
    }

    public function drafting_cipta()
    {   
        Visitor::hit();
        $user_id =  Auth::id();
        $jenis_ciptaan = Jenis_ciptaan_cipta::All(); 
        $data_negara = Countries::All();
        $data_provinsi = Provinsi::All();
        $data_drafting = Cipta::where('user_id','=',$user_id)->get(); 
        return view('landing_page.drafting.cipta.drafting_cipta',compact('data_drafting','jenis_ciptaan','data_negara','data_provinsi'));
    }

    public function detail_konseling(Request $request)
    {   
        $data = Konseling::where('uuid', '=', $request->uuid)->first(); 
        Visitor::hit();
        return view('landing_page.konseling.detail_konseling', compact('data'));
    }

    public function edit_drafting_cipta(Request $request)
    {
        $data_cipta = Cipta::where('uuid','=',$request->uuid)->first();
        return view('landing_page.drafting.cipta.edit_drafting_cipta',compact('data_cipta'));
    }

    public function edit_drafting_paten(Request $request)
    {
        $data_paten = Paten::where('uuid','=',$request->uuid)->first();
        return view('landing_page.drafting.paten.edit_drafting_paten',compact('data_paten'));
    }

    public function simpan_register(Request $request)
    {
        $originalDate = $request->get('tanggal_lahir');
        $newDate = str_replace('/', '-', $originalDate); 
        $date = date('Y-m-d', strtotime($newDate));
        $validator = Validator::make($request->all(), [
            'username' => 'unique:users,username',
            'email' => 'unique:users,email' 
        ], [
            'username.unique' => 'Username already exists.',
            'email.unique' => 'E-Mail already exists.'
        ]);
        if($request->password == $request->re_password){ 
            if ($validator->fails()) {
                $msg = "";
                foreach ($validator->messages()->all() as $message) {
                    $msg .= $message . ".
                    ";
                }
                session()->put('statusT', $msg); 
                return redirect()->back(); 
            } else { 
                $data_user = new User();
                $data_user->name = $request->get('nama'); 
                $data_user->tempat_lahir = $request->get('tempat_lahir');
                $data_user->no_telp = $request->get('no_telp');
                $data_user->alamat = $request->get('alamat');
                $data_user->tanggal_lahir = $date;
                $data_user->email = $request->get('email');
                $data_user->username = $request->get('username');
                $data_user->password = Hash::make($request->password);
                $data_user->role_id = 2;
                $data_user->save();
                session()->put('status', 'Data berhasil Ditambahkan!'); 
                return redirect()->back(); 
            }
        }else{
            session()->put('statusT', 'Password Harus Sama'); 
            return redirect()->back(); 
        }
    }

    public function pembiayaan_paten()
    {   
        Visitor::hit();
        $user_id =  Auth::id();
        $data_pembiayaan = Paten::where('user_id','=',$user_id)->whereNotNull('is_biaya')->get();  
        return view('landing_page.pembiayaan.pembiayaan_paten',compact('data_pembiayaan'));
    }
    public function pembiayaan_cipta()
    {   
        Visitor::hit();
        $user_id =  Auth::id();
        $data_pembiayaan = Cipta::where('user_id','=',$user_id)->whereNotNull('is_biaya')->get(); 
        return view('landing_page.pembiayaan.pembiayaan_cipta',compact('data_pembiayaan'));
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
    public function connect_with_us(Request $request)
    {
        request()->validate([ 
            'g-recaptcha-response' => 'required|captcha' 
        ]); 

        $ip = request()->ip();

        $arr_data = [
            'nama' => $request->nama
            , 'email' => $request->email

            , 'subject' => $request->subject
            , 'isi' => $request->isi
            , 'ket' => $request->ket
            , 'ip' => $ip 
            , 'created_at' => date('Y-m-d H:i:s')
            , 'updated_at' => date('Y-m-d H:i:s')
        ];

        $insert = DB::table('pesans')
        ->insert($arr_data);

        session()->put('success', 'Data Pesan Berhasil Disimpan!'); 
        return redirect('/');
    }

    public function search(Request $request, $tipe)
    {
        $q = $request->q;
        $tipe_first = Tipe::where('kode', $tipe)->first();

        if(empty($q)){
            session()->put('unsuccess', 'Tidak Ada data yang dicari');
            return redirect('/');
        }
        if(empty($tipe_first)){
            session()->put('unsuccess', 'Tipe data yang dicari, tidak ditemukan');
            return redirect('/');
        }

        $hasil_pencarian = null;
        if($tipe == 'paten'){
            /* Cari paten */
            /* selectnya harus cuman id, nama, abstrak, nomor_pendaftaran, nomor_permohonan, path_file, status */
            $hasil_pencarian = Paten::where('nama', 'like', '%'.$q.'%')
            ->orWhere('abstrak', 'like', '%'.$q.'%')
            ->orWhere('nomor_pendaftaran', 'like', '%'.$q.'%')
            ->orWhere('nomor_permohonan', 'like', '%'.$q.'%')
            ->orWhere('jenis_paten', 'like', '%'.$q.'%')
            ->select('id', 'nama','abstrak','nomor_pendaftaran','nomor_permohonan','path_file', 'status','jenis_paten')
            ->get(); 
            return view('landing_page.search', compact('q', 'tipe_first', 'hasil_pencarian'));
        }
        else if($tipe == 'merek'){
            /* Cari merek */
            $hasil_pencarian = Merek::where('nama', 'like', '%'.$q.'%')
            ->orWhere('translasi', 'like', '%'.$q.'%')
            ->orWhere('nomor_pendaftaran', 'like', '%'.$q.'%')
            ->orWhere('nomor_permohonan', 'like', '%'.$q.'%')
            ->select('id', 'nama','translasi','nomor_pendaftaran','nomor_permohonan','path_file', 'status')
            ->get();
            return view('landing_page.search_merek', compact('q', 'tipe_first', 'hasil_pencarian'));
        }
        else if($tipe == 'j'){
            /* Cari di */
            $hasil_pencarian = Desain::where('nama', 'like', '%'.$q.'%')
            ->orWhere('deskripsi_klaim', 'like', '%'.$q.'%')
            ->orWhere('nomor_pendaftaran', 'like', '%'.$q.'%')
            ->orWhere('nomor_permohonan', 'like', '%'.$q.'%')
            ->select('id', 'nama','deskripsi_klaim','nomor_pendaftaran','nomor_permohonan','path_file', 'status')
            ->get();
            return view('landing_page.search_desain', compact('q', 'tipe_first', 'hasil_pencarian'));
        }
        else if($tipe == 'hcipta'){
            /* Cari hcipta */
            $hasil_pencarian = Cipta::where('hak_cipta.nama', 'like', '%'.$q.'%')
            ->orWhere('hak_cipta.uraian_ciptaan', 'like', '%'.$q.'%')
            ->orWhere('hak_cipta.nomor_pencatatan', 'like', '%'.$q.'%')
            ->orWhere('hak_cipta.tanggal_pencatatan', 'like', '%'.$q.'%')
            ->orWhere('jenis_ciptaan_cipta.nama', 'like', '%'.$q.'%')
            ->select('hak_cipta.id', 'hak_cipta.nama','hak_cipta.uraian_ciptaan','hak_cipta.nomor_pencatatan','hak_cipta.tanggal_pencatatan','hak_cipta.path_file', 'hak_cipta.status','jenis_ciptaan_cipta.nama as NamaCipta')
            ->join('jenis_ciptaan_cipta','jenis_ciptaan_cipta.id','=','hak_cipta.jenis_ciptaan_id')
            ->get();  
            return view('landing_page.search_cipta', compact('q', 'tipe_first', 'hasil_pencarian'));
        }
        else if($tipe == 'ki_komunal'){
            /* Cari di */
            $hasil_pencarian = KiKomunal::where('nama', 'like', '%'.$q.'%')
            ->orWhere('nama_lain', 'like', '%'.$q.'%')
            ->orWhere('nama_pemohon', 'like', '%'.$q.'%')
            ->orWhere('nama_potensi', 'like', '%'.$q.'%')
            ->select('*')
            ->get();
            return view('landing_page.search_desain', compact('q', 'tipe_first', 'hasil_pencarian'));
        }

    }

    public function search_detail(Request $request, $tipe)
    {
        Visitor::hit();
        $key = $request->k;
        $tipe_first = Tipe::where('kode', $tipe)->first();

        if(empty($key)){
            session()->put('unsuccess', 'Key Salah');
            return back();
        }
        if(empty($tipe_first)){
            session()->put('unsuccess', 'Tipe data yang dicari, tidak ditemukan');
            return back();
        }

        $key1 = 1; 
        $id = null; 
        $key2 = 3;
        $z = urldecode($key);
        $zz = $this->decrypt($z, 'progstylysbyhamdiramadhan');
        $arr = explode("||", $zz);
        if(isset($arr[0])){ $key1 = $arr[0]; }
        if(isset($arr[1])){ $id = $arr[1]; }
        if(isset($arr[2])){ $key2 = $arr[2]; }

        if($key1 != $key2) {
            session()->put('unsuccess', 'Token Salah');
            return back();
        } else { 
            $detail_data = null;
            if($tipe == 'paten'){
                /* Cari paten */
                $detail_data = Paten::find($id);
                if(empty($detail_data)){
                    session()->put('unsuccess', 'Tipe data yang dicari, tidak ditemukan');
                    return back();
                }
                return view('landing_page.search_detail', compact('tipe_first', 'detail_data'));
            }
            else if($tipe == 'merek'){
                $detail_data = Merek::find($id);
                if(empty($detail_data)){
                    session()->put('unsuccess', 'Tipe data yang dicari, tidak ditemukan');
                    return back();
                }
                return view('landing_page.detail_merek', compact('tipe_first', 'detail_data'));
            }
            else if($tipe == 'di'){
                /* Cari di */
                $detail_data = Desain::find($id);
                if(empty($detail_data)){
                    session()->put('unsuccess', 'Tipe data yang dicari, tidak ditemukan');
                    return back();
                }
                return view('landing_page.detail_desain', compact('tipe_first', 'detail_data'));
            }
            else if($tipe == 'hcipta'){
                /* Cari hcipta */
                $detail_data = Cipta::find($id); 
                if(empty($detail_data)){
                    session()->put('unsuccess', 'Tipe data yang dicari, tidak ditemukan');
                    return back();
                }
                return view('landing_page.detail_cipta', compact('tipe_first', 'detail_data'));
            }

            else if($tipe == 'ki_komunal'){
                /* Cari hcipta */
                $detail_data = KiKomunal::find($id); 
                $kondisi_komunal = KondisiKomunal::where('komunal_id','=',$id)->get();
                $jenis_dokumentasi = DokumentasiKomunal::where('komunal_id','=',$id)->get();
                $pelestarian_komunal = PelestarianKomunal::where('komunal_id','=',$id)->get();
                if(empty($detail_data)){
                    session()->put('unsuccess', 'Tipe data yang dicari, tidak ditemukan');
                    return back();
                }
                return view('landing_page.detail_ki_komunal', compact('tipe_first', 'detail_data','kondisi_komunal','jenis_dokumentasi','pelestarian_komunal'));
            }
        } /* tutup if else key */

    }

    public function tentang_kami()
    {
        Visitor::hit();
        $tentang_kami = DB::table('tentang_kami')->where('id', 1)->first(); 
        return view('landing_page.tentang_kami',compact('tentang_kami'));
    }

    public function berita_page($pages)
    { 
        Visitor::hit();
        $user_id =  Auth::id(); 
        if(isset($pages))
        {
            $page = $pages;
        }
        else
        {
            $page = 1;
        }    
        $data_kategori = Berita::select(DB::raw('COUNT(berita.kategori) as jumlah, kategori'))
        ->groupBy('kategori')
        ->get();  
        return view('landing_page.berita.berita',compact('page','data_kategori'));
    }

    public function detail_berita(Request $request)
    {  
        // Visitor::hit();
        $key = $request->k; 

        if(empty($key)){
            session()->put('unsuccess', 'Key Salah');
            return back();
        } 

        $key1 = 1; 
        $id = null; 
        $key2 = 3;
        $z = urldecode($key);
        $zz = $this->decrypt($z, 'progstylysbyhamdiramadhan');
        $arr = explode("||", $zz);
        if(isset($arr[0])){ $key1 = $arr[0]; }
        if(isset($arr[1])){ $id = $arr[1]; }
        if(isset($arr[2])){ $key2 = $arr[2]; }  
        if($key1 != $key2) {
            session()->put('unsuccess', 'Token Salah');
            return back();
        } else {  
                /* Cari paten */
                $detail_berita = Berita::find($id); 
                $detail_berita->visit++;
                $detail_berita->save(); 
                return view('landing_page.berita.detail_berita', compact('detail_berita','detail_berita'));
            }  

    }



    public function decrypt($string, $key = '%key&')
    {
        $result = '';
        $string = str_replace("$$@$$", "+", $string);
        $string = base64_decode($string);
        for ($i = 0; $i < strlen($string); $i++) {
            $char = substr($string, $i, 1);
            $keychar = substr($key, ($i % strlen($key)) - 1, 1);
            $ordChar = ord($char);
            $ordKeychar = ord($keychar);
            $sum = $ordChar - $ordKeychar;
            $char = chr($sum);
            $result .= $char;
        }
        return $result;
    }
}