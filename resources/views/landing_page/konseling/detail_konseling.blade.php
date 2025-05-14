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
        <div class="container">
            <div class="row">
                 <div class="col-lg-3 pt-4 pt-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">
                    <aside class="sidebar">
                        <div class="px-3 mb-4">
                            <div class="card border-0 border-radius-0 mb-5 box-shadow-1">
                                <div class="card-body p-4 z-index-1" style="text-align: center;">
                                    E-KONSULTASI
                                    <br>
                                    <b>
                                        {{$data->ekonsultasi}}
                                    </b>
                                    <hr class="my-2">
                                    KATEGORI
                                    <br>
                                    <?php
                                    $dis_kategori='';
                                    if($data->kategori == 1){
                                        $dis_kategori ='<span style="color:grey">RENDAH</span>'; 
                                    }else if($data->kategori == 2){
                                        $dis_kategori ='<span style="color:orange">SEDANG</span>';
                                        $bg = 'bg-orange';
                                    }else if($data->kategori == 3){
                                        $dis_kategori ='<span style="color:red">TINGGI</span>'; 
                                    }else if($data->kategori == 4){
                                        $dis_kategori ='<p style="color:red !important">Menunggu Tanggapan</p>';
                                    }
                                    ?>
                                    {!! $dis_kategori !!}
                                </div>
                            </div>
                        </div>
                        <div class="py-1 clearfix">
                            <hr class="my-2">
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
                                    @if($data->nama_file == NULL || $data->nama_file == '')  
                                    <p> Tidak Ada File </p> 
                                    @else
                                    <p><a href="{{asset($data->path_file)}}" download="" target="_blank">File</a></p>
                                    @endif
                                </div>
                            </div>
                            <br><br><br><br><br><br>
                        </div>
                        <div class="py-1 clearfix">
                            <hr class="my-2">
                        </div>
                    </aside> 
                </div>
                <div class="col-lg-9 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1600">

                    <article>
                        <div class="card border-0 border-radius-0 mb-5 box-shadow-1">
                            <div class="card-body p-4 z-index-1"> 

                                <div class="post-image pb-4">
                                    <p><strong class="name">{{$data->user->name}}</strong></p>
                                </div>

                                <div class="card-body p-0">
                                    {!! $data->deskripsi !!}

                                    <!-- AddThis Button BEGIN --> 
                                    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-50faf75173aadc53"></script>
                                    <!-- AddThis Button END -->

                                    <hr class="my-5">

                                    <div class="post-block post-author">
                                        <h3 class="text-color-secondary text-capitalize font-weight-bold text-5 m-0 mb-3">Tanggapan</h3> 
                                    </div>

                                    <hr class="my-5">

                                    <div id="comments" class="post-block post-comments">
                                         

                                        <ul class="comments">
                                            <li>
                                                <div class="comment">
                                                    <div class="img-thumbnail img-thumbnail-no-borders d-none d-sm-block">
                                                        <img class="avatar rounded-circle" alt="" src="{{asset('assets/images/pemprov_avatar.png')}}">
                                                    </div>
                                                    <div class="comment-block">
                                                        <div class="comment-arrow"></div>
                                                        <span class="comment-by">
                                                            <strong class="text-dark">Admin</strong> 
                                                        </span>
                                                        {!! $data->tanggapan !!}

                                                        <?php 
                                                        $currentDateTime = $data->updated_at;
                                                        $newDateTime = date('d-M-Y h:i A', strtotime($currentDateTime));
                                                        ?>
                                                        <span class="date float-right">{{$newDateTime}}</span>
                                                    </div>
                                                </div> 
                                            </li> 
                                        </ul> 

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
