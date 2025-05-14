<!DOCTYPE html>
<html lang="en">
@php
    $color = \App\Models\ColorScheme::where('is_active', true)->first();

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
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>@yield('title')</title>
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}">

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{asset('admins/modules/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('admins/fonts/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('admins/modules/bootstrap/css/glyphicons.css')}}">
    <!-- Page Specific CSS File -->
    <link rel="stylesheet" href="{{asset('admins/modules/bootstrap-select/dist/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{asset('js/plugins/sweetalert/sweetalert2.css')}}">
    <link rel="stylesheet" href="{{asset('admins/modules/izitoast/css/iziToast.min.css')}}">
    @stack('styles')

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('admins/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('admins/css/components.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('admins/css/colors.php?main='.$main.'&light='.$light.'&dark='.$dark.'&dark_lv2='.$dark_lv2.'&dark_lv3='.$dark_lv3)}}">

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
    <!-- /END GA -->
</head>
<body class="use-nicescroll">
@php $role = Auth::user(); @endphp
<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        <nav class="navbar navbar-expand-lg main-navbar">
            <ul class="navbar-nav mr-auto">
                <li><a href="javascript:void(0)" data-toggle="sidebar" class="nav-link nav-link-lg">
                        <i class="fas fa-bars"></i></a></li>
            </ul>
            <ul class="navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="javascript:void(0)" data-toggle="dropdown"
                       class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                        <img alt="image" src="{{$role->ava != "" ? asset('storage/admins/ava/'.$role->ava) :
                        asset('admins/img/avatar/avatar-'.rand(1,5).'.png')}}" class="rounded-circle mr-1">
                        <div class="d-sm-none d-lg-inline-block">{{$role->name}}</div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
{{--                        <a href="{{route('admin.edit.profile')}}" class="dropdown-item has-icon">--}}
{{--                            <i class="fas fa-user-edit"></i> Sunting Profil</a>--}}
                        <a href="javascript:void(0)" class="dropdown-item has-icon" onclick="show_modal_setting()">
                            <i class="fas fa-cogs"></i> Ubah Password</a>
                        <div class="dropdown-divider"></div>
                        <a href="javascript:void(0)" class="dropdown-item has-icon text-danger btn_signOut">
                            <i class="fas fa-sign-out-alt"></i> Keluar</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                              style="display: none;">@csrf
                        </form>
                    </div>
                </li>
            </ul>
        </nav>

        <div class="main-sidebar sidebar-style-2">
            <aside id="sidebar-wrapper">
                <div class="sidebar-brand">
                    <a href="{{route('admin.dashboard')}}">Dashboard</a>
                </div>
                <div class="sidebar-brand sidebar-brand-sm">
                    <a href="{{route('admin.dashboard')}}">
                        <img class="img-fluid" width="75%" src="{{asset('images/icon-512.png')}}">
                    </a>
                </div>
                @include('layouts.partials._sidebarMenu')
            </aside>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            @yield('content')


            <div class="modal fade" id="settingModal" tabindex="-1" role="dialog"
                 aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <form action="{{route('admin.update.pass')}}" method="post" class="form-group"
                          enctype="multipart/form-data">
                        @CSRF
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Pengaturan Akun</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="col form-group">
                                    <label for="recipient-name" class="col-form-label">Username<sup class="text-danger">*</sup>
                                    </label>
                                    <input type="text" name="csv_file" id="" class="form-control" readonly required style="width: 500px" value="{{\Illuminate\Support\Facades\Auth::user()->username}}">
                                </div>
                                <div class="col form-group" style="display: none">
                                    <label for="recipient-name" class="col-form-label">Nama<sup class="text-danger">*</sup>
                                    </label>
                                    <input type="text" name="csv_file" id="" class="form-control" required style="width: 500px"
                                           value="{{\Illuminate\Support\Facades\Auth::user()->name}}">
                                </div>

                                <div class="col form-group">
                                    <label for="recipient-name" class="col-form-label">Password Lama
                                    </label>
                                    <input type="password" name="old_pass" id="" class="form-control" required style="width: 500px"
                                         >
                                </div>
                                <div class="col form-group">
                                    <label for="recipient-name" class="col-form-label">Password Baru
                                    </label>
                                    <input type="password" name="new_pass" id="" class="form-control" required style="width: 500px"
                                    >
                                </div>
                                <div class="col form-group">
                                    <label for="recipient-name" class="col-form-label">Ketik Ulang Password Baru
                                    </label>
                                    <input type="password" name="confirm_pass" id="" class="form-control" required style="width: 500px">
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary">Ubah</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <footer class="main-footer">
            <div class="footer-left">
                &copy;&nbsp;{{now()->format('Y').' '.env('APP_TITLE')}}
            </div>
        </footer>
    </div>
</div>
<div class="progress">
    <div class="bar"></div>
</div>

<!-- General JS Scripts -->
<script src="{{asset('admins/modules/jquery.min.js')}}"></script>
<script src="{{asset('admins/modules/popper.js')}}"></script>
<script src="{{asset('admins/modules/tooltip.js')}}"></script>
<script src="{{asset('admins/modules/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/plugins/nicescroll/jquery.nicescroll.js')}}"></script>
<script src="{{asset('admins/modules/moment.min.js')}}"></script>
<script src="{{asset('admins/js/stisla.js')}}"></script>
<script src="{{asset('js/hideShowPassword.min.js')}}"></script>

<!-- Page Specific JS File -->
<script src="{{asset('admins/modules/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('js/plugins/sweetalert/sweetalert.min.js')}}"></script>
<script src="{{asset('admins/modules/izitoast/js/iziToast.min.js')}}"></script>
<script src="{{asset('js/checkMobileDevice.js')}}"></script>

@include('layouts.partials._scripts-adm')
@include('layouts.partials._alert')
@include('layouts.partials._confirm')
@include('layouts.partials._toastnotify')

@stack('scripts')
</body>
</html>
