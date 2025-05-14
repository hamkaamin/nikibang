<!DOCTYPE html>
<html lang="en">
@php
    $color = null;

    $main = '#E23C8E';
    $light = '';
    $dark = '#A2175C';
    $dark_lv2 = '';
    $dark_lv3 = ''; 
@endphp
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Admin {{env('APP_NAME')}}: Autentikasi | {{env("APP_NAMA_PANJANG")}}</title>
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}" type="image/x-icon">

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{asset('assets_login/modules/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets_login/fonts/fontawesome/css/all.min.css')}}">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css" rel="stylesheet">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{asset('assets_login/modules/bootstrap-social/bootstrap-social.css')}}">
    <!-- NProgress -->
    <link href="{{asset('assets_login/css/nprogress.css')}}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{asset('assets_login/css/animate.css')}}" rel="stylesheet">
    <!-- Sweet Alert v2 -->
    <link rel="stylesheet" href="{{asset('assets_login/js/plugins/sweetalert/sweetalert2.css')}}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('assets_login/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets_login/css/components.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('assets_login/css/colors.php?main='.$main.'&light='.$light.'&dark='.$dark.'&dark_lv2='.$dark_lv2.'&dark_lv3='.$dark_lv3)}}">
    <style>
        a:hover, a:focus, a:active {
            color: {{!is_null($color) ? $color->dark_lv2 : '#006247'}};
            text-decoration: none;
        }

        .has-feedback .form-control-feedback {
            position: absolute;
            right: 0;
            display: block;
            width: 40px;
            height: 40px;
            line-height: 40px;
            text-align: center;
        }

        #log_password + .glyphicon, #forg_password + .glyphicon, #forg_password_confirm + .glyphicon {
            cursor: pointer;
            pointer-events: all;
            transition: all .3s ease-in-out;
        }

        #log_password + .glyphicon:hover, #forg_password + .glyphicon:hover, #forg_password_confirm + .glyphicon:hover {
            color: {{!is_null($color) ? $color->main : '#009D73'}};
        }

        #particles-js canvas {
            display: block;
            vertical-align: bottom;
        }

        #particles-js {
            position: absolute;
            width: 100%;
            height: 100%;
            background: transparent;
        }

        .myProgress {
            position: fixed;
            margin-bottom: 0;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 5px;
            border-radius: 0;
            z-index: 20;
        }

        .myProgress .bar {
            height: 100%;
            width: 10%;
            background: {{!is_null($color) ? $color->main : '#009D73'}};
            transition: background 0.15s ease;
        }
    </style>

    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
</head>
<body class="use-nicescroll">
<section class="section">
    <div id="particles-js"></div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                <div class="login-brand">
                    <a href="{{url('/')}}">
                        <img src="{{asset('assets_login/img/logotype.png')}}" alt="logo" width="256"
                             class="img-fluid"></a>
                </div>

                <!-- sign-in -->
                <div id="sign-in" class="card card-primary">
                    <div class="card-header"><h4>MASUK</h4></div>

                    <div class="card-body">
                        @if(session('error'))
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                    &times;
                                </button>
                                <h4><i class="icon fa fa-times"></i> Oops...!</h4>
                                {{session('error')}}
                            </div>
                        @endif
                         @if(session('sukses'))
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                    &times;
                                </button>
                                <h4><i class="icon fa fa-times"></i> Oops...!</h4>
                                {{session('sukses')}}
                            </div>
                        @endif
                        <p class="text-muted">Selamat datang kembali, silahkan masuk menggunakan akun
                            {{env('APP_NAME')}} Anda.</p>
                        <form method="POST" action="{{route('login')}}">
                            {{ csrf_field() }}
                            <div class="form-group has-feedback">
                                <label for="useremail">NIK</label>
                                <input id="useremail" type="text" class="form-control" name="email"
                                       tabindex="1" placeholder="Masukkan NIK Anda"
                                       value="{{old('useremail')}}" required autofocus>
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                <div class="invalid-feedback">Silahkan isi NIK Anda</div>
                            </div>

                            <div class="form-group has-feedback">
                                <div class="d-block">
                                    <label for="log_password" class="control-label">Password</label>
                                    {{-- <div class="float-right">
                                         <a href="javascript:void(0)" class="btn-reset text-small">Forgot
                                             Password?</a>
                                     </div>--}}
                                </div>
                                <input id="log_password" type="password" class="form-control" name="password"
                                       tabindex="2" placeholder="Masukkan password Anda" required>
                                <span class="glyphicon glyphicon-eye-open form-control-feedback"
                                      style="top: 25px"></span>
                                <div class="invalid-feedback">Silahkan isi password Anda</div>
                            </div>

                            {{-- <div class="form-group">
                                 <div class="custom-control custom-checkbox">
                                     <input type="checkbox" name="remember" class="custom-control-input" tabindex="3"
                                            id="remember-me" {{old('remember') ? 'checked' : ''}}>
                                     <label class="custom-control-label" for="remember-me">Ingat saya</label>
                                 </div>
                             </div>--}}

                            <div class="form-group">
                                <button id="btn_login" type="submit" class="btn btn-primary btn-lg btn-block"
                                        tabindex="4">MASUK
                                </button> 
                            </div>
                            <div class="form-group">
                                <a href="{{ url('/berandapage') }}" class="btn btn-info btn-lg btn-block" tabindex="4">Kembali Ke Halaman Depan
                                </a>
                            </div>

                            <div class="form-group">
                                <a href="{{ url('/register') }}" class="btn btn-warning btn-lg btn-block" tabindex="4">DAFTAR
                                </a>
                            </div>
                        </form>
                    </div>
                </div>

                {{--<!-- Reset & Recover password form -->
                <div id="recover-password" class="card card-primary" style="display: none;">
                    <div class="card-header">
                        <h4>{{session('reset') || session('recover_failed') ? 'Recovery' : 'Reset'}} Password</h4>
                    </div>

                    <div class="card-body">
                        @if(session('resetLink') || session('resetLink_failed'))
                            <div
                                class="alert alert-{{session('resetLink') ? 'success' : 'danger'}} alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                    &times;
                                </button>
                                <h4><i class="icon fa fa-{{session('resetLink') ? 'check' : 'times'}}"></i> Alert!
                                </h4>
                                {{session('resetLink') ? session('resetLink') : session('resetLink_failed')}}
                            </div>
                        @elseif(session('recover_failed'))
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                    &times;
                                </button>
                                <h4><i class="icon fa fa-times"></i> Alert!</h4>{{ session('recover_failed') }}
                            </div>
                        @endif
                        <p class="text-muted">
                            {{session('reset') || session('recover_failed') ? 'Please, enter your new password.' :
                            'To recover your password, please enter an email that associated with your account.'}}
                        </p>
                        <form method="POST" action="{{session('reset') || session('recover_failed') ?
                            route('password.reset', ['token' => session('reset') ? session('reset')['token'] :
                            old('token')]) : route('password.email')}}">{{ csrf_field() }}
                            <div class="form-group has-feedback">
                                <div class="d-block">
                                    <label for="res_email" class="control-label">Email</label>
                                    <div class="float-right">
                                        <a href="javascript:void(0)" class="btn-sign-in text-small">
                                            Already have an account? Sign In</a>
                                    </div>
                                </div>
                                <input id="res_email" type="text" class="form-control" name="email"
                                       tabindex="1" placeholder="Enter your email" value="{{session('reset') ||
                                       session('recover_failed') ? session('reset')['email'] : ''}}" required autofocus>
                                <span class="glyphicon glyphicon-envelope form-control-feedback" style="top: 25px"></span>
                            </div>

                            @if(session('reset') || session('recover_failed'))
                                <div class="form-group has-feedback error_forgPass">
                                    <label for="forg_password">New Password</label>
                                    <input id="forg_password" type="password" class="form-control pwstrength"
                                           data-indicator="pwindicator" name="password" tabindex="2"
                                           placeholder="Enter your new password" minlength="6" required>
                                    <span class="glyphicon glyphicon-eye-open form-control-feedback" style="top: 25px"></span>
                                    <div id="pwindicator" class="pwindicator">
                                        <div class="bar"></div>
                                        <div class="label"></div>
                                    </div>
                                </div>

                                <div class="form-group has-feedback error_forgPass">
                                    <label for="forg_password_confirm">Confirm Password</label>
                                    <input id="forg_password_confirm" type="password" class="form-control"
                                           name="password_confirmation" tabindex="2" placeholder="Retype password"
                                           onkeyup="return checkForgotPassword()" minlength="6" required>
                                    <span class="glyphicon glyphicon-eye-open form-control-feedback" style="top: 25px"></span>
                                    <span class="help-block"><b class="aj_forgPass"
                                                                style="text-transform: none"></b></span>
                                </div>
                            @endif

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg btn-block btn-password text-uppercase"
                                        tabindex="4">
                                    {{session('reset')||session('recover_failed') ? 'Reset Password' :
                                    'Send Password Reset Link'}}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>--}}

                <div class="simple-footer text-uppercase">
                    {!! env('APP_FOOTER') !!}
                </div>
            </div>
        </div>
    </div>
</section>
<div class="myProgress">
    <div class="bar"></div>
</div>
<!-- General JS Scripts -->
<script src="{{asset('assets_login/modules/jquery.min.js')}}"></script>
<script src="{{asset('assets_login/modules/popper.js')}}"></script>
<script src="{{asset('assets_login/modules/tooltip.js')}}"></script>
<script src="{{asset('assets_login/modules/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets_login/js/plugins/nicescroll/jquery.nicescroll.js')}}"></script>
<script src="{{asset('assets_login/modules/moment.min.js')}}"></script>
<script src="{{asset('assets_login/js/stisla.js')}}"></script>

<!-- JS Libraies -->
<!-- Page Specific JS File -->
<script src="{{asset('assets_login/js/plugins/sweetalert/sweetalert.min.js')}}"></script>
<script src="{{asset('assets_login/js/hideShowPassword.min.js')}}"></script>
<script src="{{asset('assets_login/js/checkMobileDevice.js')}}"></script>
<script src="{{asset('assets_login/js/particles.min.js')}}"></script>

@include('layouts.partials._alert')

<script> 

    $('#log_password + .glyphicon').on('click', function () {
        $(this).toggleClass('glyphicon-eye-open glyphicon-eye-close');
        $('#log_password').togglePassword();
    });

    (function () {
        particlesJS('particles-js', {
            'particles': {
                'number': {
                    'value': 100,
                    'density': {
                        'enable': true,
                        'value_area': 1000
                    }
                },
                'color': {
                    'value': ['#111111', '#222222']
                },
                'shape': {
                    'type': 'circle',
                    'stroke': {
                        'width': 0,
                        'color': '#fff'
                    },
                    'polygon': {
                        'nb_sides': 5
                    }
                },
                'opacity': {
                    'value': 0.6,
                    'random': false,
                    'anim': {
                        'enable': false,
                        'speed': 1,
                        'opacity_min': 0.1,
                        'sync': false
                    }
                },
                'size': {
                    'value': 2,
                    'random': true,
                    'anim': {
                        'enable': false,
                        'speed': 40,
                        'size_min': 0.1,
                        'sync': false
                    }
                },
                'line_linked': {
                    'enable': true,
                    'distance': 80,
                    'color': '#111',
                    'opacity': 0.9,
                    'width': 1
                }
            },
            'interactivity': {
                'detect_on': 'canvas',
                'events': {
                    'onhover': {
                        'enable': true,
                        'mode': 'grab'
                    },
                    'onclick': {
                        'enable': false
                    },
                    'resize': true
                },
                'modes': {
                    'grab': {
                        'distance': 240,
                        'line_linked': {
                            'opacity': 1
                        }
                    },
                    'bubble': {
                        'distance': 600,
                        'size': 80,
                        'duration': 8,
                        'opacity': 6,
                        'speed': 3
                    },
                    'repulse': {
                        'distance': 300,
                        'duration': 0.4
                    },
                    'push': {
                        'particles_nb': 2
                    },
                    'remove': {
                        'particles_nb': 4
                    }
                }
            },
            'retina_detect': true
        });

    }).call(this);

    var title = document.getElementsByTagName("title")[0].innerHTML;
    (function titleScroller(text) {
        document.title = text;
        setTimeout(function () {
            titleScroller(text.substr(1) + text.substr(0, 1));
        }, 500);
    }(title + " ~ "));

    function progress() {
        var windowScrollTop = $(window).scrollTop();
        var docHeight = $(document).height();
        var windowHeight = $(window).height();
        var progress = (windowScrollTop / (docHeight - windowHeight)) * 100;
        var $bgColor = progress > 99 ? '{{!is_null($color) ? $color->light : '#00ae80'}}' : '{{!is_null($color) ? $color->main : '#009D73'}}';
        var $textColor = progress > 99 ? '#fff' : '#333';

        $('.progress .bar').width(progress + '%').css({backgroundColor: $bgColor});
        // $('h1').text(Math.round(progress) + '%').css({color: $textColor});
        $('.fill').height(progress + '%').css({backgroundColor: $bgColor});
    }

    progress();

    $(document).on('scroll', progress);

    window.mobilecheck() ? $("body").removeClass('use-nicescroll') : '';

    $(".use-nicescroll").niceScroll({
        cursorcolor: "{{!is_null($color) ? $color->main : '#009D73'}}",
        cursorwidth: "8px",
        background: "rgba(222, 222, 222, .75)",
        cursorborder: 'none',
        autohidemode: 'leave',
        zindex: 1,
    });

    $(document).on('mouseover', '.use-nicescroll', function () {
        $(this).getNiceScroll().resize();
    });
</script>
</body>
</html>