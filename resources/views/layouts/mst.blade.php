<!DOCTYPE html>
<html dir="ltr" lang="en-US">
@php
    $color = \App\Models\ColorScheme::where('is_active', true)->first();
    $info_web = \App\Models\InfoWeb::first();
    $info_kontak = \App\Models\InfoKontak::first();
    $pengumuman = \App\Models\Pengumuman::whereDate('selesai', '>=', now())->orderByDesc('id')->get();

    $main = '';
    $light = '';
    $dark = '';
    $dark_lv2 = '';
    $dark_lv3 = '';
    if(!is_null($color)) {
        $main = str_replace('#','',$color->main);
        $light = str_replace('#','',$color->light);
        $dark = str_replace('#','',$color->dark);
        $dark_lv2 = str_replace('#','',$color->dark_lv2);
        $dark_lv3 = str_replace('#','',$color->dark_lv3);
    }
@endphp

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="SemiColonWeb">
    <title>@yield('title')</title>

    <link rel="shortcut icon" href="{{asset('favicon.ico')}}" type="image/x-icon">
    <link
        href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700%7CMontserrat:300,400,500,600,700%7CMerriweather:300,400,300i,400i"
        rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/dark.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/swiper.css')}}" type="text/css">

    <link rel="stylesheet" href="{{asset('demos/business/business.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('demos/business/css/fonts.css')}}" type="text/css">

    <link rel="stylesheet" href="{{asset('css/font-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/glyphicons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/et-line.css')}}" type="text/css">

    <link rel="stylesheet" href="{{asset('css/responsive.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/media-query.css')}}" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{asset('css/custom.css')}}" type="text/css">
    <!-- sweetalert2 -->
    <link rel="stylesheet" href="{{asset('js/plugins/sweetalert/sweetalert2.css')}}">
    <!-- marquee -->
    <link rel="stylesheet" href="{{asset('js/plugins/marquee/css/jquery.jConveyorTicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('js/plugins/marquee/css/marquee.css')}}">

    @stack('styles')

    <link rel="stylesheet" type="text/css"
          href="{{asset('css/colors.php?main='.$main.'&light='.$light.'&dark='.$dark.'&dark_lv2='.$dark_lv2.'&dark_lv3='.$dark_lv3)}}">

    <script src='https://www.google.com/recaptcha/api.js?onload=recaptchaCallback&render=explicit' async defer></script>
</head>

<body class="stretched use-nicescroll">
<div id="wrapper" class="clearfix">
    <header id="header" class="transparent-header dark full-header" data-sticky-class="not-dark"
            data-responsive-class="not-dark" data-sticky-offset="full">
        @if(count($pengumuman) > 0)
            <div id="top-bar">
                <div class="row">
                    <div class="col">
                        <div class="d-demo-wrap">
                            <div class="jctkr-label ls2">
                                <strong>PENGUMUMAN</strong>
                            </div>
                            <div class="js-conveyor-3">
                                <ul>
                                    @foreach($pengumuman as $row)
                                        <li><span>{{$row->konten}}</span></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <div id="header-wrap">
            <div class="container clearfix">
                <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                <div id="logo">
                    <a href="{{route('beranda')}}" class="standard-logo"
                       data-dark-logo="{{asset('images/logotype-white.png')}}">
                        <img src="{{asset('images/logotype.png')}}" alt="Logo"></a>
                    <a href="{{route('beranda')}}" class="retina-logo"
                       data-dark-logo="{{asset('images/logotype@2x-white.png')}}">
                        <img src="{{asset('images/logotype@2x.png')}}" alt="Logo"></a>
                </div>

                <nav id="primary-menu" class="not-dark">
                    @include('layouts.partials._headerMenu')
                </nav>
            </div>
        </div>
    </header>

    @yield('content')

    @include('layouts.partials._modals')

    <footer id="footer" class="noborder" style="background-color: #FFF">
        <div class="container clearfix">
            <div class="footer-widgets-wrap pt-5 pb-3 border-bottom clearfix">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-12">
                        <div class="widget clearfix">
                            <img src="{{asset('images/logotype-footer.png')}}" alt="Logo" class="footer-logo mb-4"
                                 style="margin-top: -1.5rem">
                            {!! \Illuminate\Support\Str::words($info_web->info,14,'...') !!}
                            @if(count(explode(' ', $info_web->info)) > 14)
                                <a href="{{route('profil.tentang-bappeda')}}" class="button-link font-italic">baca
                                    selengkapnya</a>
                            @endif
                            <div
                                style="background: url('{{asset('images/world_map.png')}}') no-repeat center center; background-size: 100%;">
                                <address class="mb-3">
                                    <strong>Alamat Kantor:</strong><br>
                                    {{$info_kontak->alamat}}
                                </address>
                                <abbr title="Nomor Telepon"><strong>Telepon:</strong></abbr>
                                <a href="tel:{{$info_kontak->telp}}">{{$info_kontak->telp}}</a><br>
                                <abbr title="Nomor Fax"><strong>Fax:</strong></abbr>
                                <a href="fax:{{$info_kontak->fax}}">{{$info_kontak->fax}}</a><br>
                                <abbr title="Alamat Email"><strong>Email:</strong></abbr>
                                <a href="mailto:{{$info_kontak->email}}">{{$info_kontak->email}}</a>

                                <div class="mt-3">
                                    <a href="mailto:{{$info_kontak->email}}"
                                       class="social-icon si-small si-light si-rounded si-google">
                                        <i class="icon-google"></i>
                                        <i class="icon-google"></i>
                                    </a>
                                    <a href="{{$info_kontak->facebook}}" target="_blank"
                                       class="social-icon si-small si-light si-rounded si-facebook">
                                        <i class="icon-facebook"></i>
                                        <i class="icon-facebook"></i>
                                    </a>
                                    <a href="{{$info_kontak->instagram}}" target="_blank"
                                       class="social-icon si-small si-light si-rounded si-instagram">
                                        <i class="icon-instagram"></i>
                                        <i class="icon-instagram"></i>
                                    </a>
                                    <a href="{{$info_kontak->twitter}}" target="_blank"
                                       class="social-icon si-small si-light si-rounded si-twitter">
                                        <i class="icon-twitter"></i>
                                        <i class="icon-twitter"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 col-md-4 col-sm-12">
                        <div class="widget img-thumbnail clearfix">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.1972172751757!2d112.23467421477663!3d-7.553462294552552!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78401dde54cc69%3A0xe010613061fd5829!2sBappeda%20Kabupaten%20Jombang!5e0!3m2!1sid!2sid!4v1604387931948!5m2!1sid!2sid"
                                height="250" frameborder="0" allowfullscreen="" aria-hidden="false"
                                tabindex="0"></iframe>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="widget quick-contact-widget form-widget clearfix">
                            <h4 class="ls0 mb-3 nott" data-toc-skip>Tinggalkan Pesan</h4>
                            <div class="form-result"></div>
                            <form action="{{route('submit.kontak')}}" method="post"
                                  class="quick-contact-form no-ajax nobottommargin">
                                @csrf
                                <input type="text" class="form-control" name="nama" placeholder="Nama lengkap"
                                       value="{{Auth::check() ? Auth::user()->name : null}}" required>
                                <input type="email" class="form-control" name="email" placeholder="Email" required>
                                <input type="text" class="form-control" name="telp"
                                       onkeypress="return numberOnly(event, false)" placeholder="Telepon" required>
                                <input type="text" class="form-control" name="subject" placeholder="Subyek" required>
                                <textarea class="form-control input-block-level short-textarea"
                                          name="konten" rows="4" cols="30" required
                                          placeholder="Tulis pesan / kritik / saran Anda di sini&hellip;"></textarea>
                                <button type="submit"
                                        class="btn btn-primary btn-block btn-sm letter-spacing-2 nomargin">KIRIM PESAN
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="copyrights" class="nobg">
            <div class="container clearfix">
                <div class="row justify-content-center align-items-center">
                    <div class="col text-center text-uppercase">© {{now()->format('Y').' '.env('APP_TITLE')}}</div>
                </div>
            </div>
        </div>
    </footer>
</div>

<div id="gotoTop" class="icon-line-arrow-up"></div>
<div class="myProgress">
    <div class="bar"></div>
</div>

<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/plugins.js')}}"></script>

<!-- Bootstrap Typeaheadjs Plugin -->
<script src="{{asset('js/components/typehead.js')}}"></script>
<script src="{{asset('js/components/underscore-min.js')}}"></script>
<!-- moment Plugin -->
<script src="{{asset('js/components/moment-with-locales.min.js')}}"></script>
<!-- toggle-password -->
<script src="{{asset('js/hideShowPassword.min.js')}}"></script>
<!-- check-mobile -->
<script src="{{asset('js/checkMobileDevice.js')}}"></script>
<!-- Nicescroll -->
<script src="{{asset('js/plugins/nicescroll/jquery.nicescroll.js')}}"></script>
<!-- sweetalert2 -->
<script src="{{asset('js/plugins/sweetalert/sweetalert.min.js')}}"></script>
<!-- marquee -->
<script src="{{asset('js/plugins/marquee/js/jquery.jConveyorTicker.min.js')}}"></script>

<script src="{{asset('js/functions.js')}}"></script>

@include('layouts.partials._scripts')
@include('layouts.partials._alert')
@include('layouts.partials._confirm')
@stack('scripts')
</body>
</html>
