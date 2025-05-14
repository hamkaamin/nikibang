@extends('layouts.landing_page')

@section('tempat_content')
@include('include.function')  
@include('sweetalert::alert') 
<style>
.collapsible {
  border-radius: 10px;
  background-image: linear-gradient(to right, #4776E6 0%, #8E54E9 51%, #4776E6 100%);
  color: white;
  cursor: pointer;
  padding: 10px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

.active, .collapsible:hover {
    background-image: linear-gradient(to right, #4776E6 0%, #8E54E9 51%, #4776E6 100%)
}

.collapsible:after {
  content: '\002B';
  color: white;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.active:after {
  content: "\2212";
}

.content {
  padding: 0 18px;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out; 
}

.alert {
          padding: 20px;
          background-color: #f44336;
          color: white;
          opacity: 1;
          transition: opacity 0.6s;
          margin-bottom: 15px;
      }

      .alert.success {background-color: #04AA6D;}
      .alert.info {background-color: #2196F3;}
      .alert.warning {background-color: #ff9800;}

      .closebtn {
          margin-left: 15px;
          color: white;
          font-weight: bold;
          float: right;
          font-size: 22px;
          line-height: 20px;
          cursor: pointer;
          transition: 0.3s;
      }

      .closebtn:hover {
          color: black;
      }
 
</style>
<div role="main" class="main" id="main">

    <section class="page-header page-header-lg custom-bg-color-light-1 border-0 m-0" style="margin-bottom: 0px; padding-bottom: 20px">
        <div class="container position-relative pt-5 pb-4 mt-5">
            <div class="custom-circle custom-circle-wrapper custom-circle-big custom-circle-pos-1 custom-circle-pos-1-1 appear-animation" data-appear-animation="expandInWithBlur" data-appear-animation-delay="900" data-appear-animation-duration="2s">
                <div class="bg-color-tertiary rounded-circle w-100 h-100" data-plugin-float-element data-plugin-options="{'startPos': 'bottom', 'speed': 0.5, 'transition': true, 'transitionDuration': 1000}"></div>   
            </div>
            <div class="custom-circle custom-circle-medium custom-circle-pos-2 custom-circle-pos-2-2 appear-animation" data-appear-animation="expandInWithBlur" data-appear-animation-delay="1450" data-appear-animation-duration="2s">
                <div class="custom-bg-color-grey-2 rounded-circle w-100 h-100" data-plugin-float-element data-plugin-options="{'startPos': 'bottom', 'speed': 0.2, 'transition': true, 'transitionDuration': 2000}"></div>
            </div>
            <div class="custom-circle custom-circle-medium custom-circle-pos-3 custom-circle-pos-3-3 appear-animation" data-appear-animation="expandIn" data-appear-animation-delay="1300">
                <div class="custom-bg-color-grey-2 rounded-circle w-100 h-100" data-plugin-float-element data-plugin-options="{'startPos': 'bottom', 'speed': 0.3, 'transition': true, 'transitionDuration': 1000}"></div>
            </div>
            <div class="custom-circle custom-circle-small custom-circle-pos-4 custom-circle-pos-4-4 appear-animation" data-appear-animation="expandIn" data-appear-animation-delay="1600">
                <div class="custom-bg-color-grey-2 rounded-circle w-100 h-100" data-plugin-float-element data-plugin-options="{'startPos': 'bottom', 'speed': 0.6, 'transition': true, 'transitionDuration': 500}"></div>
            </div>
            <div class="custom-circle custom-circle-medium custom-circle-pos-5 custom-circle-pos-5-5 appear-animation" data-appear-animation="expandInWithBlur" data-appear-animation-delay="1050" data-appear-animation-duration="2s">
                <div class="bg-color-secondary rounded-circle w-100 h-100" data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.2, 'transition': true, 'transitionDuration': 2000}"></div>
            </div>
            <div class="custom-circle custom-circle-medium custom-circle-pos-6 custom-circle-pos-6-6 appear-animation" data-appear-animation="expandInWithBlur" data-appear-animation-delay="1200" data-appear-animation-duration="2s">
                <div class="custom-bg-color-grey-2 rounded-circle w-100 h-100" data-plugin-float-element data-plugin-options="{'startPos': 'bottom', 'speed': 0.8, 'transition': true, 'transitionDuration': 500}"></div>
            </div>
            <div class="row p-relative z-index-1">
                <div class="col">
                    <div class="overflow-hidden mb-4"> 
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section bg-color-light position-relative border-0 pt-3 m-0">
        <svg class="custom-page-header-curved-top-1" width="100%" height="700" xmlns="http://www.w3.org/2000/svg">
            <path transform="rotate(-3.1329219341278076 1459.172607421877,783.5322875976566) " d="m-12.54488,445.11701c0,0 2.16796,-1.48437 6.92379,-3.91356c4.75584,-2.42918 12.09956,-5.80319 22.45107,-9.58247c20.70303,-7.55856 53.43725,-16.7382 101.56202,-23.22255c48.12477,-6.48434 111.6401,-10.27339 193.90533,-7.05074c41.13262,1.61132 88.20271,5.91306 140.3802,12.50726c230.96006,32.89734 314.60609,102.57281 635.26547,59.88645c320.65938,-42.68635 452.47762,-118.72154 843.58759,3.72964c391.10997,122.45118 553.23416,-82.15958 698.49814,-47.66481c-76.25064,69.23438 407.49874,281.32592 331.2481,350.5603c-168.91731,29.52009 85.02254,247.61162 -83.89478,277.13171c84.07062,348.27313 -2948.95065,-242.40222 -2928.39024,-287.84045" stroke-width="0" stroke="#000" fill="#FFF" id="svg_2"/>
        </svg>
        <div class="custom-dots-rect-3" style="background-image: url(<?= asset('assets_landing/img/demos/seo-2/dots-group-3.png'); ?> );"></div> 
        <div class="container">
            <div class="row"> 
                @if (session()->has('statusTpaten'))
                <div class="col-md-12">
                <div class="alert">
                  <span class="closebtn">&times;</span>  
                  <strong>Gagal!</strong> {{ session()->get('statusTpaten') }}
                          {{session()->forget('statusTpaten')}}
                </div>
                </div>
                @endif
                <div class="col-lg-12 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">
                    <article> 
                        <form class="form-horizontal" id="frm_drafting_paten" method="post" action="{{ route('simpan_drafting_paten') }}" enctype="multipart/form-data" > 
                        <div class="col-md-12">  
                        </div>
                        <div class="card border-0 border-radius-0 mb-5 box-shadow-1">
                            <div class="card-body z-index-1">
                                <div class="card-body p-0">
                                    <button type="button" class="collapsible"><b>Drafting</b></button>
                                    <div class="content">
                                      <button type="button" style="display:none;" class="btn bg-slate btn-grad-create btn-sm" onclick="$('#divDrafting').show(500);">
                                        <b><i class="icon-add"></i></b> &nbsp Drafting Paten
                                    </button>
                                    <br><br>
                                    <div id="divDrafting">
                                        {{ csrf_field() }}
                                        <div class="row mb-12 ml-1"> 
                                            <div class="col-sm-10 font-weight-bold"> 
                                                Isi Drafting Disini
                                            </div>
                                            <div class="col-sm-2" style="display:none;">
                                                <label class="control-arrow" title="Tutup" onclick="$('#divDrafting').hide(500);" style="cursor: pointer;">
                                                    <i class="icon-close2"></i>
                                                </label>
                                                <a class="control-arrow" data-toggle="collapse" data-target="#data" title="Hide Blade" style="display: none;">
                                                    <i class="icon-circle-down2"></i>
                                                </a>
                                            </div> 
                                        </div>
                                        <hr class="my-2">
                                        <div class="row mb-5 ml-1">
                                            <div class="col-sm-2 font-weight-bold"> 
                                                Thumbnail Foto : <span style="color:red"><b>*</b></span> 
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="file" placeholder="Masukkan Foto Anda" class="form-control" name="select_file" id="select_file">
                                            </div> 

                                            <div class="col-sm-2 font-weight-bold"> 
                                                Jenis Paten : <span style="color:red"><b>*</b></span> 
                                            </div>
                                            <div class="col-sm-3">   
                                                <select name="jenis_paten" id="jenis_paten"  data-placeholder="Jenis Paten" class="form-control select">
                                                    <option value="0">-- Tampilkan Semua --</option> 
                                                    <option value="1">PATEN</option>  
                                                    <option value="2">PATEN SEDERHANA</option>
                                                    <option value="3">PATEN PCT</option>  
                                                </select>
                                            </div> 
                                        </div>
                                        <div class="pct" style="display:none;"> 
                                        <div class="row mb-5 ml-1">
                                            <div class="col-sm-2 font-weight-bold"> 
                                                Nomor PCT :  
                                            </div>
                                            <div class="col-sm-3">  
                                                <input placeholder="Masukkan Nomor PCT" type="text" class="form-control" name="nomor_pct" id="nomor_pct">
                                            </div> 
                                            
                                            <div class="col-sm-2 font-weight-bold"> 
                                                Tanggal PCT :  
                                            </div>
                                            <div class="col-sm-3">  
                                                <input placeholder="Masukkan Tanggal Pencatatan" type="date" class="form-control required" name="tanggal_pct" id="tanggal_pct" >
                                            </div> 
                                        </div>   
                                        <div class="row mb-5 ml-1">
                                            <div class="col-sm-2 font-weight-bold"> 
                                                Tanggal Pengajuan :  
                                            </div>
                                            <div class="col-sm-3">  
                                                <input placeholder="Masukkan Nama Hak Cipta" type="text" class="form-control" name="tgl_pengajuan" value="<?= date('Y-m-d'); ?>" id="tgl_pengajuan" >
                                            </div>

                                            <div class="col-sm-2 font-weight-bold"> 
                                                Nomor IPC :  
                                            </div>
                                            <div class="col-sm-3">  
                                               <input type="date" placeholder="Masukkan Nomor IPC" class="form-control" name="nomor_ipc" id="nomor_ipc">
                                            </div>
                                        </div> 
                                        <div class="row mb-5 ml-1">
                                            <div class="col-sm-2 font-weight-bold"> 
                                                Tanggal Publikasi :  
                                            </div>
                                            <div class="col-sm-3">  
                                                <input placeholder="Masukkan Nama Hak Cipta" type="text" class="form-control" name="tgl_publikasi" value="<?= date('Y-m-d'); ?>" id="tgl_publikasi">
                                            </div> 
                                            <div class="col-sm-2 font-weight-bold"> 
                                                Nomor Publikasi :  
                                            </div>
                                            <div class="col-sm-3">  
                                               <input type="text" placeholder="Masukkan Nomor Publikasi" class="form-control" name="nomor_publikasi" id="nomor_publikasi">
                                            </div>
                                        </div>  
                                        </div>

                                        <div class="row mb-5 ml-1">
                                            <div class="col-sm-2 font-weight-bold"> 
                                                Kriteria Pemohon : <span style="color:red"><b>*</b></span>
                                            </div>
                                            <div class="col-sm-3">  
                                                <select name="kriteria_pemohon" id="kriteria_pemohon"  data-placeholder="Jenis Paten" class="form-control select"> 
                                                    <option value="1">Usaha Mikro, Usaha Kecil, Lembaga Pendidikan, dan Lembaga Penelitian dan Pengembangan Pemerintah</option>   
                                                </select>
                                            </div> 
                                            <div class="col-sm-2 font-weight-bold"> 
                                                Tipe Pemohon : <span style="color:red"><b>*</b></span>
                                            </div>
                                            <div class="col-sm-3">  
                                                <select name="tipe_pemohon" id="tipe_pemohon"  data-placeholder="Jenis Paten" class="form-control select"> 
                                                    <option value="1">UMK</option>  
                                                    <option value="2">Litbang</option>
                                                    <option value="3">Lembaga Pendidikan</option>  
                                                </select>
                                            </div> 
                                        </div>  
                                        <br><br><br><br><br><br><br><br><br> 

                                        <input type="hidden" value="{{Auth::user()->id}}" name="user_id"> 
                                    </div>
                                    </div> 
                                    
                                </div>
                            </div>
                        </div>

                        <div class="card border-0 border-radius-0 mb-5 box-shadow-1">

                            <div class="card-body z-index-1">
                                <div class="card-body p-0">
                                    <button type="button" class="collapsible">Data Pemohon</button>
                                    <div class="content">
                                      <hr class="my-2">
                                        <div class="row mb-5 ml-1">
                                            <div class="col-sm-2 font-weight-bold"> 
                                                Nama Pemohon : <span style="color:red"><b>*</b></span> 
                                            </div>
                                            <div class="col-sm-3">  
                                                <input placeholder="Masukkan Pemohon" type="text" class="form-control required" name="nama_pemohon" id="nama_pemohon"><br>
                                            </div>

                                            <div class="col-sm-2 font-weight-bold"> 
                                                Alamat Pemohon : <span style="color:red"><b>*</b></span> 
                                            </div>
                                            <div class="col-sm-3">   
                                               <textarea class="form-control" name="alamat_pemohon" id="alamat_pemohon" placeholder="Alamat Kuasa"></textarea><br>
                                            </div>

                                        </div>
                                        <!-- <div class="kuasa_alam" style="display:none;"> -->
                                        <div class="row mb-5 ml-1">
                                            <div class="col-sm-2 font-weight-bold"> 
                                                Nomor Telepon : <span style="color:red"><b>*</b></span>
                                            </div>
                                            <div class="col-sm-3">  
                                                <input placeholder="Masukkan Nama Kuasa" type="text" class="form-control required" name="nomor_telepon" id="nomor_telepon">
                                            </div>

                                            <div class="col-sm-2 font-weight-bold"> 
                                                Email Pemohon : <span style="color:red"><b>*</b></span>
                                            </div>
                                            <div class="col-sm-3">  
                                                <input placeholder="Masukkan Email Pemohon" type="email" class="form-control required" name="email_pemohon" id="email_pemohon">
                                            </div>
                                        </div>
                                        <div class="row mb-5 ml-1" >  
                                            <div class="col-sm-2 font-weight-bold"> 
                                                Kewarganegaraan : <span style="color:red"><b>*</b></span>
                                            </div>
                                            <div class="col-sm-3">  
                                               <select name="negara_id" id="negara_id" data-placeholder="Provinsi Kuasa" class="form-control select">
                                                   @foreach($data_negara as $r)
                                                   <option value="{{$r->id}}">{{$r->en_short_name}}</option>
                                                   @endforeach
                                               </select>
                                            </div> 
                                        </div>

                                        <div class="row mb-5 ml-1">
                                            <div class="col-sm-2 font-weight-bold"> 
                                                Nomor Permohonan Induk : <span style="color:red"><b>*</b></span> 
                                            </div>
                                            <div class="col-sm-3"> 
                                                <input type="text" placeholder="Masukkan Nomor Permohonan Induk" class="form-control" name="nomor_permohonan_induk" id="nomor_permohonan_induk">
                                            </div>

                                            <div class="col-sm-2 font-weight-bold"> 
                                                Tanggal Penerimaan Permohonan Induk : <span style="color:red"><b>*</b></span> 
                                            </div>
                                            <div class="col-sm-3" >
                                                <input type="date" placeholder="Masukkan Foto Anda" class="form-control" name="tanggal_permohonan_induk" id="tanggal_permohonan_induk">
                                            </div>
                                        </div>         
                                  </div>
                                </div>
                            </div>
                        </div>
 

                        <div class="card border-0 border-radius-0 mb-5 box-shadow-1">

                            <div class="card-body z-index-1">
                                <div class="card-body p-0">
                                    <button type="button" class="collapsible">Data Korespondensi</button>
                                    <div class="content">
                                      <hr class="my-2"> 
                                        <!-- /*<div class="kuasa_alam" style="display:none;">*/ -->
                                        <div class="row mb-5 ml-1">
                                            <div class="col-sm-2 font-weight-bold"> 
                                                Nama Koresponden : <span style="color:red"><b>*</b></span>
                                            </div>
                                            <div class="col-sm-3">  
                                                <input placeholder="Masukkan Nama Koresponden" type="text" class="form-control required" name="nama_koresponden" id="nama_koresponden">
                                            </div> 
                                            
                                            <div class="col-sm-2 font-weight-bold"> 
                                                Alamat Surat Menyurat : <span style="color:red"><b>*</b></span>
                                            </div>
                                            <div class="col-sm-3">  
                                                <textarea placeholder="Alamat Lengkap,Ex: Rt/Rw 001/002, Kel/Desa Banyuwngi, Kec. Puloampel, Kab. Serang" class="form-control" name="alamat_koresponden" id="alamat_koresponden"></textarea>
                                            </div>
                                        </div>
                                        <div class="row mb-5 ml-1" >
                                            <div class="col-sm-2 font-weight-bold"> 
                                                Nomor Telepon : <span style="color:red"><b>*</b></span>
                                            </div>
                                            <div class="col-sm-3">  
                                                <input placeholder="Masukkan Nomor Telepon Koresponden" type="text" class="form-control required" name="nomor_telepon_koresponden" id="nomor_telepon_koresponden"> 
                                            </div>

                                            <div class="col-sm-2 font-weight-bold"> 
                                                Email : <span style="color:red"><b>*</b></span>
                                            </div>
                                            <div class="col-sm-3">   
                                                <input placeholder="Masukkan Email" type="email" class="form-control required" name="email_koresponden" id="email_koresponden">
                                            </div> 
                                        </div>  

                                        <div class="row mb-5 ml-1">
                                            <div class="col-sm-2 font-weight-bold"> 
                                                Nama Badan Hukum : 
                                            </div>
                                            <div class="col-sm-3">  
                                                <input placeholder="Masukkan Badan Hukum" type="text" class="form-control" name="nama_badan_hukum" id="nama_badan_hukum">
                                            </div> 
                                        </div>  
                                        
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="card border-0 border-radius-0 mb-5 box-shadow-1">

                            <div class="card-body z-index-1">
                                <div class="card-body p-0">
                                    <button type="button" class="collapsible">Data Inventor</button>
                                    <div class="content">
                                      <hr class="my-2"> 
                                        <!-- /*<div class="kuasa_alam" style="display:none;">*/ -->
                                        <div class="row mb-5 ml-1">
                                            <div class="col-sm-2 font-weight-bold"> 
                                                Nama Inventor : <span style="color:red"><b>*</b></span>
                                            </div>
                                            <div class="col-sm-3">  
                                                <input placeholder="Masukkan Nama Inventor" type="text" class="form-control required" name="nama_inventor" id="nama_inventor">
                                            </div>

                                            <div class="col-sm-2 font-weight-bold"> 
                                                Kewarganegeraan : <span style="color:red"><b>*</b></span>
                                            </div>
                                            <div class="col-sm-3">   
                                                <select name="kewarganegaraan_inventor" id="kewarganegaraan_inventor" data-placeholder="Negara" class="form-control select">
                                                   @foreach($data_negara as $r)
                                                   <option value="{{$r->en_short_name}}">{{$r->en_short_name}}</option>
                                                   @endforeach
                                               </select>
                                            </div> 
                                        </div>
                                        <div class="row mb-5 ml-1" >
                                            <div class="col-sm-2 font-weight-bold"> 
                                                Alamat : <span style="color:red"><b>*</b></span>
                                            </div>
                                            <div class="col-sm-3">  
                                                <textarea placeholder="Alamat Lengkap,Ex: Rt/Rw 001/002, Kel/Desa Banyuwngi, Kec. Puloampel, Kab. Serang" class="form-control" name="alamat_inventor" id="alamat_inventor"></textarea>
                                            </div>

                                            <div class="col-sm-2 font-weight-bold"> 
                                                Email : <span style="color:red"><b>*</b></span>
                                            </div>
                                            <div class="col-sm-3">   
                                                <input placeholder="Masukkan Email Inventor" type="email" class="form-control required" name="email_inventor" id="email_inventor">
                                            </div> 
                                        </div>  

                                        <div class="row mb-5 ml-1">
                                            <div class="col-sm-2 font-weight-bold"> 
                                                Nomor Telepon : <span style="color:red"><b>*</b></span>
                                            </div>
                                            <div class="col-sm-3">  
                                                <input placeholder="Masukkan Kode Pos Pemegang Cipta" type="text" class="form-control required" name="telp_inventor" id="telp_inventor">
                                            </div> 
                                            <div class="col-sm-3"> 
                                                
                                            <button type="button" id="div_btnaddlist" onclick="clickAddListInventor('{{csrf_token()}}', '#frm_drafting_paten')" class="btn btn-info" id="laddaBtnSubmit"> +</button>
                                            </div>
                                        </div> 
                                        <div class="row mb-5 ml-1"> 

                                            <input type="hidden" name="arr_nama_inventor[]" id="arr_nama_inventor" value="0">
                                            <input type="hidden" name="arr_kewarganegaraan_inventor[]" id="arr_kewarganegaraan_inventor" value="">
                                            <input type="hidden" name="arr_alamat_inventor[]" id="arr_alamat_inventor" value=" ">
                                            <input type="hidden" name="arr_email_inventor[]" id="arr_email_inventor" value=" ">
                                            <input type="hidden" name="arr_telp_inventor[]" id="arr_telp_inventor" value=" ">  
                                        </div> 


                                        <div class="row mb-5"> 
                                        <div class="col-sm-12" id="tabelDetailInventor">
                                            <table class="table table-bordered table-hover datatable-basic">
                                                <thead>
                                                    <tr>
                                                        <th width="1%">No</th> 
                                                        <th>Nama</th> 
                                                        <th>Kewarganegaraan</th> 
                                                        <th>Alamat</th>   
                                                        <th>Email</th>  
                                                        <th>No telp</th>  
                                                        <th style="width: 50px !important">Act</th>
                                                    </tr>
                                                </thead> 
                                                <tbody>
                                                </tbody>   
                                            </table>
                                            <br><br>
                                        </div>
 
                                    </div> 
                                        
                                  </div>
                                </div>
                            </div>
                        </div>

                         <div class="card border-0 border-radius-0 mb-5 box-shadow-1">

                            <div class="card-body z-index-1">
                                <div class="card-body p-0">
                                    <button type="button" class="collapsible">Data Prioritas</button>
                                    <div class="content">
                                      <hr class="my-2"> 
                                        <!-- /*<div class="kuasa_alam" style="display:none;">*/ -->
                                        <div class="row mb-5 ml-1">

                                            <div class="col-sm-2 font-weight-bold"> 
                                                Negara : <span style="color:red"><b>*</b></span>
                                            </div>
                                            <div class="col-sm-3">   
                                                <select name="negara_prioritas" id="negara_prioritas" data-placeholder="Negara" class="form-control select">
                                                   @foreach($data_negara as $r)
                                                   <option value="{{$r->en_short_name}}">{{$r->en_short_name}}</option>
                                                   @endforeach
                                               </select>
                                            </div> 

                                            <div class="col-sm-2 font-weight-bold"> 
                                                Tanggal Prioritas : <span style="color:red"><b>*</b></span>
                                            </div>
                                            <div class="col-sm-3">  
                                                <input placeholder="Masukkan Tanggal Prioritas" type="date" class="form-control required" name="tanggal_prioritas" id="tanggal_prioritas">
                                            </div>

                                        </div>
                                        <div class="row mb-5 ml-1" >
                                            <div class="col-sm-2 font-weight-bold"> 
                                                Nomor Prioritas : <span style="color:red"><b>*</b></span>
                                            </div>
                                            <div class="col-sm-3">  
                                                <input placeholder="Masukkan Nomor Prioritas" type="text" class="form-control required" name="nomor_prioritas" id="nomor_prioritas">
                                            </div>

                                            <div class="col-sm-2 font-weight-bold"> 
                                                 <button type="button" id="div_btnaddlist" onclick="clickAddListPrioritas('{{csrf_token()}}', '#frm_drafting_paten')" class="btn btn-info" id="laddaBtnSubmit"> +</button>
                                            </div>  
                                        </div>   
                                        <div class="row mb-5 ml-1"> 

                                            <input type="hidden" name="arr_negara_prioritas[]" id="arr_negara_prioritas" value="">
                                            <input type="hidden" name="arr_tanggal_prioritas[]" id="arr_tanggal_prioritas" value="">
                                            <input type="hidden" name="arr_nomor_prioritas[]" id="arr_nomor_prioritas" value=" ">  
                                        </div> 


                                        <div class="row mb-5"> 
                                        <div class="col-sm-12" id="tabelDetailPrioritas">
                                            <table class="table table-bordered table-hover datatable-basic">
                                                <thead>
                                                    <tr> 
                                                        <th width="1%">No</th> 
                                                        <th>Nomor Prioritas</th> 
                                                        <th>Negara</th> 
                                                        <th>Tanggal</th>  
                                                    </tr>
                                                </thead> 
                                                <tbody>
                                                </tbody>   
                                            </table>
                                            <br><br>
                                        </div> 
                                    </div> 
                                        
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="card border-0 border-radius-0 mb-5 box-shadow-1">

                            <div class="card-body z-index-1">
                                <div class="card-body p-0">
                                    <button type="button" class="collapsible">Isi Dokumen</button>
                                    <div class="content">
                                      <hr class="my-2"> 
                                        <!-- /*<div class="kuasa_alam" style="display:none;">*/ -->
                                        <div class="row mb-5 ml-1">

                                            <div class="col-sm-2 font-weight-bold"> 
                                                Judul Invensi (Indonesia) : <span style="color:red"><b>*</b></span>
                                            </div>
                                            <div class="col-sm-3">  
                                                <input placeholder="Masukkan Nama Inventor" type="text" class="form-control required" name="judul" id="judul" required="">
                                            </div> 

                                            <div class="col-sm-2 font-weight-bold"> 
                                                Judul Invensi (Inggris): 
                                            </div>
                                            <div class="col-sm-3">  
                                                <input placeholder="Masukkan Judul Invensi" type="text" class="form-control" name="judul_inggris" id="judul_inggris">
                                            </div> 

                                        </div>
                                        <div class="row mb-5 ml-1" >

                                            <div class="col-sm-2 font-weight-bold"> 
                                                File Abstrak: 
                                            </div>
                                            <div class="col-sm-3">  
                                                <input placeholder="Masukkan Judul Invensi" type="file" class="form-control" name="file_abstrak" id="file_abstrak">
                                            </div>
                                            <div class="col-sm-2 font-weight-bold"> 
                                                Jumlah Klaim  : <span style="color:red"><b>*</b></span>
                                            </div>
                                            <div class="col-sm-3">  
                                                <input placeholder="Masukkan Jumlah Klaim" type="number" class="form-control required" required="" name="jumlah_klaim" id="jumlah_klaim">
                                            </div>  
                                        </div> 

                                        <div class="row mb-5 ml-1" > 
                                            <div class="col-sm-2 font-weight-bold"> 
                                                Klaim : <span style="color:red"><b>*</b></span>
                                            </div>
                                            <div class="col-sm-10">  
                                                <textarea class="form-control summernote" name="klaim" id="klaim" placeholder="Klaim"></textarea>
                                            </div>
                                        </div>

                                        <div class="row mb-5 ml-1" >
                                            <div class="col-sm-2 font-weight-bold"> 
                                                Abstrak (Indonesia) : <span style="color:red"><b>*</b></span>
                                            </div>
                                            <div class="col-sm-10">  
                                                <textarea class="form-control summernote required" required="" name="abstrak" id="abstrak" placeholder="Klaim"></textarea>
                                            </div>
                                        </div>    
                                        <div class="row mb-5 ml-1">
                                            
                                            <div class="col-sm-2 font-weight-bold"> 
                                                Abstrak (Inggris)  : 
                                            </div>
                                            <div class="col-sm-10">   
                                                <textarea class="form-control summernote"  name="abstrak_inggris" id="abstrak_inggris" placeholder="Klaim"></textarea>
                                            </div> 
                                        </div>   

                                        <div class="col-sm-11" style="text-align: right;">
                                            <button type="submit" class="btn btn-primary" id="laddaBtnSubmit"><i class="icon-floppy-disk"></i> Save</button>
                                        </div>
                                    </div> 
                                        
                                  </div>
                                </div>
                            </div>
                        </div>

                        


                        </form> 
                    </article>
                </div> 
                <div class="col-lg-12 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
                    <article>
                        <div class="card border-0 border-radius-0 mb-5 box-shadow-1">
                            <div class="card-body p-4 z-index-1">
                                <div class="card-body p-0"> 
                                    <hr class="my-2">
                                    <div class="row mb-5"> 
                                        <div class="col-sm-12">
                                            <table class="table table-bordered table-hover datatable-basic">
                                                <thead>
                                                    <tr>
                                                        <th width="1%">No</th> 
                                                        <th>Jenis Paten</th>   
                                                        <th>Nama</th>   
                                                        <th>Status</th>
                                                        <th>Verifikasi</th> 
                                                        <th>Detail</th>   
                                                    </tr>
                                                </thead> 
                                                <?php
                                                $count = 0; 
                                                $status='-';
                                                $verifikasi = '';
                                                $dis_kategori = '';
                                                $jenis_paten = '<i>NOT SET</i>';
                                                ?>
                                                @foreach($data_drafting as $r)
                                                <?php
                                                if($r->jenis_paten == 1) { 
                                                    $jenis_paten ='PATEN'; 
                                                }else if($r->jenis_paten == 2){ 
                                                   $jenis_paten ='PATEN SEDERHANA';
                                               }else if($r->jenis_paten == 3){ 
                                                   $jenis_paten ='PATEN PCT'; 
                                               }
                                               ?> 
                                                 @if($r['is_biaya']===0)
                                                <?php $verifikasi = '<span class="btn btn-danger btn-rounded">Tidak Disetujui</span>'; ?> 
                                                @elseif($r['is_biaya']==1) 
                                                <?php $verifikasi = '<span class="btn btn-success btn-rounded">Disetujui</span>'; ?> 
                                                @elseif ($r['is_biaya']==NULL || $r['is_biaya']== '') 
                                                <?php $verifikasi = '<span class="btn  bg-grey  btn-rounded">Belum Diverifikasi</span>'; ?> 
                                                @endif

                                                <?php
                                                $key = urlencode(hamdi_encrypt("keynyahamdiganteng||{$r->id}||keynyahamdiganteng", "progstylysbyhamdiramadhan")); 
                                                ?>
                                                <?php
                                                $count++; 
                                                $id = $r->id; 
                                                $uuid = $r->uuid; 
                                                ?>
                                                @if($r['status'] == 1)
                                                <?php $status = '(PA) Diberi Paten'; ?>
                                                @elseif($r['status']==2)
                                                <?php $status = '(PA) Dianggap Ditarik Kembali (Direktur)'; ?>
                                                @elseif($r['status']==3)
                                                <?php $status = '(PA) Berakhir Masa Perlindungan'; ?>
                                                @elseif($r['status']==4)
                                                <?php $status = '(PA) Pengajuan'; ?>
                                                @elseif($r['status']==5)
                                                <?php $status = '(PA) Proses'; ?>
                                                @elseif($r['status']==6)
                                                <?php $status = '(PA) Ditolak'; ?>
                                                @endif
                                                <tr>
                                                    <td>{{$count}}</td>
                                                    <td>{!! $jenis_paten !!}</td>   
                                                    <td>{{$r['nama']}}</td> 
                                                    <td>{{$status}}</td>
                                                    <td>{!! $verifikasi !!}</td>  
                                                    <?php $url = url('d/paten?k='.$key); ?> 
                                                    <?php $url_edit =  url('/landing_drafting_paten/edit/?uuid='.$uuid);?>
                                                    <td style="text-align: center;"><button type="button" onclick="window.location.href='{{$url}}'" id="modal_update_konsultan_cipta" class="btn btn-danger btn-xs">
                                                            <i class="icon-eye8"></i></button>
                                                    </td>   
                                                   <!--  <?php 
                                                    if($r['is_biaya']===NULL){ 
                                                    ?>
                                                        <td>   
                                                            <button type="button" onclick="window.location.href='{{$url_edit}}'" id="modal_update_konsultan_cipta" class="btn btn-info btn-xs btn-block">
                                                            <i class="icon-pencil"></i></button> 
 
                                                        </td>
                                                   <?php } ?>
                                                    </tr>  -->
                                                    @endforeach  
                                            </table>
                                            <br><br><br><br><br><br>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
</div>   

@endsection
@push('scripts')
<script src="{{asset('ckeditor_custom/ckeditor.js')}}"></script>
<script type="text/javascript"> 
var close = document.getElementsByClassName("closebtn");
        var i;

        for (i = 0; i < close.length; i++) {
          close[i].onclick = function(){
            var div = this.parentElement;
            div.style.opacity = "0";
            setTimeout(function(){ div.style.display = "none"; }, 600);
        }
    }
    $(function () {
        //CKEditor
        // CKEDITOR.replace('ckeditors');
        // CKEDITOR.config.height = 300;  
        $('.summernote').each(function(e){ 
            var toolbarGroups = [
            { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
            { name: 'paragraph', groups: [ 'align', 'list', 'indent', 'blocks', 'bidi', 'paragraph' ] },
            { name: 'forms', groups: [ 'forms' ] },
            { name: 'document', groups: [ 'document', 'mode', 'doctools' ] },
            { name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
            { name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
            { name: 'links', groups: [ 'links' ] },
            { name: 'styles', groups: [ 'styles' ] },
            { name: 'insert', groups: [ 'insert' ] },
            { name: 'colors', groups: [ 'colors' ] }, 
            ];
            CKEDITOR.replace(this.id,{  
                uiColor : '#b2cefe ',
                toolbarGroups,
                removeButtons : 'Link,Unlink,Anchor,Image,Flash,HorizontalRule,Iframe,About'  

            }); 
        }); 
    });

    $(document).ready( function () {
        $('.datatable-basic').DataTable();
    } );
</script> 

<script type="text/javascript"> 
    var coll = document.getElementsByClassName("collapsible");
    var i;

    for (i = 0; i < coll.length; i++) {
      coll[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.maxHeight){
          content.style.maxHeight = null;
      } else {
          content.style.maxHeight = content.scrollHeight + "px";
      } 
  });
  }

  $(document).ready(function() {
    $("select[name='jenis_paten']").click(function() {
        var jenis = $(this).val(); 
        if(jenis == 3 ){   
            $(".pct").show(500); 
        }else if(jenis == 0){  
            $(".pct").hide(500); 
        }else if (jenis == 1){  
            $(".pct").hide(500); 
        }else if(jenis == 2){   
            $(".pct").hide(500); 
        }


        //$("div.desc").hide();
    });
    $("input[name='konsultant']").click(function() {
        var input = $(this).val();
        if(input == 1 ){ 
            $(".kuasa_alam").hide(500);
            $(".div_konsultant_yes").show(500);
        }else{
            $(".kuasa_alam").show(500);
            $(".div_konsultant_yes").hide(500);
        }
        

        //$("div.desc").hide();
    });
}); 

    function hapus_data_drafting_cipta(token, id) 
    {  
       var act = '/landing_drafting_cipta/delete';
       $.post(act, {
        _token: token,
        id:id
        },
        function (data) { 
            location.reload();
        });
    }
</script>
@endpush
