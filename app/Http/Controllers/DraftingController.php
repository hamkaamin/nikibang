<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Validator;
use App\Model\Cipta;
use App\Model\Paten;  
use App\Model\Prioritas_paten;  
use App\Model\Pemegang_paten; 
use App\Model\Konsultan_paten;  
use App\Model\Upload_paten;
use App\Model\Sub_jenis_cipta; 
use App\Model\Ipc;  
use App\Model\Inventor;  
use App\Model\Countries; 
use App\Model\Data_kuasa;  
use App\Model\PemegangHakcipta;
use DB;
use Webpatser\Uuid\Uuid;
use Alert;
use File;
use App\Model\Pencipta_cipta;
use App\Model\DataPemohon;
use App\Model\DataPrioritasPaten;
use App\Model\DataInventor;
use App\Model\DataKoresponden;
class DraftingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function simpan_drafting_paten(Request $request)
    {  
        // START DATA INVENTOR
        $nama_inventor = $request->get('arr_nama_inventor');
        $kewarganegaraan_inventor = $request->get('arr_kewarganegaraan_inventor');
        $alamat_inventor = $request->get('arr_alamat_inventor');
        $email_inventor = $request->get('arr_email_inventor');
        $telp_inventor = $request->get('arr_telp_inventor');
        // END DATA PRIORITAS

        // START DATA PRIORITAS 
        $nomor_prioritas = $request->get('arr_nomor_prioritas');
        $tanggal_prioritas = $request->get('arr_tanggal_prioritas');
        $negara_prioritas = $request->get('arr_negara_prioritas');
        // END DATA PRIORITAS

        $image = $request->file('select_file');
        $file_abstrak = $request->file('file_abstrak');
        $paten = new Paten();
        $validator = Validator::make($request->all(), [
            'select_file' => 'required|mimes:jpeg,png,jpg|max:1000',
            'file_abstrak' => 'max:5000',
        ],
        [ 
            'select_file.max' => 'Maximum File Thumbnial Harus 5MB.',
            'file_abstrak.max' => 'Maximum File Abstrak Harus 5MB.',
        ]);
        if ($validator->fails()) { 
            $msg = "";
            foreach ($validator->messages()->all() as $message) {
                $msg .= $message . ".
                ";
            }
            session()->put('statusTpaten', $msg); 
            return redirect()->back(); 
        }else{
            $paten->jenis_paten = $request->get('jenis_paten'); 
            $paten->nomor_pct = $request->get('nomor_pct'); 
            $paten->tanggal_pct = $request->get('tanggal_pct'); 
            $paten->tanggal_pengajuan = $request->get('tgl_pengajuan'); 
            $paten->nomor_ipc = $request->get('nomor_ipc');
            $paten->tanggal_publikasi = $request->get('tgl_publikasi'); 
            $paten->nomor_publikasi = $request->get('nomor_publikasi'); 
            $paten->kriteria_pemohon = $request->get('kriteria_pemohon'); 
            $paten->tipe_pemohon = $request->get('tipe_pemohon'); 
            $paten->nama = $request->get('judul'); 
            $paten->judul_inggris = $request->get('judul_inggris'); 
            $paten->klaim = $request->get('klaim');   
            $paten->jumlah_klaim = $request->get('jumlah_klaim'); 
            $paten->abstrak = $request->get('abstrak_indonesia');
            $paten->abstrak_inggris = $request->get('abstrak_inggris');
            $paten->nominal = $request->get('nominal');
            $paten->tahun_pembayaran_terakhir = $request->get('tahun_pembayaran_terakhir');
            $paten->tanggal_bayar = $request->get('tanggal_bayar');
            $paten->nomor_permohonan_induk = $request->get('nomor_permohonan_induk');
            $paten->tanggal_permohonan_induk = $request->get('tanggal_permohonan_induk');
            $paten->user_id = $request->get('user_id');
            $paten->save();

            $last2 = DB::table('paten')->orderBy('id', 'DESC')->first();
            $paten_id = 0; 
            $paten_id = $last2->id; 
            $paten_ids = $paten_id+1;

            $new_name = 'paten_'.$paten_ids.'_' . $image->getClientOriginalName();
            $image->move(('file_upload/patens'), $new_name); 

            if( $file_abstrak !=NULL)
            {
                $nama_file_abstrak = 'paten_'.$paten_ids.'_' . $file_abstrak->getClientOriginalName();
                $file_abstrak->move(('file_upload/patens/abstrak/'), $nama_file_abstrak); 

                $paten_abstrak = Paten::find($paten->id); 
                $paten_abstrak->file_abstrak = 'file_upload/patens/abstrak/' . $nama_file_abstrak;
                $paten_abstrak->save();
            }

            $patens = Paten::find($paten_id); 
            $patens->nama_file = 'file_upload/patens/' . $new_name;
            $patens->path_file = 'file_upload/patens/' . $new_name;  
            $patens->save();
            $paten2 = Paten::find($paten->id);
            $paten2->uuid = $this->getUUID($paten->id, $paten->created_at);
            $paten2->save();

        // START SAVE DATA PEMOHON

            $data_pemohon = new DataPemohon();
            $data_pemohon->nama_pemohon = $request->get('nama_pemohon');
            $data_pemohon->alamat_pemohon = $request->get('alamat_pemohon');
            $data_pemohon->nomor_telepon = $request->get('nomor_telepon');
            $data_pemohon->email = $request->get('email_pemohon');
            $data_pemohon->countries_id = $request->get('negara_id');
            $data_pemohon->paten_id = $paten->id;
            $data_pemohon->save();
        // END SAVE DATE PEMOHON

        // START SAVE DATA KORESPONDEN

            $data_koresponden = new DataKoresponden();
            $data_koresponden->nama_koresponden = $request->get('nama_koresponden');
            $data_koresponden->alamat_surat = $request->get('alamat_koresponden');
            $data_koresponden->nomor_telepon = $request->get('nomor_telepon');
            $data_koresponden->email = $request->get('email_koresponden');
            $data_koresponden->nama_badan_hukum = $request->get('nama_badan_hukum');
            $data_koresponden->paten_id = $paten->id;
            $data_koresponden->save();
        // END SAVE DATA KORESPONDEN 

        // START INSERT DATA INVENTOR
            for ($i = 1; $i < count($nama_inventor); $i++) { 
                $data_inventor = new DataInventor;
                $data_inventor->paten_id = $paten->id;
                $data_inventor->nama = $nama_inventor[$i];
                $data_inventor->alamat_inventor = $alamat_inventor[$i];
                $data_inventor->nomor_telepon = $telp_inventor[$i];
                $data_inventor->email = $email_inventor[$i];
                $data_inventor->kewarganegaraan = $kewarganegaraan_inventor[$i]; 
                $data_inventor->save();
            }
        // END INSERT DATA INVENTOR

        // START INSERT DATA INVENTOR
            for ($i = 1; $i < count($nomor_prioritas); $i++) { 
                $data_inventor = new DataPrioritasPaten;
                $data_inventor->paten_id = $paten->id;
                $data_inventor->nomor_prioritas = $nomor_prioritas[$i];
                $data_inventor->negara = $negara_prioritas[$i];
                $data_inventor->tanggal_prioritas = $tanggal_prioritas[$i]; 
                $data_inventor->save();
            }
        Alert::success('Berhasil', 'Berhasil ditambahkan'); 
        return redirect('/landing_drafting_paten');
        }
         
    }

    public function simpan_drafting_cipta(Request $request)
    {  
        $nama_cipta = $request->get('arr_nama_pencipta'); 
        $kewarganegaraan_pencipta = $request->get('arr_kewarganegaraan_pencipta'); 
        $alamat_pencipta = $request->get('arr_alamat_pencipta'); 
        $kota_pencipta = $request->get('arr_kota_pencipta'); 
        $kode_pos_pencipta = $request->get('arr_kode_pos_pencipta'); 
        $negara_pencipta = $request->get('arr_negara_pencipta');  
        $provinsi_pencipta = $request->get('arr_provinsi_pencipta');

        $nama_pemegang_cipta = $request->get('arr_nama_pemegang_cipta'); 
        $kewarganegaraan_pemegang_cipta = $request->get('arr_kewarganegaraan_pemegang_cipta');
        $alamat_pemegang_cipta = $request->get('arr_alamat_pemegang_cipta'); 
        $kota_pemegang_cipta = $request->get('arr_kota_pemegang_cipta'); 
        $kode_pos_pemegang_cipta = $request->get('arr_kode_pos_pemegang_cipta'); 
        $negara_pemegang_cipta = $request->get('arr_negara_pemegang_cipta');  
        $provinsi_pemegang_cipta = $request->get('arr_provinsi_pemegang_cipta'); 

        $kuasa = $request->input('kuasa');
        $konsultant = $request->input('konsultant'); 
        $image = $request->file('select_file');
        $file_surat_kuasa = $request->file('file_surat_kuasa'); 
        $file_akta_badan_hukum = $request->file('file_akta_badan_hukum');
        $file_ktp = $request->file('file_ktp');
        $file_npwp = $request->file('file_npwp');
        $file_surat_pernyataan = $request->file('file_surat_pernyataan');
        $file_contoh_ciptaan = $request->file('file_contoh_ciptaan');
        $file_bukti_pengalihan = $request->file('file_bukti_pengalihan'); 
        $file_uraian = $request->file('file_uraian');
        $validator = Validator::make($request->all(), [
            'select_file' => 'required|mimes:jpeg,png,jpg|max:5000',
            'file_surat_kuasa' => 'max:5000',
            'file_akta_badan_hukum' => 'max:5000',
            'file_npwp' => 'max:5000',
            'file_surat_pernyataan' => 'max:5000',
            'file_contoh_ciptaan' => 'max:5000',
            'file_bukti_pengalihan' => 'max:5000',
            'file_uraian' => 'max:5000',

        ],
        [ 
            'select_file.max' => 'Maximum File Thumbnail Harus 5MB.',
            'file_surat_kuasa.max' => 'Maximum File Surat Kuasa Harus 5MB.',
            'file_akta_badan_hukum.max' => 'Maximum File Akta Badan Hukum Harus 5MB.',
            'file_npwp.max' => 'Maximum File NPWP Harus 5MB.',
            'file_surat_pernyataan.max' => 'Maximum File Surat Pernyataan Harus 5MB.',
            'file_contoh_ciptaan.max' => 'Maximum File Contoh Ciptaan Harus 5MB.', 
            'file_bukti_pengalihan.max' => 'Maximum File Bukti Pengalihan Harus 5MB.', 
            'file_uraian.max' => 'Maximum File Uraian Harus 5MB.', 
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
            $cipta = new Cipta();
        $cipta->jenis_permohonan = $request->get('jenis_permohonan'); 
        $cipta->jenis_ciptaan_id = $request->get('jenis_ciptaan_id');  
        $cipta->sub_jenis_ciptaan_id = $request->get('sub_jenis_ciptaan_id'); 
        $cipta->nama = $request->get('nama_cipta');  
        $cipta->tanggal_diumumkan = $request->get('tanggal_diumumkan');    
        $cipta->country_id = $request->get('countries_id');    
        $cipta->kode_diumumkan = $request->get('kode_diumumkan'); 
        $cipta->uraian_ciptaan = $request->get('uraian');
        $cipta->link_ciptaan = $request->get('link_ciptaan');
        $cipta->is_kuasa = $kuasa;
        $cipta->is_konsultant= $konsultant; 
        $cipta->user_id = $request->get('user_id');
        $cipta->save();

        for ($i = 1; $i < count($nama_cipta); $i++) { 
            $data3 = new Pencipta_cipta;
            $data3->cipta_id = $cipta->id;
            $data3->nama_pencipta = $nama_cipta[$i];
            $data3->kewarganegaraan_pencipta = $kewarganegaraan_pencipta[$i];
            $data3->alamat_pencipta = $alamat_pencipta[$i];
            $data3->kota_pencipta = $kota_pencipta[$i];
            $data3->kode_pos_pencipta = $kode_pos_pencipta[$i];
            $data3->negara_pencipta = $negara_pencipta[$i];
            $data3->provinsi_pencipta = $provinsi_pencipta[$i]; 
            $data3->save();
        }

        for ($i = 1; $i < count($nama_pemegang_cipta); $i++) { 
            $data3 = new PemegangHakcipta;
            $data3->cipta_id = $cipta->id;
            $data3->nama_pemegang_cipta = $nama_pemegang_cipta[$i];
            $data3->kewarganegaraan_pemegang_cipta = $kewarganegaraan_pemegang_cipta[$i];
            $data3->alamat_pemegang_cipta = $alamat_pemegang_cipta[$i];
            $data3->kota_pemegang_cipta = $kota_pemegang_cipta[$i];
            $data3->kode_pos_pemegang_cipta = $kode_pos_pemegang_cipta[$i];
            $data3->negara_pemegang_cipta = $negara_pemegang_cipta[$i];
            $data3->provinsi_pemegang_cipta = $provinsi_pemegang_cipta[$i];  
            $data3->save();
        }   
        $last2 = DB::table('hak_cipta')->orderBy('id', 'DESC')->first();
        $cipta_id = 0; 
        $cipta_id = $last2->id; 
        $cipta_ids = $cipta_id+1;

        $new_name = 'cipta_'.$cipta_ids.'_' . $image->getClientOriginalName();
        $image->move(('file_upload/cipta'), $new_name); 
        if(!empty($file_uraian))
        { 
            $nama_file_uraian = 'uraian_'.$cipta_ids.'_' . $file_uraian->getClientOriginalName();
            $file_uraian->move(('file_upload/cipta/uraian'), $nama_file_uraian); 

            $cipta_uraian = Cipta::find($cipta->id); 
            $cipta_uraian->file_uraian = 'file_upload/cipta/uraian/' . $nama_file_uraian;
            $cipta_uraian->save();
        }
        $ciptas = Cipta::find($cipta_id); 
        if($file_surat_kuasa != NULL  )
        {
            $surat_kuasa = 'surat_kuasa_'.$cipta_ids.'_' . $file_surat_kuasa->getClientOriginalName();
            $file_surat_kuasa->move(('file_upload/cipta/surat_kuasa'), $surat_kuasa); 
            $ciptas->file_surat_kuasa = 'file_upload/cipta/surat_kuasa/' . $surat_kuasa;
        }
        if($file_akta_badan_hukum !=NULL){
             $akta_badan_hukum = 'akta_badan_hukum_'.$cipta_ids.'_' . $file_akta_badan_hukum->getClientOriginalName();
            $file_akta_badan_hukum->move(('file_upload/cipta/akta_badan_hukum/'), $akta_badan_hukum); 
            $ciptas->file_akta_badan_hukum = 'file_upload/cipta/akta_badan_hukum/' . $akta_badan_hukum;
        }
        if( $file_ktp != NULL){ 
            $ktp = 'ktp_'.$cipta_ids.'_' . $file_ktp->getClientOriginalName();
            $file_ktp->move(('file_upload/cipta/ktp/'), $ktp); 
            $ciptas->file_ktp = 'file_upload/cipta/ktp/' . $ktp;
        }
        if($file_npwp != NULL){ 
            $npwp = 'npwp'.$cipta_ids.'_' . $file_npwp->getClientOriginalName();
            $file_npwp->move(('file_upload/cipta/npwp/'), $npwp); 
            $ciptas->file_npwp = 'file_upload/cipta/npwp/' . $npwp;
        }
        if($file_surat_pernyataan != NULL){
            $surat_pernyataan = 'surat_pernyataan'.$cipta_ids.'_' . $file_surat_pernyataan->getClientOriginalName();
            $file_surat_pernyataan->move(('file_upload/cipta/surat_pernyataan/'), $surat_pernyataan);
            $ciptas->file_surat_pernyataan = 'file_upload/cipta/surat_pernyataan/' . $surat_pernyataan;
        }
        if($file_contoh_ciptaan != NULL){
            $contoh_ciptaan = 'contoh_ciptaan'.$cipta_ids.'_' . $file_contoh_ciptaan->getClientOriginalName();
            $file_contoh_ciptaan->move(('file_upload/cipta/contoh_ciptaan/'), $contoh_ciptaan);
            $ciptas->file_contoh_ciptaan = 'file_upload/cipta/contoh_ciptaan/' . $contoh_ciptaan;
        }
        if($file_bukti_pengalihan != NULL)
        {
            $bukti_pengalihan = 'bukti_pengalihan'.$cipta_ids.'_' . $file_bukti_pengalihan->getClientOriginalName();
            $file_bukti_pengalihan->move(('file_upload/cipta/bukti_pengalihan/'), $bukti_pengalihan); 
            $ciptas->file_bukti_pengalihan = 'file_upload/cipta/bukti_pengalihan/' . $bukti_pengalihan;
        } 
        $ciptas->nama_file = 'file_upload/cipta/' . $new_name;
        $ciptas->path_file = 'file_upload/cipta/' . $new_name;  
        
        $ciptas->save();
        $cipta2 = Cipta::find($cipta->id);
        $cipta2->uuid = $this->getUUID($cipta->id, $cipta->created_at);
        $cipta2->save();

        $data_kuasa = new Data_kuasa();
        $data_kuasa->nama_kuasa = $request->get('nama_kuasa');
        $data_kuasa->alamat_kuasa = $request->get('alamat_kuasa');
        $data_kuasa->kode_tempat_tinggal = $request->get('kode_tempat_tinggal');
        $data_kuasa->provinsi_id = $request->get('provinsi_id');
        $data_kuasa->kode_pos = $request->get('kode_pos_kuasa');
        $data_kuasa->email_kuasa = $request->get('email_kuasa');
        $data_kuasa->melalui_konsultant = $request->get('melalui_konsultant');
        $data_kuasa->cipta_id = $cipta->id;
        $data_kuasa->save();   

        Alert::success('Berhasil', 'Berhasil ditambahkan'); 
        return redirect('/landing_drafting_cipta'); 
        } 
    }

    public function simpan_cipta_ubah(Request $request,$id)
    { 
        $image = $request->file('select_file');
        $validation = Validator::make($request->all(), [
            'select_file' => 'required|mimes:jpeg,png,jpg|max:2048'
        ]);

        if ($validation->passes()) { 
            $cipta = Cipta::find($id); 
            $cipta->nomor_pencatatan = $request->get('nomor_pencatatan'); 
            $cipta->tanggal_pencatatan = $request->get('tanggal_pencatatan');  
            $cipta->status = $request->get('status_cipta'); 
            $cipta->nama = $request->get('nama_cipta');  
            $cipta->tanggal_permohonan = $request->get('tanggal_permohonan');    
            $cipta->tanggal_end_perlindungan = $request->get('tanggal_end_perlindungan'); 
            $cipta->uraian_ciptaan = $request->get('uraian');
            if(File::exists($cipta->nama_file)) {
                File::delete($cipta->nama_file);
            }
            $new_name = 'cipta_'.$id.'_' . $image->getClientOriginalName();
            $image->move(('file_upload/cipta'), $new_name);  
            $cipta->nama_file = 'file_upload/cipta/' . $new_name;
            $cipta->path_file = 'file_upload/cipta/' . $new_name;
            $cipta->uuid = $this->getUUID($cipta->id, $cipta->updated_at);
            $cipta->save();
        }
        else{
            $cipta = Cipta::find($id); 
            $cipta->nomor_pencatatan = $request->get('nomor_pencatatan'); 
            $cipta->tanggal_pencatatan = $request->get('tanggal_pencatatan');  
            $cipta->status = $request->get('status_cipta'); 
            $cipta->nama = $request->get('nama_cipta');  
            $cipta->tanggal_permohonan = $request->get('tanggal_permohonan');    
            $cipta->tanggal_end_perlindungan = $request->get('tanggal_end_perlindungan'); 
            $cipta->uraian_ciptaan = $request->get('uraian'); 
            $cipta->uuid = $this->getUUID($cipta->id, $cipta->updated_at);
            $cipta->save();
        }
        Alert::success('Berhasil', 'Berhasil ditambahkan'); 
        return redirect('/landing_drafting_cipta');
    } 

    public function delete_drafting_cipta(Request $request)
    {
        $id = $request->get('id'); 
        $cipta = Cipta::find($id);
        $cipta->delete(); 
        Alert::success('Berhasil', 'Data Berhasil Dihapus'); 
        return redirect('/landing_drafting_cipta');
    }

    public function div_jenis_ciptaan(Request $request)
    { 
        $jenis_cipta_id = $request->jenis_ciptaan_id; 
        $sub_jenis_cipta = Sub_jenis_cipta::where('jenis_ciptaan_id','=',$jenis_cipta_id)->get(); 
        $str='';
        $str .= '<option value="0"> -- Tampilkan Semua --  </option>';
        foreach($sub_jenis_cipta as $r){
           $str .= '<option value="'.$r->id.'"> '.$r->nama.'</option>';
        } 
        echo $str;
    }

    public function simpan_drafting_paten_ubah(Request $request,$id)
    {  
        $image = $request->file('select_file');
        $paten = Paten::find($id);
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
        $paten->user_id = $request->get('user_id');
        if(File::exists($paten->nama_file)) {
            File::delete($paten->nama_file);
        } 
        $new_name = 'paten_'.$paten->id.'_' . $image->getClientOriginalName();
        $image->move(('file_upload/patens'), $new_name);
        $paten->nama_file = 'file_upload/patens/' . $new_name;
        $paten->path_file = 'file_upload/patens/' . $new_name; 
        $paten->uuid = $this->getUUID($paten->id, $paten->updated_at); 
        $paten->save(); 
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
        $paten->user_id = $request->get('user_id');
        $paten->uuid = $this->getUUID($paten->id, $paten->updated_at);
        $paten->save(); 
        }
        Alert::success('Berhasil', 'Berhasil ditambahkan'); 
        return redirect('/landing_drafting_paten');
    }

    public function add_list_pencipta(Request $request)
    {
        $nama_pencipta = $request->nama_pencipta;
        $kewarganegaraan_pencipta = $request->kewarganegaraan_pencipta;
        $alamat_pencipta = $request->alamat_pencipta;
        $kota_pencipta = $request->kota_pencipta;
        $kode_pos_pencipta = $request->kode_pos_pencipta;
        $negara_pencipta = $request->negara_pencipta;
        $provinsi_pencipta = $request->provinsi_pencipta; 
        $form_id = $request->form_id; 
        $arr_nama_pencipta = $request->arr_nama_pencipta;
        $arr_kewarganegaraan_pencipta = $request->arr_kewarganegaraan_pencipta;
        $arr_alamat_pencipta = $request->arr_alamat_pencipta;
        $arr_kota_pencipta = $request->arr_kota_pencipta;
        $arr_kode_pos_pencipta = $request->arr_kode_pos_pencipta;
        $arr_negara_pencipta = $request->arr_negara_pencipta;
        $arr_provinsi_pencipta = $request->arr_provinsi_pencipta;

        $arr_detail = array();

        $sts = 'tidak';
        $objpid = [];
        $strId = '';
        $no = 0;
        for ($i = 1; $i < count($arr_nama_pencipta); $i++) {   
            $objpid[] = $arr_nama_pencipta[$i]['value'];
            $arr_detail[$arr_nama_pencipta[$i]['value']] = array('nama_pencipta' => $arr_nama_pencipta[$i]['value'], 'kewarganegaraan_pencipta' => $arr_kewarganegaraan_pencipta[$i]['value'], 'alamat_pencipta' => $arr_alamat_pencipta[$i]['value'], 'kota_pencipta' => $arr_kota_pencipta[$i]['value'], 'kode_pos_pencipta' => $arr_kode_pos_pencipta[$i]['value'], 'negara_pencipta' => $arr_negara_pencipta[$i]['value'], 'provinsi_pencipta' => $arr_provinsi_pencipta[$i]['value']);
        }
    

            $arr_detail[$nama_pencipta] = array('nama_pencipta' => $nama_pencipta,'kewarganegaraan_pencipta' => $kewarganegaraan_pencipta, 'alamat_pencipta' => $alamat_pencipta, 'kota_pencipta' => $kota_pencipta, 'kode_pos_pencipta' => $kode_pos_pencipta, 'negara_pencipta' => $negara_pencipta, 'provinsi_pencipta' => $provinsi_pencipta); 

            // $data_p = Produk::whereIn('id', $objpid)->orderByRaw('FIELD(id, '.$strId.')')->get(); 
            return view('landing_page.drafting.cipta.tabel_detail_pencipta',compact('arr_detail','nama_pencipta'));
          
    }
    public function add_list_pemegang_cipta(Request $request)
    {
        $nama_pemegang_cipta = $request->nama_pemegang_cipta;
        $kewarganegaraan_pemegang_cipta = $request->kewarganegaraan_pemegang_cipta;
        $alamat_pemegang_cipta = $request->alamat_pemegang_cipta;
        $kota_pemegang_cipta = $request->kota_pemegang_cipta;
        $kode_pos_pemegang_cipta = $request->kode_pos_pemegang_cipta;
        $negara_pemegang_cipta = $request->negara_pemegang_cipta;
        $provinsi_pemegang_cipta = $request->provinsi_pemegang_cipta; 
        $email_pemegang_cipta = $request->email_pemegang_cipta;  
        $telp_pemegang_cipta = $request->telp_pemegang_cipta;  
        $form_id = $request->form_id; 
        $arr_nama_pemegang_cipta = $request->arr_nama_pemegang_cipta;
        $arr_kewarganegaraan_pemegang_cipta = $request->arr_kewarganegaraan_pemegang_cipta;
        $arr_alamat_pemegang_cipta = $request->arr_alamat_pemegang_cipta;
        $arr_kota_pemegang_cipta = $request->arr_kota_pemegang_cipta;
        $arr_kode_pos_pemegang_cipta = $request->arr_kode_pos_pemegang_cipta;
        $arr_negara_pemegang_cipta = $request->arr_negara_pemegang_cipta;
        $arr_provinsi_pemegang_cipta = $request->arr_provinsi_pemegang_cipta;
        $arr_email_pemegang_cipta = $request->arr_email_pemegang_cipta; 
        $arr_telp_pemegang_cipta = $request->arr_telp_pemegang_cipta; 

        $arr_detail = array();

        $sts = 'tidak';
        $objpid = [];
        $strId = '';
        $no = 0;
        for ($i = 1; $i < count($arr_nama_pemegang_cipta); $i++) {   
            $objpid[] = $arr_nama_pemegang_cipta[$i]['value'];
            $arr_detail[$arr_nama_pemegang_cipta[$i]['value']] = array('nama_pemegang_cipta' => $arr_nama_pemegang_cipta[$i]['value'], 'kewarganegaraan_pemegang_cipta' => $arr_kewarganegaraan_pemegang_cipta[$i]['value'], 'alamat_pemegang_cipta' => $arr_alamat_pemegang_cipta[$i]['value'], 'kota_pemegang_cipta' => $arr_kota_pemegang_cipta[$i]['value'], 'kode_pos_pemegang_cipta' => $arr_kode_pos_pemegang_cipta[$i]['value'], 'negara_pemegang_cipta' => $arr_negara_pemegang_cipta[$i]['value'], 'provinsi_pemegang_cipta' => $arr_provinsi_pemegang_cipta[$i]['value']);
        }
    

            $arr_detail[$nama_pemegang_cipta] = array('nama_pemegang_cipta' => $nama_pemegang_cipta,'kewarganegaraan_pemegang_cipta' => $kewarganegaraan_pemegang_cipta, 'alamat_pemegang_cipta' => $alamat_pemegang_cipta, 'kota_pemegang_cipta' => $kota_pemegang_cipta, 'kode_pos_pemegang_cipta' => $kode_pos_pemegang_cipta, 'negara_pemegang_cipta' => $negara_pemegang_cipta, 'provinsi_pemegang_cipta' => $provinsi_pemegang_cipta); 
 
            // $data_p = Produk::whereIn('id', $objpid)->orderByRaw('FIELD(id, '.$strId.')')->get(); 
            return view('landing_page.drafting.cipta.tabel_detail_pemegang_cipta',compact('arr_detail','nama_pemegang_cipta'));
          
    }

    // START ARRAY PATEN
    public function add_list_inventor(Request $request)
    {
        $nama_inventor = $request->nama_inventor;
        $kewarganegaraan_inventor = $request->kewarganegaraan_inventor;
        $alamat_inventor = $request->alamat_inventor;
        $email_inventor = $request->email_inventor;
        $telp_inventor = $request->telp_inventor; 
        $form_id = $request->form_id; 
        $arr_nama_inventor = $request->arr_nama_inventor;
        $arr_kewarganegaraan_inventor = $request->arr_kewarganegaraan_inventor;
        $arr_alamat_inventor = $request->arr_alamat_inventor;
        $arr_email_inventor = $request->arr_email_inventor;
        $arr_telp_inventor = $request->arr_telp_inventor; 

        $arr_detail = array();

        $sts = 'tidak';
        $objpid = [];
        $strId = '';
        $no = 0;
        for ($i = 1; $i < count($arr_nama_inventor); $i++) {   
            $objpid[] = $arr_nama_inventor[$i]['value'];
            $arr_detail[$arr_nama_inventor[$i]['value']] = array('nama_inventor' => $arr_nama_inventor[$i]['value'], 'kewarganegaraan_inventor' => $arr_kewarganegaraan_inventor[$i]['value'], 'alamat_inventor' => $arr_alamat_inventor[$i]['value'], 'email_inventor' => $arr_email_inventor[$i]['value'], 'telp_inventor' => $arr_telp_inventor[$i]['value']);
        }
    

            $arr_detail[$nama_inventor] = array('nama_inventor' => $nama_inventor,'kewarganegaraan_inventor' => $kewarganegaraan_inventor, 'alamat_inventor' => $alamat_inventor, 'email_inventor' => $email_inventor, 'telp_inventor' => $telp_inventor); 

            // $data_p = Produk::whereIn('id', $objpid)->orderByRaw('FIELD(id, '.$strId.')')->get(); 
            return view('landing_page.drafting.paten.tabel_detail_inventor',compact('arr_detail','nama_inventor'));
          
    }

    public function add_list_prioritas(Request $request)
    {
        $negara_prioritas = $request->negara_prioritas;
        $tanggal_prioritas = $request->tanggal_prioritas;
        $nomor_prioritas = $request->nomor_prioritas; 
        $form_id = $request->form_id; 
        $arr_nomor_prioritas = $request->arr_nomor_prioritas;
        $arr_negara_prioritas = $request->arr_negara_prioritas;
        $arr_tanggal_prioritas = $request->arr_tanggal_prioritas; 

        $arr_detail = array();

        $sts = 'tidak';
        $objpid = [];
        $strId = '';
        $no = 0;
        for ($i = 1; $i < count($arr_nomor_prioritas); $i++) {   
            $objpid[] = $arr_nomor_prioritas[$i]['value'];
            $arr_detail[$arr_nomor_prioritas[$i]['value']] = array('nomor_prioritas' => $arr_nomor_prioritas[$i]['value'], 'negara_prioritas' => $arr_negara_prioritas[$i]['value'], 'tanggal_prioritas' => $arr_tanggal_prioritas[$i]['value']);
        }
    

            $arr_detail[$nomor_prioritas] = array('nomor_prioritas' => $nomor_prioritas,'negara_prioritas' => $negara_prioritas, 'tanggal_prioritas' => $tanggal_prioritas); 

            // $data_p = Produk::whereIn('id', $objpid)->orderByRaw('FIELD(id, '.$strId.')')->get(); 
            return view('landing_page.drafting.paten.tabel_detail_prioritas',compact('arr_detail','nomor_prioritas'));
    }
       
    // END ARRAY PATEN


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
