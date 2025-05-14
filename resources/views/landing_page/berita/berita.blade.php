@extends('layouts.landing_page')

@section('tempat_content')
@include('include.function')  
@php 
    $num_per_page = 02;
    $start_from = ($page-1)*02;
@endphp
<body data-target="#header" data-spy="scroll" data-offset="100">

    <div class="body"> 

        <div role="main" class="main">

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
                    <div class="row py-5 mb-5 mt-2 p-relative z-index-1">
                        <div class="col"> 
                            <div class="overflow-hidden mb-4">
                                <h1 class="d-block text-color-quaternary font-weight-bold line-height-3 text-center mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="1000">BERITA</h1>
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
                        <div class="col-lg-9 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1600">
                        @php
                        $data_berita = App\Model\Berita::get_page_berita($num_per_page,$start_from); 
                        $data_count_page = App\Model\Berita::count_page($num_per_page);
                        // dd($data_count_page);
                        $konten = '';  
                        // dd($data_berita);
                        @endphp
                        @foreach($data_berita as $r)
                        @php 
                        $konten = substr($r->konten,0,200);
                        @endphp 

                        <?php  
                        $key = urlencode(hamdi_encrypt("keynyahamdiganteng||{$r->id}||keynyahamdiganteng", "progstylysbyhamdiramadhan"));
                        ?>
                            <article class="mb-5">
                                <div class="card border-0 border-radius-0 box-shadow-1">
                                    <div class="card-body p-4 z-index-1">
                                        <a href="{{ url('detail_berita?k='.$key) }}">
                                            <img class="card-img-top border-radius-0" src="{{asset($r->thumbnail)}}" alt="Card Image">
                                        </a>
                                        <p class="text-uppercase text-1 mb-3 pt-1 text-color-default"><i class="icon-calendar2"> <?= date("d-M-Y", strtotime($r->created_at))."\n"; ?></i> <span class="opacity-3 d-inline-block px-2">|</span> <i class="icon-eye8"></i>  <b>{{$r->visit}}</b> <i>DILIHAT</i> <span class="opacity-3 d-inline-block px-2">|</span><i class="icon-price-tag2"></i>   {{$r->kategori}}</p>
                                        <div class="card-body p-0">
                                            <h4 class="card-title mb-3 text-5 font-weight-semibold"><a class="text-color-dark" href="{{ url('detail_berita?k='.$key) }}">{{$r->judul}}</a></h4>
                                            <p class="card-text mb-3">{!!\Illuminate\Support\Str::words($r->konten, 20, '...')!!}</p>
                                            <a href="{{ url('detail_berita?k='.$key) }}" class="text-color-tertiary font-weight-bolder text-uppercase text-decoration-none d-block mt-3">Read More +</a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        @endforeach
 

                            <ul class="custom-pagination-style-1 pagination pagination-rounded pagination-md justify-content-center"> 
                                @php 
                                $class = ' ';
                                @endphp
                                
                                {{-- @if($page>1) 
                                    <li class="page-item"><a class="page-link" href="{{ url('/berita_page',$page-1) }}"><i class="fas fa-angle-left"></i></a></li> 
                                @endif  --}}
                                @for($i=1;$i<=$data_count_page;$i++) 
                                @if($i == $page)
                                    @php $class='active'; @endphp
                                @elseif($i != $page)
                                    @php $class=' '; @endphp
                                @endif
                                <li class="page-item {{$class}}"><a class="page-link" href="{{ url('/berita_page',$i) }}">{{$i}}</a></li>
                                @endfor
                                {{-- @if($i>$page)
                                <li class="page-item"><a class="page-link" href="{{ url('/berita_page',($page+1)) }}"><i class="fas fa-angle-right"></i></a></li>
                                @endif --}}
                            </ul>
                            <br><br><br><br><br><br><br><br><br><br><br><br>
                        </div>
                        
                        <div class="col-lg-3 pt-4 pt-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1800">
                            <aside class="sidebar"> 
                                <div class="px-3 mt-4">
                                    <h3 class="text-color-quaternary text-capitalize font-weight-bold text-5 m-0">Kategori</h3>
                                    @foreach($data_kategori as $rk)
                                    <ul class="nav nav-list flex-column mt-2 mb-0 p-relative right-9">
                                        <li class="nav-item"><a class="nav-link bg-transparent border-0">{{$rk->kategori}} ({{$rk->jumlah}})</a></li> 
                                    </ul>
                                    @endforeach
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </section>
 

        </div> 
 

    </div>

    <!-- Vendor -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/jquery.appear/jquery.appear.min.js"></script>
    <script src="vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.min.js"></script>
    <script src="vendor/popper/umd/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/common/common.min.js"></script>
    <script src="vendor/jquery.validation/jquery.validate.min.js"></script>
    <script src="vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
    <script src="vendor/jquery.gmap/jquery.gmap.min.js"></script>
    <script src="vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
    <script src="vendor/isotope/jquery.isotope.min.js"></script>
    <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="vendor/vide/jquery.vide.min.js"></script>
    <script src="vendor/vivus/vivus.min.js"></script>
    
    <!-- Theme Base, Components and Settings -->
    <script src="js/theme.js"></script>
    
    <!-- Current Page Vendor and Views -->
    <script src="vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>



    <!-- Demo -->
    <script src="js/demos/demo-seo-2.js"></script>

    <!-- Theme Custom -->
    <script src="js/custom.js"></script>
    
    <!-- Theme Initialization Files -->
    <script src="js/theme.init.js"></script>


    <!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    
        ga('create', 'UA-12345678-1', 'auto');
        ga('send', 'pageview');
    </script>
     -->


</body>
@endsection