@extends('layouts.landing_page')

@section('tempat_content')
@include('include.function')  
@include('sweetalert::alert')
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
                <div class="col-lg-12 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">
                    <article>
                        <div class="col-md-12">  

                        </div>
                        <div class="card border-0 border-radius-0 mb-5 box-shadow-1">
                            <div class="card-body z-index-1">
                                <div class="card-body p-0"> 
                                    <button type="button" class="btn bg-slate btn-grad-create btn-sm" onclick="$('#divDrafting').show(500);">
                                        <b><i class="icon-add"></i></b> &nbsp Drafting Paten
                                    </button>
                                    <div id="divDrafting" style="display: none;">
                                        <form class="form-horizontal" method="post" action="{{ route('simpan_drafting_paten') }}" enctype="multipart/form-data" > 
                                        {{ csrf_field() }}
                                        <div class="row mb-12 ml-1">

                                            <div class="col-sm-10 font-weight-bold"> 
                                                Isi Drafting Disini
                                            </div>
                                            <div class="col-sm-2" >
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
                                                Upload File <span style="color:red"><b>*</b></span> : 
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="file" placeholder="Masukkan Foto Anda" class="form-control" name="select_file" id="select_file">
                                            </div> 

                                            <div class="col-sm-2 font-weight-bold"> 
                                                Status <span style="color:red"><b>*</b></span> : 
                                            </div>
                                            <div class="col-sm-3">
                                                <select name="status_paten" id="status_paten" data-placeholder="Member" class="form-control select">
                                                    <option value="0">-- Tampilkan Semua --</option> 
                                                    <option value="1">(PA) Diberi Paten</option>
                                                    <option value="2">(PA) Dianggap Ditarik Kembali (Direktur)</option>
                                                    <option value="3">(PA) Berakhir Masa Perlindungan</option>
                                                    <option value="4">(PA) Pengajuan</option>
                                                    <option value="5">(PA) Proses</option>
                                                    <option value="6">(PA) Ditolak</option>
                                                </select>
                                            </div> 
                                        </div> 
                                        <div class="row mb-5 ml-1">
                                            <div class="col-sm-2 font-weight-bold"> 
                                                Nomor Pendaftaran <span style="color:red"><b>*</b></span> : 
                                            </div>
                                            <div class="col-sm-3">   
                                               <input type="text" class="form-control required" placeholder="Masukkan Nomor Pendaftaran" name="nomor_pendaftaran" id="nomor_pendaftaran" required="required"> 
                                            </div>

                                            <div class="col-sm-2 font-weight-bold"> 
                                                Nama Pemeriksa <span style="color:red"><b>*</b></span> : 
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" placeholder="Masukkan Nama Pemeriksa" class="form-control" name="nama_pemeriksa" id="nama_pemeriksa">
                                            </div> 
                                        </div>  
                                        <div class="row mb-5 ml-1">
                                            <div class="col-sm-2 font-weight-bold"> 
                                                Tanggal Pendaftaran <span style="color:red"><b>*</b></span> : 
                                            </div>
                                            <div class="col-sm-3">  
                                                <input type="date" class="form-control required" value="<?= date('Y-m-d') ?>" name="tanggal_pendaftaran" id="tanggal_pendaftaran" required="required">
                                            </div>

                                            <div class="col-sm-2 font-weight-bold"> 
                                                Nama Paten <span style="color:red"><b>*</b></span> : 
                                            </div>
                                            <div class="col-sm-3">  
                                                <input placeholder="Masukkan Nama Paten" type="text" class="form-control required" name="nama_paten" id="nama_paten" required="required">
                                            </div>
                                        </div> 
                                        <div class="row mb-5 ml-1">
                                            <div class="col-sm-2 font-weight-bold"> 
                                                Nomor Pengumuman <span style="color:red"><b>*</b></span> : 
                                            </div>
                                            <div class="col-sm-3">  
                                                <input type="text" class="form-control required" placeholder="Masukkan Nomor Pengumuman" name="nomor_pengumuman" id="nomor_pengumuman" required="required"> 
                                            </div>

                                            <div class="col-sm-2 font-weight-bold"> 
                                                Nomor Paten : 
                                            </div>
                                            <div class="col-sm-3">  
                                                <input  type="text" placeholder="Masukkan Nomor Paten Anda" class="form-control" name="nomor_paten" id="nomor_paten" >
                                            </div>
                                        </div>  
                                        <div class="row mb-5 ml-1">
                                            <div class="col-sm-2 font-weight-bold"> 
                                                Tanggal Pengumuman : <span style="color:red"><b>*</b></span>  
                                            </div>
                                            <div class="col-sm-3">  
                                                <input type="date" class="form-control required" value="<?= date('Y-m-d') ?>" name="tanggal_pengumuman" id="tanggal_pengumuman" required="required">
                                            </div>

                                            <div class="col-sm-2 font-weight-bold"> 
                                                Tanggal Penerimaan <span style="color:red"><b>*</b></span> : 
                                            </div>
                                            <div class="col-sm-3">  
                                                <input type="date" class="form-control" value="<?= date('Y-m-d') ?>" name="tanggal_penerimaan" id="tanggal_penerimaan">
                                            </div> 
                                        </div>

                                        <div class="row mb-5 ml-1">
                                            <div class="col-sm-2 font-weight-bold"> 
                                                Tanggal Perlindungan : <span style="color:red"><b>*</b></span>  
                                            </div>
                                            <div class="col-sm-3">  
                                                <input type="date" placeholder="Masukkan Jenis Paten Anda" class="form-control" name="tanggal_perlindungan" id="tanggal_perlindungan" required="">
                                            </div>

                                            <div class="col-sm-2 font-weight-bold"> 
                                                Tanggal Berakhir Perlindungan <span style="color:red"><b>*</b></span> : 
                                            </div>
                                            <div class="col-sm-3">  
                                                <input type="date" placeholder="Masukkan Tanggal Perlindungan Anda" class="form-control" name="tanggal_end_perlindungan" id="tanggal_end_perlindungan">
                                            </div> 
                                        </div>

                                        <div class="row mb-5 ml-1">
                                            <div class="col-sm-2 font-weight-bold"> 
                                                Jumlah Klaim : <span style="color:red"><b>*</b></span> : 
                                            </div>
                                            <div class="col-sm-3">  
                                                <input type="number" placeholder="Masukkan Jumlah Klaim" class="form-control" name="jumlah_klaim" id="jumlah_klaim">
                                            </div>

                                            <div class="col-sm-2 font-weight-bold"> 
                                                Tanggal Pemberian : <span style="color:red"><b>*</b></span> : 
                                            </div>
                                            <div class="col-sm-3">  
                                                <input type="date" placeholder="Masukkan Tanggal Pemberian" class="form-control" name="tanggal_pemberian" id="tanggal_pemberian">
                                            </div> 
                                        </div> 

                                        <div class="row mb-5 ml-1">
                                            <div class="col-sm-2 font-weight-bold"> 
                                                Tahun Pembayaran Terakhir : 
                                            </div>
                                            <div class="col-sm-3">  
                                                <input type="number" placeholder="Masukkan Tahun Pembayaran Terakhir" class="form-control" name="tahun_pembayaran_terakhir" id="tahun_pembayaran_terakhir">
                                            </div>

                                            <div class="col-sm-2 font-weight-bold"> 
                                                Tanggal Bayar : <span style="color:red"><b>*</b></span> : 
                                            </div>
                                            <div class="col-sm-3">  
                                                <input type="date" placeholder="Masukkan Tanggal Bayar Pten" class="form-control" name="tanggal_bayar" id="tanggal_bayar" >
                                            </div> 
                                        </div> 

                                        <div class="row mb-5 ml-1"> 
                                            <div class="col-sm-2 font-weight-bold"> 
                                                Nomor Permohonan : 
                                            </div>
                                            <div class="col-sm-3">  
                                                <input type="number" placeholder="Masukkan Nomor Permohonan" class="form-control" name="nomor_permohonan" id="nomor_permohonan"> 
                                            </div>

                                            <div class="col-sm-2 font-weight-bold"> 
                                                Nominal : <span style="color:red"><b>*</b></span> : 
                                            </div>
                                            <div class="col-sm-3">  
                                                <input type="number" placeholder="Masukkan Nominal Anda" class="form-control" name="nominal" id="nominal">
                                            </div> 
                                        </div> 

                                        <div class="row mb-5 ml-1">
                                            <div class="col-sm-2 font-weight-bold"> 
                                                Abstrak : 
                                            </div>
                                            <div class="col-sm-8">  
                                                <textarea style="font-weight: bold; font-family: Arial;" name="abstrak" id="abstrak" rows="4"class="form-control summernote"></textarea>
                                            </div> 
                                        </div> 

                                        <input type="hidden" value="{{Auth::user()->id}}" name="user_id">
                                        <div class="col-sm-11" style="text-align: right;">
                                            <button type="submit" class="btn btn-primary" id="laddaBtnSubmit"><i class="icon-floppy-disk"></i> Save</button>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                                        <th>Nomor Pencatatan</th> 
                                                        <th>Tanggal Pencatatan</th> 
                                                        <th>Nama</th>   
                                                        <th>Status</th>
                                                        <th>Verifikasi</th> 
                                                        <th>Detail</th>  
                                                        <th style="width: 50px !important">Act</th>
                                                    </tr>
                                                </thead> 
                                                <?php
                                                $count = 0; 
                                                $status='-';
                                                $verifikasi = '';
                                                $dis_kategori = '';
                                                ?>
                                                @foreach($data_drafting as $r)

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
                                                    <td>{{$r['nomor_pendaftaran']}}</td> 
                                                    <td>{{$r['tanggal_pendaftaran']}}</td> 
                                                    <td>{{$r['nama']}}</td> 
                                                    <td>{{$status}}</td>
                                                    <td>{!! $verifikasi !!}</td>  
                                                    <?php $url = url('d/paten?k='.$key); ?> 
                                                    <?php $url_edit =  url('/landing_drafting_paten/edit/?uuid='.$uuid);?>
                                                    <td style="text-align: center;"><button type="button" onclick="window.location.href='{{$url}}'" id="modal_update_konsultan_cipta" class="btn btn-danger btn-xs">
                                                            <i class="icon-eye8"></i></button>
                                                    </td>   
                                                    <?php 
                                                    if($r['is_biaya']===NULL){ 
                                                    ?>
                                                        <td>   
                                                            <button type="button" onclick="window.location.href='{{$url_edit}}'" id="modal_update_konsultan_cipta" class="btn btn-info btn-xs btn-block">
                                                            <i class="icon-pencil"></i></button> 
 
                                                        </td>
                                                   <?php } ?>
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
    jquery(document).ready(function($) {
        $('.select2').select2();
    }); 
</script>
@endpush
