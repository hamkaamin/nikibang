@extends('layouts.landing_page')

@section('tempat_content')
@include('include.function')
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
                <div class="col-lg-3 pt-4 pt-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">
                    <aside class="sidebar">
                        <div class="px-3 mb-4">
                            <div class="card border-0 border-radius-0 mb-5 box-shadow-1">
                                <div class="card-body p-4 z-index-1" style="text-align: center;">
                                    NOMOR PENDAFTARAN
                                    <br>
                                    <b>
                                        {!! $detail_data->nomor_pendaftaran !!}
                                    </b>
                                    <hr class="my-2">
                                    TANGGAL PENDAFTARAN
                                    <br>
                                    <b>
                                        {!! date('d-m-Y', strtotime($detail_data->tanggal_pendaftaran)) !!}
                                    </b>
                                </div>
                            </div>
                        </div>
                        <div class="py-1 clearfix">
                            <hr class="my-2">
                        </div>
                        <div class="px-3 mb-4">
                            <div class="card border-0 border-radius-0 mb-5 box-shadow-1">
                                <div class="card-body p-4 z-index-1">
                                    <span>
                                        Gambar <br>
                                    </span>
                                    <a href="javascript:;" onclick="$('#ModalTealSm').modal('show');$('#ModalTealSmLabel').html('{!! $detail_data->nama !!}');$('#ModalTealSmIsi').html(`<img class='card-img-top border-radius-0' src='{{ asset($detail_data->path_file) }}' style='width: 100%'>`);"> 
                                        <img class="card-img-top border-radius-0" src="{{ asset($detail_data->path_file) }}" style="width: 100%">
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="py-1 clearfix">
                            <hr class="my-2">
                        </div>
                        
                        <div class="px-3 mb-4">
                            <div class="card border-0 border-radius-0 mb-5 box-shadow-1">
                                <div class="card-body p-4 z-index-1">
                                    <span>
                                        Download <br>
                                    </span>
                                    @php 
                                    $no=0;
                                    @endphp
                                    @foreach($detail_data->upload_merek as $r)@php 
                                    $no++;
                                    @endphp
                                    <p><a href="{{asset('file_upload/'.$r->path)}}" target="_blank">PUBLIKASI {{$no}}</a></p>
                                    @endforeach
 
                                </div>
                            </div>
                        </div>
                        <div class="py-1 clearfix">
                            <hr class="my-2">
                        </div>
                    </aside>
                </div>
                <div class="col-lg-9 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">

                    <article>
                        <div class="card border-0 border-radius-0 mb-1 box-shadow-1">
                            <div class="card-body p-4 z-index-1">
                                <h3 class="text-color-quaternary text-capitalize font-weight-bold text-5 m-0 mb-3">
                                    {!! $detail_data->nama !!}
                                </h3>  
                                <div class="card-body p-0">
                                    <div class="row">
                                        <div class="col-md-12"> 
                                            STATUS : <br>
                                            <span class="badge badge-info" style="font-size: 20pt">
                                                {!! $detail_data->master_status->nama ?? $detail_data->status !!}
                                            </span> 
                                        </div>
                                        <div class="col-sm-12"> 
                                            <hr>
                                        </div>
                                        <div class="col-sm-6 mb-4"> 
                                            <span class="text-color-default text-2">
                                                NOMOR PENGUMUMAN : 
                                            </span><br>
                                            <span>
                                                {!! $detail_data->nomor_pengumuman!!}
                                            </span> 
                                        </div>
                                        <div class="col-sm-6 mb-4"> 
                                            <span class="text-color-default text-2">
                                                TANGGAL PENGUMUMAN : 
                                            </span><br>
                                            <span>
                                                {!! date('d-m-Y', strtotime($detail_data->tanggal_pengumuman)) !!}
                                            </span><br>
                                        </div>
                                        <div class="col-sm-6 mb-4"> 
                                            <span class="text-color-default text-2">
                                                NOMOR PERMOHONAN : 
                                            </span><br>
                                            <span>
                                                {!! $detail_data->nomor_permohonan!!}
                                            </span><br>
                                        </div>
                                        <div class="col-sm-6 mb-4"> 
                                            <span class="text-color-default text-2">
                                                TANGGAL PENERIMAAN : 
                                            </span><br>
                                            <span>
                                                {!! date('d-m-Y', strtotime($detail_data->tanggal_penerimaan)) !!}
                                            </span><br>
                                        </div>
                                        <div class="col-sm-6 mb-4"> 
                                            <span class="text-color-default text-2">
                                                TANGGAL DIMULAI PELINDUNGAN : 
                                            </span><br>
                                            <span>
                                                {!! date('d-m-Y', strtotime($detail_data->tanggal_perlindungan)) !!}
                                            </span><br>
                                        </div>
                                        <div class="col-sm-6 mb-4"> 
                                            <span class="text-color-default text-2">
                                                TANGGAL BERAKHIR PELINDUNGAN : 
                                            </span><br>
                                            <span>
                                                {!! date('d-m-Y', strtotime($detail_data->tanggal_end_perlindungan)) !!}
                                            </span><br>
                                        </div> 
                                    </div>
                                    <hr class="my-5">
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
                                    <div class="row">
                                        <div class="col-sm-3 font-weight-bold" style="font-size: 15pt">
                                            <p>Translasi</p>
                                        </div>
                                        <div class="col-sm-9">{!! $detail_data->translasi !!}</div>
                                    </div>
                                    <hr class="my-2">

                                    <div class="row mb-4">
                                        <div class="col-sm-3 font-weight-bold" style="font-size: 15pt">
                                            <p>Kelas Nice</p>
                                        </div>
                                        <div class="col-sm-9"> 
                                            <table class="table table-hovered">
                                                <thead>
                                                    <tr>  
                                                        <th style="width: 30%">Kode Kelas</th>
                                                        <th style="width: 70%">Jenis Barang / Jasa</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($detail_data->kelas as $r)
                                                    <tr>
                                                        <td>{{ $r->kode_kelas }}</td> 
                                                        <td>{{ $r->jenis}}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-sm-3 font-weight-bold" style="font-size: 15pt">
                                            <p>Prioritas</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <table class="table table-hovered">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 30%">NOMOR</th>
                                                        <th style="width: 40%">TANGGAL</th>
                                                        <th style="width: 30%">KEWARGANEGARAAN</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($detail_data->prioritas as $r)
                                                    <tr>
                                                        <td>{{ $r->nomor }}</td>
                                                        <td>{!! date('d-m-Y', strtotime($r->tanggal)) !!}</td>
                                                        <td>{{ $r->countries->alpha_2_code }} - {{ $r->countries->nationality }}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div> 
                                    <hr class="my-2">
                                    <div class="row mb-4">
                                        <div class="col-sm-3 font-weight-bold" style="font-size: 15pt">
                                            <p>Pemilik</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <table class="table table-hovered">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 30%">NAMA</th>
                                                        <th style="width: 40%">ALAMAT</th>
                                                        <th style="width: 30%">Nationality</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($detail_data->pemilik as $r)
                                                    <tr>
                                                        <td>{{ $r->nama }}</td>
                                                        <td>{{ $r->alamat }}</td>
                                                        <td>{{ $r->countries->alpha_2_code }} - {{ $r->countries->nationality }}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div> 
                                    <hr class="my-2">
                                    <div class="row mb-4">
                                        <div class="col-sm-3 font-weight-bold" style="font-size: 15pt">
                                            <p>Konsultan</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <table class="table table-hovered">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 30%">NAMA</th>
                                                        <th style="width: 40%">ALAMAT</th>
                                                        <th style="width: 30%">NATIONALITY</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($detail_data->konsultan as $r)
                                                    <tr>
                                                        <td>{{ $r->nama }}</td>
                                                        <td>{{ $r->alamat }}</td>
                                                        <td>{{ $r->countries->alpha_2_code }} - {{ $r->countries->nationality }}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
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
<script type="text/javascript">
    $(document).ready( function () {
        $('.datatable-basic').DataTable( {
          "searching": false
        } );
    } );
</script>
@endpush