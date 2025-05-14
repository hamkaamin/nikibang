<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Daftar Akun {{env('APP_NAME')}}</title>

    <!-- Icons font CSS-->
    <link href="{{asset('assets_regis/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assets_regis/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="{{asset('assets_regis/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assets_regis/vendor/datepicker/daterangepicker.css')}}" rel="stylesheet" media="all">
    <script type="text/javascript" src="{{asset('assets/js/plugins/notifications/sweet_alert.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/share.js')}}"></script>

    <!-- Main CSS-->
    <link href="{{asset('assets_regis/css/main.css')}}" rel="stylesheet" media="all">

    <style>
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
</head>
 
<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                     

                     @if (session()->has('statusT'))
                        <div class="alert">
                          <span class="closebtn">&times;</span>  
                          <strong>Gagal!</strong> {{ session()->get('statusT') }}
                          {{session()->forget('statusT')}}
                      </div>
                    @endif

                     @if (session()->has('status'))
                        <div class="alert success">
                          <span class="closebtn">&times;</span>  
                          <strong>Success!</strong> {{ session()->get('status') }}
                            {{session()->forget('status')}}
                        </div>
                    @endif
 
                      <br>
                    <h2 class="title">Daftar Akun HKI</h2>
                    <form id="formTambahMasterRS" method="post" action="{{ route('simpan_register') }}" class="form-horizontal" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Nama</label>
                                    <input class="input--style-4" type="text" required="" id="nama" name="nama">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Nomor Telpon</label>
                                    <input class="input--style-4" type="text" required="" name="no_telp">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space"> 
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Tempat Lahir</label>
                                    <input class="input--style-4" type="text" required="" name="tempat_lahir">
                                </div>
                            </div> 
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Tanggal Lahir</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" required="" type="text" value="2006/01/01" name="tanggal_lahir">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="input-group">
                            <label class="label">Alamat</label> 
                            <input class="input--style-4" type="text" required="" name="alamat">
                        </div>  
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="email" required="" name="email">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">NIK</label>
                                    <input class="input--style-4" type="text" required="" name="username">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space"> 
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Password</label>
                                    <input class="input--style-4" type="password" required="" name="password">
                                </div>
                            </div> 
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Ulangi Password</label>
                                    <input class="input--style-4" type="password" required="" name="re_password">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2"> 
                                    <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button> 
                            </div>
                            <div class="col-2">
                                <a href="{{url('/berandapage')}}"><button class="btn btn--radius-2 btn--red" type="button">Kembali</button></a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="{{asset('assets_regis/vendor/jquery/jquery.min.js')}}"></script>
    <!-- Vendor JS-->
    <script src="{{asset('assets_regis/vendor/select2/select2.min.js')}}"></script>
    <script src="{{asset('assets_regis/vendor/datepicker/moment.min.js')}}"></script>
    <script src="{{asset('assets_regis/vendor/datepicker/daterangepicker.js')}}"></script>

    <!-- Main JS-->
    <script src="{{asset('assets_regis/js/global.js')}}"></script>

    <script>
        var close = document.getElementsByClassName("closebtn");
        var i;

        for (i = 0; i < close.length; i++) {
          close[i].onclick = function(){
            var div = this.parentElement;
            div.style.opacity = "0";
            setTimeout(function(){ div.style.display = "none"; }, 600);
        }
    }
</script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->