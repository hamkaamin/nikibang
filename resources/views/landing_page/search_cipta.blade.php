@extends('layouts.landing_page')

@section('tempat_content')
@include('include.function')
<div role="main" class="main" id="main">

    <section class="page-header page-header-lg custom-bg-color-light-1 border-0 m-0">
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
                        <?php 
                        $tipe = App\Model\Tipe::get_all();
                        /* $tipe_first dr controller */
                        ?>
                        <form class="frm_action_1" method="get" action="{{ url('s/'. $tipe_first->kode) }}"> 
                            <div class="row">
                                <div class="col-sm-12">
                                    <p class="text-4 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="450">Pencarian Data Bebas <span class="txt_tipe">{{ $tipe_first->nama }}</span></p>
                                    @include('include.form-success')
                                </div> 
                                <div class="col-sm-4">
                                    <select id="search_tipe" data-msg-required="Please enter the subject." class="form-control px-4 rounded-0 text-color-light bg-color-primary border-0 appear-animation" style="height: 50px"  data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400" required onchange="var nama = $(this).find(':selected').attr('data-nama');$('.txt_tipe').html(nama);$('#search_nama').attr('placeholder','Pencarian Data Bebas '+nama);$('.frm_action_1').attr('action', '<?php echo url('s') ?>/'+this.value);">
                                        @foreach($tipe as $r)
                                        @php 
                                            $selected='';
                                            if($r->kode == $tipe_first->kode){
                                                $selected='selected';
                                            } 
                                        @endphp
                                        <option {{ $selected }} data-nama="{{ $r->nama }}" value="{{ $r->kode }}">{{ $r->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" name="q" id="search_nama" value="{{ $q ?? '' }}" required="" class="input-hamdi form-control px-4 rounded-0 text-color-light bg-color-primary border-0 appear-animation"
                                    data-appear-animation="fadeInRightShorter"
                                    data-appear-animation-delay="100"
                                    placeholder="Pencarian Bebas {{ $tipe_first->nama }}" style="height: 50px">
                                </div>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-sm btn-gradient btn-rounded font-weight-semibold px-5 py-3 text-3 mb-md-5 text-right appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600" style="float: right;">
                                CARI
                            </button>
                            <div class="spacer d-none d-md-block" style="height: 110px;"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section bg-color-light position-relative border-0 pt-3 m-0">
        <svg class="custom-page-header-curved-top-1" width="100%" height="700" xmlns="http://www.w3.org/2000/svg">
            <path transform="rotate(-3.1329219341278076 1459.172607421877,783.5322875976566) " d="m-12.54488,445.11701c0,0 2.16796,-1.48437 6.92379,-3.91356c4.75584,-2.42918 12.09956,-5.80319 22.45107,-9.58247c20.70303,-7.55856 53.43725,-16.7382 101.56202,-23.22255c48.12477,-6.48434 111.6401,-10.27339 193.90533,-7.05074c41.13262,1.61132 88.20271,5.91306 140.3802,12.50726c230.96006,32.89734 314.60609,102.57281 635.26547,59.88645c320.65938,-42.68635 452.47762,-118.72154 843.58759,3.72964c391.10997,122.45118 553.23416,-82.15958 698.49814,-47.66481c-76.25064,69.23438 407.49874,281.32592 331.2481,350.5603c-168.91731,29.52009 85.02254,247.61162 -83.89478,277.13171c84.07062,348.27313 -2948.95065,-242.40222 -2928.39024,-287.84045" stroke-width="0" stroke="#000" fill="#FFF" id="svg_2"/>
        </svg>
        <div class="container position-relative z-index-1 pb-3">
            <div class="custom-circle custom-circle-medium custom-circle-pos-17 appear-animation" data-appear-animation="expandIn" data-appear-animation-delay="1200">
                <div class="bg-color-quaternary rounded-circle w-100 h-100" data-plugin-float-element data-plugin-options="{'startPos': 'bottom', 'speed': 0.5, 'transition': true, 'transitionDuration': 2000}"></div> 
            </div>
            <div class="custom-circle custom-circle-small custom-circle-pos-18 appear-animation" data-appear-animation="expandIn" data-appear-animation-delay="1400">
                <div class="custom-bg-color-grey-1 rounded-circle w-100 h-100" data-plugin-float-element data-plugin-options="{'startPos': 'bottom', 'speed': 0.5, 'transition': true, 'transitionDuration': 2500}"></div>  
            </div>
            <div class="custom-circle custom-circle-extra-small custom-circle-pos-19 appear-animation" data-appear-animation="expandIn" data-appear-animation-delay="1600">
                <div class="custom-bg-color-grey-2 rounded-circle w-100 h-100" data-plugin-float-element data-plugin-options="{'startPos': 'bottom', 'speed': 0.5, 'transition': true, 'transitionDuration': 1000}"></div>  
            </div>
                
            <div class="row justify-content-center pb-2 mb-4">
                @if(sizeof($hasil_pencarian) <= 0)
                <div class="col-md-7 col-lg-4 mb-4 mb-lg-0">
                    <div class="card border-0 custom-box-shadow-1 custom-border-radius-1 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" data-plugin-options="{'accY': -100}"> 
                        <div class="custom-dots-rect-3" style="background-image: url(<?= asset('assets_landing/img/demos/seo-2/dots-group-3.png'); ?> );"></div> 
                        <div class="card-body text-center p-5">
                            <img src="<?= asset('assets_landing/img/demos/seo-2/icons/icon-1.png'); ?>" class="img-fluid mb-4 mt-3 pb-3" width="55" alt="" />
                            <p> </p>
                            <h4 class="text-color-dark font-weight-semibold mb-3">
                                Tidak Ada Data
                            </h4>
                            <p>&nbsp;</p> 
                        </div> 
                    </div> 
                </div>
                @else
                <div class="col-md-12 mb-lg-0">
                    <div class="card border-0 custom-box-shadow-1 custom-border-radius-1 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" data-plugin-options="{'accY': -100}">
                        <table class="table table-hovered datatable-basic" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Data</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=0; ?>
                                @foreach($hasil_pencarian as $r)
                                <?php 
                                $no++; 
                                $col = "col-md-7 col-lg-4 mb-4 mb-lg-0";
                                if($no%2 == 0){
                                    $col = "col-md-7 col-lg-4 pt-lg-4 mt-lg-5 mb-4 mb-lg-0";
                                }
                                ?>
                                <tr>
                                    <td>
                                        {{ $no }}
                                    </td>
                                    <td>
                                    <div class="card border-0 border-radius-0 box-shadow-1">
                                        <div class="card-body p-4 z-index-1">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    
                                                <?php if($r->path_file == NULL){?>
                                                    <a href="javascript:;" onclick="$('#ModalTealSm').modal('show');$('#ModalTealSmLabel').html('{!! $r->nama !!}');$('#ModalTealSmIsi').html(`<img class='card-img-top border-radius-0' src='{{ asset('file_upload/default.png') }}' style='width: 100%'>`);"> 
                                                        <img class="card-img-top border-radius-0" src="{{ asset('file_upload/default.png') }}" style="width: 100%"><?php

                                                }
                                                else { ?>
                                                    <a href="javascript:;" onclick="$('#ModalTealSm').modal('show');$('#ModalTealSmLabel').html('{!! $r->nama !!}');$('#ModalTealSmIsi').html(`<img class='card-img-top border-radius-0' src='{{ asset($r->path_file) }}' style='width: 100%'>`);"> 
                                                        <img class="card-img-top border-radius-0" src="{{ asset($r->path_file) }}" style="width: 100%">
                                                    </a>
                                               <?php } ?> 
                                                </div>
                                                <div class="col-sm-9">
                                                    <p class="text-uppercase text-3 mb-3 pt-1 text-color-default">
                                                        <time style="font-weight: bold">
                                                            <!-- kode -->
                                                            {!! $r->NamaCipta !!}
                                                        </time> 
                                                        <span class="opacity-3 d-inline-block px-2">|</span> 
                                                        <!-- <span class="badge badge-primary">Primary</span> -->
                                                        <!-- <span class="badge badge-secondary">Secondary</span> -->
                                                        <!-- <span class="badge badge-success">Success</span> -->
                                                        <!-- <span class="badge badge-danger">Danger</span> -->
                                                        <!-- <span class="badge badge-warning">Warning</span> -->
                                                        <span class="badge badge-info">
                                                            @php 
                                                            $status='BELUM DIVERIFIKASI';
                                                            @endphp
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
                                                        {!! $status !!}
                                                    </span>
                                                        <!-- <span class="badge badge-light">Light</span> -->
                                                        <!-- <span class="badge badge-dark">Dark</span> -->
                                                    </p>
                                                    <?php  
                                                    $key = urlencode(hamdi_encrypt("keynyahamdiganteng||{$r->id}||keynyahamdiganteng", "progstylysbyhamdiramadhan"));
                                                    ?>
                                                    <h4 class="card-title mb-3 text-5 font-weight-semibold">
                                                        <a class="text-color-dark" href="{{ url('d/'.$tipe_first->kode.'?k='.$key) }}">
                                                            {!! $r->nama !!}
                                                        </a>
                                                    </h4> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </td>
                                </tr>
                                @endforeach 
                            </tbody>
                        </table>
                    </div>
                </div>
                @endif 
            </div>
            <div class="custom-circle custom-circle-big custom-circle-pos-20 appear-animation" data-appear-animation="expandInWithBlur" data-appear-animation-delay="200" data-appear-animation-duration="2s">
                <div class="bg-color-secondary rounded-circle w-100 h-100" data-plugin-float-element data-plugin-options="{'startPos': 'bottom', 'speed': 1, 'transition': true, 'transitionDuration': 2000}"></div>
            </div>
            <div class="custom-circle custom-circle-small custom-circle-pos-21 appear-animation" data-appear-animation="expandInWithBlur" data-appear-animation-delay="700" data-appear-animation-duration="2s">
                <div class="custom-bg-color-grey-2 rounded-circle w-100 h-100" data-plugin-float-element data-plugin-options="{'startPos': 'bottom', 'speed': 0.5, 'transition': true, 'transitionDuration': 1000}"></div>
            </div>
            <div class="custom-circle custom-circle-medium custom-circle-pos-22 appear-animation" data-appear-animation="expandInWithBlur" data-appear-animation-delay="1200" data-appear-animation-duration="2s">
                <div class="custom-bg-color-grey-1 rounded-circle w-100 h-100" data-plugin-float-element data-plugin-options="{'startPos': 'bottom', 'speed': 0.5, 'transition': true, 'transitionDuration': 3000}"></div>
            </div>
            <div class="custom-circle custom-circle-extra-small custom-circle-pos-23 appear-animation" data-appear-animation="expandInWithBlur" data-appear-animation-delay="1700" data-appear-animation-duration="2s">
                <div class="custom-bg-color-grey-2 rounded-circle w-100 h-100" data-plugin-float-element data-plugin-options="{'startPos': 'bottom', 'speed': 0.5, 'transition': true, 'transitionDuration': 1500}"></div>
            </div>
        </div>
    </section> 

</div>   

@endsection
@push('scripts')
<script type="text/javascript">
    $(document).ready( function () {
        $('.datatable-basic').DataTable( {
          "searching": false
        } );
    } );
</script>
@endpush