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
                <article> 
                    <form class="form-horizontal" id="frm_drafting_paten" method="post" action="{{ route('simpan_drafting_komunal') }}" enctype="multipart/form-data" > 
                    <div class="col-md-12">  
                        <div id="divDrafting">
                            {{ csrf_field() }}
                            <div class="row mb-12 ml-1"> 
                                <div class="col-sm-10 font-weight-bold"> 
                                    Isi Drafting Disini
                                </div> 
                            </div>
                            <hr class="my-2">
                            <div class="row mb-5 ml-1">

                                <div class="col-sm-2 font-weight-bold"> 
                                    Thumbnail :  
                                </div>
                                <div class="col-sm-3">  
                                    <input placeholder="Masukkan Nomor Nama IG" type="file" class="form-control" name="thumbnail" id="thumbnail">
                                    <span style="color:red;"> *FIle Harus .Jpeg,.Jpg, atau .PNG Maximal File 5MB</span>

                                </div> 
                            </div>
                            <div class="row mb-5 ml-1">
                                <div class="col-sm-2 font-weight-bold"> 
                                    Nama IG :  
                                </div>
                                <div class="col-sm-3">  
                                    <input placeholder="Masukkan Nomor Nama IG" type="text" class="form-control" name="nama_ig" id="nama_ig">
                                </div> 
                                
                                <div class="col-sm-2 font-weight-bold"> 
                                    Nama Lain IG :  
                                </div>
                                <div class="col-sm-3">  
                                    <input placeholder="Masukkan Nama Lain" type="text" class="form-control required" name="nama_lain_ig" id="nama_lain_ig" >
                                </div>
                            </div> 
                            <div class="row mb-5 ml-1">
                                <div class="col-sm-2 font-weight-bold"> 
                                    Nama Potensi IG :  
                                </div>
                                <div class="col-sm-3">  
                                    <input placeholder="Masukkan Nama Potensi IG" type="text" class="form-control" name="nama_potensi" id="nama_potensi" >
                                </div>

                                <div class="col-sm-2 font-weight-bold"> 
                                    Nama Pemohon :  
                                </div>
                                <div class="col-sm-3">  
                                   <input type="text" placeholder="Masukkan Nama Pemohon" class="form-control" name="nama_pemohon" id="nama_pemohon">
                                </div>
                            </div> 
                            <div class="row mb-5 ml-1">
                                <div class="col-sm-2 font-weight-bold"> 
                                    Jenis Barang / Produk :  
                                </div>
                                <div class="col-sm-3">  
                                    <select name="jenis_barang_id" id="jenis_barang_id"  data-placeholder="Jenis Paten" class="form-control select"> 
                                        @foreach($jenis_barang as $r)
                                        <option value="{{$r->id}}">{{$r->nama}}</option>   
                                        @endforeach
                                    </select>
                                </div> 
                                <div class="col-sm-2 font-weight-bold"> 
                                    Karakteristik dan Kualitas Barang/Produk :  
                                </div>
                                <div class="col-sm-3">  
                                   <input type="text" placeholder="Masukkan Karakteristik dan Kualitas Barang / Produk" class="form-control" name="karakter_produk" id="karakter_produk">
                                </div>
                            </div>  

                            <div class="row mb-5 ml-1">
                                <div class="col-sm-2 font-weight-bold"> 
                                    Uraian Batas Wilayah/Peta Wilayah (Jika Sudah Ada) : <span style="color:red"><b>*</b></span>
                                </div>
                                <div class="col-sm-3">  
                                    <textarea name="uraian_wilayah" id="uraian_wilayah" class="form-control" placeholder="Uraian Wilayah"></textarea>
                                </div> 
                                <div class="col-sm-2 font-weight-bold"> 
                                    Tempat Pelaporan : <span style="color:red"><b>*</b></span>
                                </div>
                                <div class="col-sm-3">  
                                    <input type="text" name="tempat_pelaporan" id="tempat_pelaporan" class="form-control"> 
                                </div> 
                            </div>  

                            <div class="row mb-5 ml-1">
                                <div class="col-sm-2 font-weight-bold"> 
                                    Tanggal Pelaporan :
                                </div>
                                <div class="col-sm-3">  
                                    <input type="date" class="form-control" name="tanggal_pelaporan" id="tanggal_pelaporan">
                                </div> 
                                <div class="col-sm-2 font-weight-bold"> 
                                    Kondisi IG Saat Ini  
                                </div>
                                <div class="col-sm-4">  
                                    @foreach($kondisi as $r)
                                    <input type="checkbox" id="kondisi[]" name="kondisi[]" value="{{$r->id}}">
                                    <label for="kondisi">{{$r->nama}}</label><br>
                                    @endforeach
                                </div> 
                            </div>  


                            <div class="row mb-5 ml-1">
                                <div class="col-sm-2 font-weight-bold"> 
                                    Jenis Dokumentasi
                                </div>
                                <div class="col-sm-3">  
                                    @foreach($jenis_dokumentasi as $r)
                                    <input type="checkbox" id="jenis_dokumentasi[]" name="jenis_dokumentasi[]" value="{{$r->id}}">
                                    <label for="jenis_dokumentasi[]">{{$r->nama}}</label><br>
                                    @endforeach
                                </div> 

                                <div class="col-sm-2 font-weight-bold"> 
                                    Upaya Pelestarian
                                </div>
                                <div class="col-sm-5">  
                                    @foreach($upaya_pelestarian as $r)
                                    <input type="checkbox" id="upaya_pelestarian[]" name="upaya_pelestarian[]" value="{{$r->id}}">
                                    <label for="upaya_pelestarian[]">{{$r->nama}}</label><br>
                                    @endforeach
                                </div> 
                                 
                            </div>  

                            <div class="row mb-5 ml-1">

                                <div class="col-sm-2 font-weight-bold"> 
                                    Uraian Deskripsi :  
                                </div>
                                <div class="col-sm-4">  
                                    <textarea class="form-control summernote" name="uraian_deskripsi" id="uraian_deskripsi" placeholder="Uraian Deskripsi"></textarea>
                                </div> 
                                <div class="col-sm-2 font-weight-bold"> 
                                    Refrensi (ditulis sumber secara lengkap: nama penulis, tahun, judul buku, tempat terbit, penerbit); sumber lisan / nama pelaku (saksi sejarah) yang masih hidup, usia, dll.) :  
                                </div>
                                <div class="col-sm-4">  
                                    <textarea class="form-control summernote" name="refrensi" id="refrensi" placeholder="Uraian Deskripsi"></textarea>
                                </div> 
                            </div>  
                            <input type="hidden" value="{{Auth::user()->id}}" name="user_id"> 
                            <div class="col-sm-11" style="text-align: right;">
                                <button type="submit" class="btn btn-primary" id="laddaBtnSubmit"><i class="icon-floppy-disk"></i> Save</button>
                            </div>
                        </div>
                    </div> 
                    </form> 
                </article>      
            </div><br>
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
                                                    <th>Nama</th>   
                                                    <th>Tempat Pelaporan</th>
                                                    <th>Tanggal Pelaporan</th>
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
                                             @if($r['is_verif']===0)
                                            <?php $verifikasi = '<span class="btn btn-danger btn-rounded">Tidak Disetujui</span>'; ?> 
                                            @elseif($r['is_verif']==1) 
                                            <?php $verifikasi = '<span class="btn btn-success btn-rounded">Disetujui</span>'; ?> 
                                            @elseif ($r['is_verif']==NULL || $r['is_verif']== '') 
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
                                            <tr>
                                                <td>{{$count}}</td> 
                                                <td>{{$r['nama']}}</td> 
                                                <td>{{$r['tempat_pelaporan']}}</td> 
                                                <td>{{$r['tanggal_pelaporan']}}</td>
                                                <td>{!! $verifikasi !!}</td>  
                                                <?php $url = url('d/ki_komunal?k='.$key); ?> 
                                                <?php $url_edit =  url('/landing_drafting_paten/edit/?uuid='.$uuid);?>
                                                <td style="text-align: center;"><button type="button" onclick="window.location.href='{{$url}}'" id="modal_update_konsultan_cipta" class="btn btn-danger btn-xs">
                                                        <i class="icon-eye8"></i></button>
                                                </td>   
                                               <!--  <?php 
                                                if($r['is_verif']===NULL){ 
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
