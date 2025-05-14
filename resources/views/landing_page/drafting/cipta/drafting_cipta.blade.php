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
                     @if (session()->has('statusT'))
                <div class="col-md-12">
                <div class="alert">
                  <span class="closebtn">&times;</span>  
                  <strong>Gagal!</strong> {{ session()->get('statusT') }}
                          {{session()->forget('statusT')}}
                </div>
                </div>
                @endif
                <div class="col-lg-12 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">
                    <article> 
                        <form class="form-horizontal" id="frm_drafting_cipta" method="post" action="{{ route('simpan_drafting_cipta') }}" enctype="multipart/form-data" > 
                        <div class="col-md-12">  
                        </div>
                        <div class="card border-0 border-radius-0 mb-5 box-shadow-1">
                            <div class="card-body z-index-1">
                                <div class="card-body p-0">
                                    <button type="button" class="collapsible"><b>Drafting</b></button>
                                    <div class="content">
                                      <button type="button" style="display:none;" class="btn bg-slate btn-grad-create btn-sm" onclick="$('#divDrafting').show(500);">
                                        <b><i class="icon-add"></i></b> &nbsp Drafting Cipta
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
                                                <span style="color:red;"> *FIle Harus .Jpeg,.Jpg, atau .PNG Maximal File 5MB</span>
                                            </div> 

                                            <div class="col-sm-2 font-weight-bold"> 
                                                Jenis Permohonan : <span style="color:red"><b>*</b></span> 
                                            </div>
                                            <div class="col-sm-3">   
                                                <select name="jenis_permohonan" id="jenis_permohonan"  data-placeholder="Jenis Permohonan" class="form-control select">
                                                    <option value="0">-- PILIH JENIS --</option> 
                                                    <option value="1">UMK, Lembaga Pendidikan, Lembaga Litbang Pemerintah</option>  
                                                    <option value="2">Umum</option>  
                                                </select>
                                            </div> 
                                        </div> 
                                        <div class="row mb-5 ml-1">
                                            <div class="col-sm-2 font-weight-bold"> 
                                                Jenis Ciptaan : <span style="color:red"><b>*</b></span> 
                                            </div>
                                            <div class="col-sm-3">   
                                               <select name="jenis_ciptaan_id" onchange="div_jenis_ciptaan('{{csrf_token()}}','#jenis_ciptaan_id','#frm_drafting_cipta')" id="jenis_ciptaan_id" data-placeholder="Jenis Ciptaan" class="form-control select">
                                                   <option value="-0">-- PILIH JENIS --</option>
                                                   @foreach($jenis_ciptaan as $r)
                                                   <option value="{{$r->id}}">{{$r->nama}}</option>
                                                   @endforeach
                                               </select>
                                            </div>

                                            <div class="col-sm-2 font-weight-bold"> 
                                                Sub Jenis Ciptaan :
                                            </div>
                                            <div class="col-sm-3">
                                                <select name="sub_jenis_ciptaan_id" id="sub_jenis_ciptaan_id" data-placeholder="Jenis Ciptaan" class="form-control select"> 
                                                   <option value="0">-- PILIH SUB JENIS  --</option> 
                                               </select>
                                            </div> 
                                        </div>   
                                        <div class="row mb-5 ml-1">
                                            <div class="col-sm-2 font-weight-bold"> 
                                                Judul : <span style="color:red"><b>*</b></span>
                                            </div>
                                            <div class="col-sm-3">  
                                                <input placeholder="Masukkan Nama Hak Cipta" type="text" class="form-control required" name="nama_cipta" id="nama_cipta" required="required">
                                            </div>

                                            <div class="col-sm-2 font-weight-bold"> 
                                                Tanggal Diumumkan : <span style="color:red"><b>*</b></span>
                                            </div>
                                            <div class="col-sm-3">  
                                               <input type="date" placeholder="Masukkan Jenis Hak Cipta Anda" class="form-control" name="tanggal_diumumkan" id="tanggal_diumumkan">
                                            </div>
                                        </div> 
                                        <div class="row mb-5 ml-1">
                                            <div class="col-sm-2 font-weight-bold"> 
                                                Negara Pertamakali Diumumkan : <span style="color:red"><b>*</b></span>  
                                            </div>
                                            <div class="col-sm-3">  
                                                <select name="countries_id" id="countries_id" data-placeholder="Negara" class="form-control select">
                                                   @foreach($data_negara as $r)
                                                   <option value="{{$r->id}}">{{$r->en_short_name}}</option>
                                                   @endforeach
                                               </select>
                                            </div> 
                                            <div class="col-sm-2 font-weight-bold"> 
                                                Kota Pertamakali Diumumkan : <span style="color:red"><b>*</b></span>
                                            </div>
                                            <div class="col-sm-3">  
                                               <input type="text" placeholder="Masukkan Kota Anda" class="form-control" name="kode_diumumkan" id="kode_diumumkan">
                                            </div>
                                        </div>
                                        <div class="row mb-5 ml-1">
                                            <div class="col-sm-2 font-weight-bold"> 
                                                File Uraian : <span style="color:red"><b>*</b></span>  
                                            </div>
                                            <div class="col-sm-10">  
                                                <input type="file" placeholder="Masukkan File Uraian" class="form-control" name="file_uraian" id="file_uraian">
                                                <span style="color:red;"> *Maximal File 5MB</span>
                                            </div> 
                                        </div>   

                                        <div class="row mb-5 ml-1">
                                            <div class="col-sm-2 font-weight-bold"> 
                                                Uraian : 
                                            </div>
                                            <div class="col-sm-8">  
                                                <textarea style="font-weight: bold; font-family: Arial;" name="uraian" id="uraian" rows="4"class="form-control summernote"></textarea>
                                            </div> 
                                        </div> 

                                        <input type="hidden" value="{{Auth::user()->id}}" name="user_id"> 
                                    </div>
                                    </div> 
                                    
                                </div>
                            </div>
                        </div>

                        <div class="card border-0 border-radius-0 mb-5 box-shadow-1">

                            <div class="card-body z-index-1">
                                <div class="card-body p-0">
                                    <button type="button" class="collapsible">Data Kuasa</button>
                                    <div class="content">
                                      <hr class="my-2">
                                        <div class="row mb-5 ml-1">
                                            <div class="col-sm-2 font-weight-bold"> 
                                                Melalui Kuasa : <span style="color:red"><b>*</b></span> 
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="radio" id="kuasa" name="kuasa" value="1">
                                                    <label for="iya">Iya</label><br>
                                                <input type="radio" id="kuasa" name="kuasa" value="0">
                                                    <label for="tidak">Tidak</label><br>
                                            </div>

                                            <div class="col-sm-2 font-weight-bold div_konsultant" style="display:none;"> 
                                                Melalui Konsultant : <span style="color:red"><b>*</b></span> 
                                            </div>
                                            <div class="col-sm-3 div_konsultant" style="display:none;">
                                                <input type="radio" id="konsultant" name="konsultant" value="1">
                                                    <label for="iya">Iya</label><br>
                                                <input type="radio" id="konsultant" name="konsultant" value="0">
                                                    <label for="tidak">Tidak</label><br>
                                            </div>
                                        </div>
                                        <div class="kuasa_alam" style="display:none;">
                                        <div class="row mb-5 ml-1">
                                            <div class="col-sm-2 font-weight-bold"> 
                                                Nama Kuasa : <span style="color:red"><b>*</b></span>
                                            </div>
                                            <div class="col-sm-3">  
                                                <input placeholder="Masukkan Nama Kuasa" type="text" class="form-control required" name="nama_kuasa" id="nama_kuasa">
                                            </div>

                                            <div class="col-sm-2 font-weight-bold"> 
                                                Alamat Kuasa : <span style="color:red"><b>*</b></span>
                                            </div>
                                            <div class="col-sm-3">  
                                               <textarea class="form-control" name="alamat_kuasa" id="alamat_kuasa" placeholder="Alamat Kuasa"></textarea>
                                            </div> 
                                        </div>
                                        <div class="row mb-5 ml-1" >
                                            <div class="col-sm-2 font-weight-bold"> 
                                                Kota Tempat Tinggal Kuasa : <span style="color:red"><b>*</b></span>
                                            </div>
                                            <div class="col-sm-3">  
                                                <input placeholder="Masukkan Kota Tempat Tinggal Kuasa" type="text" class="form-control required" name="kode_tempat_tinggal" id="kode_tempat_tinggal">
                                            </div>

                                            <div class="col-sm-2 font-weight-bold"> 
                                                Provinsi Kuasa : <span style="color:red"><b>*</b></span>
                                            </div>
                                            <div class="col-sm-3">  
                                               <select name="provinsi_id" id="provinsi_id" data-placeholder="Provinsi Kuasa" class="form-control select">
                                                   @foreach($data_provinsi as $r)
                                                   <option value="{{$r->id}}">{{$r->name}}</option>
                                                   @endforeach
                                               </select>
                                            </div> 
                                        </div>  

                                        <div class="row mb-5 ml-1">
                                            <div class="col-sm-2 font-weight-bold"> 
                                                Kode Pos Kuasa : <span style="color:red"><b>*</b></span>
                                            </div>
                                            <div class="col-sm-3">  
                                                <input placeholder="Masukkan Kode Pos Kuasa" type="text" class="form-control required" name="kode_pos_kuasa" id="kode_pos_kuasa">
                                            </div>

                                            <div class="col-sm-2 font-weight-bold"> 
                                                Email Kuasa : <span style="color:red"><b>*</b></span>
                                            </div>
                                            <div class="col-sm-3">  
                                               <input placeholder="Masukkan Email Kuasa" type="email" class="form-control required" name="email_kuasa" id="email_kuasa">
                                            </div> 
                                        </div>
                                        </div> 

                                        <div class="row mb-5 ml-1 div_konsultant_yes" style="display: none;">
                                            <div class="col-sm-2 font-weight-bold"> 
                                                Melalui Konulstant : <span style="color:red"><b>*</b></span>
                                            </div>
                                            <div class="col-sm-3">  
                                                <input placeholder="Masukkan Kode Pos Kuasa" type="text" class="form-control required" name="melalui_konsultant" id="melalui_konsultant">
                                            </div>  
                                        </div>  
                                        <br><br><br><br> <br><br><br><br> <br><br><br><br> <br>
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="card border-0 border-radius-0 mb-5 box-shadow-1">

                            <div class="card-body z-index-1">
                                <div class="card-body p-0">
                                    <button type="button" class="collapsible">Lampiran</button>
                                    <div class="content">
                                      <hr class="my-2">
                                        <div class="row mb-5 ml-1">
                                            <div class="col-sm-2 font-weight-bold kuasa_alam" style="display:none"> 
                                                Surat Kuasa (Konsultan) : <span style="color:red"><b>*</b></span>   
                                            </div>
                                            <div class="col-sm-3 kuasa_alam" style="display:none"> 
                                                <input type="file" placeholder="Masukkan Foto Anda" class="form-control" name="file_surat_kuasa" id="file_surat_kuasa">
                                                <span style="color:red;"> *Maximal File 5MB</span>
                                            </div>

                                            <div class="col-sm-2 font-weight-bold"> 
                                                Salinan Resmi Akta Pendirian Badan Hukum : <span style="color:red"><b>*</b></span> 
                                            </div>
                                            <div class="col-sm-3" >
                                                <input type="file" placeholder="Masukkan Foto Anda" class="form-control" name="file_akta_badan_hukum" id="file_akta_badan_hukum">
                                                <span style="color:red;"> *Maximal File 5MB</span>
                                            </div>
                                        </div> 
                                        <div class="row mb-5 ml-1">
                                            <div class="col-sm-2 font-weight-bold"> 
                                                Scan KTP Pemohon dan Pencipta : <span style="color:red"><b>*</b></span>
                                            </div>
                                            <div class="col-sm-3">  
                                                <input placeholder="Masukkan Nama Kuasa" type="file" class="form-control required" name="file_ktp" id="file_ktp">
                                                <span style="color:red;"> *Maximal File 5MB</span>
                                            </div>

                                            <div class="col-sm-2 font-weight-bold"> 
                                                Scan NPWP Perorangan / Perusahaan : <span style="color:red"><b>*</b></span>
                                            </div>
                                            <div class="col-sm-3">  
                                                <input placeholder="Masukkan Nama Kuasa" type="file" class="form-control required" name="file_npwp" id="file_npwp">
                                                <span style="color:red;"> *Maximal File 5MB</span>
                                            </div> 
                                        </div>
                                        <div class="row mb-5 ml-1" >
                                            <div class="col-sm-2 font-weight-bold"> 
                                                Surat Pernyataan : <span style="color:red"><b>*</b></span>
                                            </div>
                                            <div class="col-sm-3">  
                                                <input placeholder="Masukkan Surat Pernyataan" type="file" class="form-control required" name="file_surat_pernyataan" id="file_surat_pernyataan">
                                                <span style="color:red;"> *Maximal File 5MB</span>
                                            </div>

                                            <div class="col-sm-2 font-weight-bold"> 
                                                Contoh Ciptaan : <span style="color:red"><b>*</b></span>
                                            </div>
                                            <div class="col-sm-3">  
                                               <input placeholder="Masukkan Contoh Ciptaan" type="file" class="form-control required" name="file_contoh_ciptaan" id="file_contoh_ciptaan">

                                                <span style="color:red;"> *Maximal File 5MB</span>
                                            </div> 
                                        </div>  

                                        <div class="row mb-5 ml-1">
                                            <div class="col-sm-2 font-weight-bold"> 
                                                Bukti Pengalihan Hak Cipta : <span style="color:red"><b>*</b></span>
                                            </div>
                                            <div class="col-sm-3">  
                                            <a href="#" class="coba1">
                                                <input placeholder="Masukkan Contoh Ciptaan" type="file" class="form-control required" name="file_bukti_pengalihan" id="file_bukti_pengalihan">
                                                <span style="color:red;"> *Maximal File 5MB</span>
                                            </a>
                                            </div>

                                            <div class="col-sm-2 font-weight-bold"> 
                                                Contoh Ciptaan (Link) : <span style="color:red"><b>*</b></span>
                                            </div>
                                            <div class="col-sm-3">  
                                                <textarea style="font-weight: bold; font-family: Arial;" name="link_ciptaan" id="link_ciptaan" rows="4"class="form-control"></textarea>
                                            </div> 
                                        </div>  

                                  </div><br><br>
                                </div>
                            </div>
                        </div> 

                        <div class="card border-0 border-radius-0 mb-5 box-shadow-1">

                            <div class="card-body z-index-1">
                                <div class="card-body p-0">
                                    <button type="button" class="collapsible">Data Pencipta</button>
                                    <div class="content">
                                      <hr class="my-2"> 
                                        <!-- /*<div class="kuasa_alam" style="display:none;">*/ -->
                                        <div class="row mb-5 ml-1">
                                            <div class="col-sm-2 font-weight-bold"> 
                                                Nama Pencipta : <span style="color:red"><b>*</b></span>
                                            </div>
                                            <div class="col-sm-3">  
                                                <input placeholder="Masukkan Nama Pencipta" type="text" class="form-control required" name="nama_pencipta" id="nama_pencipta">
                                            </div>

                                            <div class="col-sm-2 font-weight-bold"> 
                                                Kewarganegeraan : <span style="color:red"><b>*</b></span>
                                            </div>
                                            <div class="col-sm-3">   
                                                <select name="kewarganegaraan_pencipta" id="kewarganegaraan_pencipta" data-placeholder="Negara" class="form-control select">
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
                                                <textarea placeholder="Alamat Lengkap,Ex: Rt/Rw 001/002, Kel/Desa Banyuwngi, Kec. Puloampel, Kab. Serang" class="form-control" name="alamat_pencipta" id="alamat_pencipta"></textarea>
                                            </div>

                                            <div class="col-sm-2 font-weight-bold"> 
                                                Kota : <span style="color:red"><b>*</b></span>
                                            </div>
                                            <div class="col-sm-3">   
                                                <input placeholder="Masukkan Kota Pencipta" type="text" class="form-control required" name="kota_pencipta" id="kota_pencipta">
                                            </div> 
                                        </div>  

                                        <div class="row mb-5 ml-1">
                                            <div class="col-sm-2 font-weight-bold"> 
                                                Kode Pos Pencipta : <span style="color:red"><b>*</b></span>
                                            </div>
                                            <div class="col-sm-3">  
                                                <input placeholder="Masukkan Kode Pos Pencipta" type="text" class="form-control required" name="kode_pos_pencipta" id="kode_pos_pencipta">
                                            </div>

                                            <div class="col-sm-2 font-weight-bold"> 
                                                Negara : <span style="color:red"><b>*</b></span>
                                            </div>
                                            <div class="col-sm-3">   
                                                <select name="negara_pencipta" id="negara_pencipta" data-placeholder="Negara" class="form-control select">
                                                   @foreach($data_negara as $r)
                                                   <option value="{{$r->en_short_name}}">{{$r->en_short_name}}</option>
                                                   @endforeach
                                               </select>
                                            </div> 
                                        </div>
                                        <div class="row mb-5 ml-1">
                                            <div class="col-sm-2 font-weight-bold"> 
                                                Provinsi : <span style="color:red"><b>*</b></span>
                                            </div>
                                            <div class="col-sm-3">  
                                                <select name="provinsi_pencipta" id="provinsi_pencipta" data-placeholder="Provinsi Kuasa" class="form-control select">
                                                   @foreach($data_provinsi as $r)
                                                   <option value="{{$r->name}}">{{$r->name}}</option>
                                                   @endforeach
                                               </select>
                                            </div>

                                            <input type="hidden" name="arr_nama_pencipta[]" id="arr_nama_pencipta" value="0">
                                            <input type="hidden" name="arr_kewarganegaraan_pencipta[]" id="arr_kewarganegaraan_pencipta" value="">
                                            <input type="hidden" name="arr_alamat_pencipta[]" id="arr_alamat_pencipta" value=" ">
                                            <input type="hidden" name="arr_kota_pencipta[]" id="arr_kota_pencipta" value=" ">
                                            <input type="hidden" name="arr_kode_pos_pencipta[]" id="arr_kode_pos_pencipta" value=" "> 
                                            <input type="hidden" name="arr_negara_pencipta[]" id="arr_negara_pencipta" value=" ">
                                            <input type="hidden" name="arr_provinsi_pencipta[]" id="arr_provinsi_pencipta" value=" ">
                                            <div class="col-sm-3">
                                                
                                            <button type="button" id="div_btnaddlist" onclick="clickAddListPencipta('{{csrf_token()}}', '#frm_drafting_cipta')" class="btn btn-info" id="laddaBtnSubmit"> +</button>
                                            </div>
                                        </div> 


                                        <div class="row mb-5"> 
                                        <div class="col-sm-12" id="tabelDetailPencipta">
                                            <table class="table table-bordered table-hover datatable-basic">
                                                <thead>
                                                    <tr>
                                                        <th width="1%">No</th> 
                                                        <th>Nama</th> 
                                                        <th>Kewarganegaraan</th> 
                                                        <th>Alamat</th>  
                                                        <th>Kode Pos</th>  
                                                        <th>Kota</th>
                                                        <th>Provinsi</th>   
                                                    </tr>
                                                </thead> 
                                                <tbody>
                                                </tbody>   
                                            </table>
                                            <br><br>
                                        </div>

                                       <!--  <div class="col-sm-11" style="text-align: right;">
                                            <button type="submit" class="btn btn-primary" id="laddaBtnSubmit"><i class="icon-floppy-disk"></i> Save</button>
                                        </div> -->
                                    </div> 
                                        
                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="card border-0 border-radius-0 mb-5 box-shadow-1">

                            <div class="card-body z-index-1">
                                <div class="card-body p-0">
                                    <button type="button" class="collapsible">Data Pemegang Cipta</button>
                                    <div class="content">
                                      <hr class="my-2"> 
                                        <!-- /*<div class="kuasa_alam" style="display:none;">*/ -->
                                        <div class="row mb-5 ml-1">
                                            <div class="col-sm-2 font-weight-bold"> 
                                                Nama Pemegang Cipta : <span style="color:red"><b>*</b></span>
                                            </div>
                                            <div class="col-sm-3">  
                                                <input placeholder="Masukkan Nama Pemegang Cipta" type="text" class="form-control required" name="nama_pemegang_cipta" id="nama_pemegang_cipta">
                                            </div>

                                            <div class="col-sm-2 font-weight-bold"> 
                                                Kewarganegeraan : <span style="color:red"><b>*</b></span>
                                            </div>
                                            <div class="col-sm-3">   
                                                <select name="kewarganegaraan_pemegang_cipta" id="kewarganegaraan_pemegang_cipta" data-placeholder="Negara" class="form-control select">
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
                                                <textarea placeholder="Alamat Lengkap,Ex: Rt/Rw 001/002, Kel/Desa Banyuwngi, Kec. Puloampel, Kab. Serang" class="form-control" name="alamat_pemegang_cipta" id="alamat_pemegang_cipta"></textarea>
                                            </div>

                                            <div class="col-sm-2 font-weight-bold"> 
                                                Kota : <span style="color:red"><b>*</b></span>
                                            </div>
                                            <div class="col-sm-3">   
                                                <input placeholder="Masukkan Kota Pemegang Cipta" type="text" class="form-control required" name="kota_pemegang_cipta" id="kota_pemegang_cipta">
                                            </div> 
                                        </div>  

                                        <div class="row mb-5 ml-1">
                                            <div class="col-sm-2 font-weight-bold"> 
                                                Kode Pos Pemegang Cipta : <span style="color:red"><b>*</b></span>
                                            </div>
                                            <div class="col-sm-3">  
                                                <input placeholder="Masukkan Kode Pos Pemegang Cipta" type="text" class="form-control required" name="kode_pos_pemegang_cipta" id="kode_pos_pemegang_cipta">
                                            </div>

                                            <div class="col-sm-2 font-weight-bold"> 
                                                Negara : <span style="color:red"><b>*</b></span>
                                            </div>
                                            <div class="col-sm-3">   
                                                <select name="negara_pemegang_cipta" id="negara_pemegang_cipta" data-placeholder="Negara" class="form-control select">
                                                   @foreach($data_negara as $r)
                                                   <option value="{{$r->en_short_name}}">{{$r->en_short_name}}</option>
                                                   @endforeach
                                               </select>
                                            </div> 
                                        </div>

                                        <div class="row mb-5 ml-1" >
                                            <div class="col-sm-2 font-weight-bold"> 
                                                Email : <span style="color:red"><b>*</b></span>
                                            </div>
                                            <div class="col-sm-3">
                                                <input placeholder="Masukkan Email Pemegang Cipta" type="email" class="form-control" name="email_pemegang_cipta" id="email_pemegang_cipta">
                                            </div>

                                            <div class="col-sm-2 font-weight-bold"> 
                                                Telp : <span style="color:red"><b>*</b></span>
                                            </div>
                                            <div class="col-sm-3">
                                                <input placeholder="Masukkan Telp Pemegang Cipta" type="number" class="form-control" name="telp_pemegang_cipta" id="telp_pemegang_cipta">
                                            </div>
                                        </div>
                                        <div class="row mb-5 ml-1">
                                            <div class="col-sm-2 font-weight-bold"> 
                                                Provinsi : <span style="color:red"><b>*</b></span>
                                            </div>
                                            <div class="col-sm-3">  
                                                <select name="provinsi_pemegang_cipta" id="provinsi_pemegang_cipta" data-placeholder="Provinsi Kuasa" class="form-control select">
                                                   @foreach($data_provinsi as $r)
                                                   <option value="{{$r->name}}">{{$r->name}}</option>
                                                   @endforeach
                                               </select>
                                            </div>

                                            <input type="hidden" name="arr_nama_pemegang_cipta[]" id="arr_nama_pemegang_cipta" value="0">
                                            <input type="hidden" name="arr_kewarganegaraan_pemegang_cipta[]" id="arr_kewarganegaraan_pemegang_cipta" value="">
                                            <input type="hidden" name="arr_alamat_pemegang_cipta[]" id="arr_alamat_pemegang_cipta" value=" ">
                                            <input type="hidden" name="arr_kota_pemegang_cipta[]" id="arr_kota_pemegang_cipta" value=" ">
                                            <input type="hidden" name="arr_kode_pos_pemegang_cipta[]" id="arr_kode_pos_pemegang_cipta" value=" "> 
                                            <input type="hidden" name="arr_negara_pemegang_cipta[]" id="arr_negara_pemegang_cipta" value=" ">
                                            <input type="hidden" name="arr_provinsi_pemegang_cipta[]" id="arr_provinsi_pemegang_cipta" value=" ">
                                            <input type="hidden" name="arr_email_pencipta[]" id="arr_email_pencipta" value=" "> 
                                            <input type="hidden" name="arr_telp_pemegang_cipta[]" id="arr_telp_pemegang_cipta" value=" "> 
                                            <div class="col-sm-3"> 
                                                
                                            <button type="button" id="div_btnaddlist" onclick="clickAddListPemegangCipta('{{csrf_token()}}', '#frm_drafting_cipta')" class="btn btn-info" id="laddaBtnSubmit"> +</button>
                                            </div>
                                        </div> 


                                        <div class="row mb-5"> 
                                        <div class="col-sm-12" id="tabelDetailPemegangCipta">
                                            <table class="table table-bordered table-hover datatable-basic">
                                                <thead>
                                                    <tr>
                                                        <th width="1%">No</th> 
                                                        <th>Nama</th> 
                                                        <th>Kewarganegaraan</th> 
                                                        <th>Alamat</th>  
                                                        <th>Kode Pos</th>  
                                                        <th>Kota</th>
                                                        <th>Provinsi</th>  
                                                        <th>Email</th>  
                                                        <th>No telp</th>   
                                                    </tr>
                                                </thead> 
                                                <tbody>
                                                </tbody>   
                                            </table>
                                            <br><br>
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
                                                        <th>Jenis Ciptaan</th>   
                                                        <th>Nama</th>  
                                                        <th>Status</th>  
                                                        <th>Verifikasi</th>
                                                        <th>Detail</th>   
                                                    </tr>
                                                </thead> 
                                                <?php 
                                                $no = 0;
                                                $status='-';
                                                ?>
                                                @foreach ($data_drafting as $r) 

                                                @if($r['is_biaya']===0)
                                                <?php $verifikasi = '<span class="btn btn-danger btn-rounded">Tidak Disetujui</span>'; ?> 
                                                @elseif($r['is_biaya']==1) 
                                                <?php $verifikasi = '<span class="btn btn-success btn-rounded">Disetujui</span>'; ?> 
                                                @elseif ($r['is_biaya']==NULL || $r['is_biaya']== '') 
                                                <?php $verifikasi = '<span class="btn  bg-grey  btn-rounded">Belum Diverifikasi</span>'; ?> 
                                                @endif

                                                @php
                                                $no ++;
                                                $uuid = $r['uuid'];
                                                $id = $r['id'];


                                                @endphp
                                                <?php
                                                $key = urlencode(hamdi_encrypt("keynyahamdiganteng||{$r->id}||keynyahamdiganteng", "progstylysbyhamdiramadhan")); 
                                                ?>


                                                @if($r['status'] == 1)
                                                <?php $status = '(PA) Diberi Cipta'; ?>
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
                                                    <td>{{$no}}</td> 
                                                    <td>{{$r->jenis_ciptaan_cipta->nama}}</td>  
                                                    <td>{{$r['nama']}}</td>   
                                                    <td>{{$status}}</td> 
                                                    <td>{!! $verifikasi !!}</td>
                                                    <?php $url = url('d/hcipta?k='.$key); ?>
                                                    <?php $url_edit =  url('/landing_drafting_cipta/edit/?uuid='.$uuid);?>
                                                    <td style="text-align: center;"><button type="button" onclick="window.location.href='{{$url}}'" id="modal_update_konsultan_cipta" class="btn btn-info btn-xs">
                                                            <i class="icon-eye8"></i></button>
                                                    </td>  
                                                    @if($r['is_biaya']===NULL)
                                                        <!-- <td>   
                                                            <button type="button" onclick="window.location.href='{{$url_edit}}'"class="btn btn-info btn-xs btn-block" data-toggle="tooltip" title="Ubah Data">
                                                            <i class="icon-pencil"></i></button> 

                                                             <button type="button" onclick="hapus_data_drafting_cipta('{{csrf_token()}}','{{ $id }}')" data-toggle="tooltip" title="Hapus Data" class="btn btn-danger btn-xs btn-block">
                                                            <i class="icon-trash"></i></button> -->
                                                        
                                                    @endif
                                                    </tr> 
                                                    @endforeach  
                                            </table>
                                            <br><br>
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

var close = document.getElementsByClassName("closebtn");
        var i;

        for (i = 0; i < close.length; i++) {
          close[i].onclick = function(){
            var div = this.parentElement;
            div.style.opacity = "0";
            setTimeout(function(){ div.style.display = "none"; }, 600);
        }
    } 
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
    $("input[name='kuasa']").click(function() {
        var kuasa = $(this).val();
        var konsultant = $('#konsultant').val(); 
        if(kuasa == 1  && konsultant === 0){  
            $(".kuasa_alam").show(500);
            $(".div_konsultant").hide(500);
            $(".div_konsultant_yes").hide(500);
        }else if(kuasa == 0 && konsultant == 0){  
            $(".kuasa_alam").hide(500);
            $(".div_konsultant").hide(500);
            $(".div_konsultant_yes").hide(500);
        }else if (kuasa == 1 && konsultant == 1){  
            $(".kuasa_alam").show(500);
            $(".div_konsultant").show(500);
            $(".div_konsultant_yes").hide(500);
        }else if(kuasa == 1){   
            $(".kuasa_alam").show(500);
            $(".div_konsultant_yes").hide(500);
        }else if(kuasa ==0){  
            $('#konsultant').prop("checked",false);
            $(".kuasa_alam").hide(500);
            $(".div_konsultant").hide(500);
            $(".div_konsultant_yes").hide(500);
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
