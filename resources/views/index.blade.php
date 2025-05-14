<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    @include('include.style')  
</head>

<body class="navbar-bottom">

    <!-- Main navbar --> 
    @include('include.navbar')  
    <!-- /main navbar -->


    <!-- Page header -->

    <!-- /page header -->

    <!-- <div class="page-header-content">
        <div class="page-title">
            <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Home</span> - Dashboard <small>Hello, Victoria!</small></h4>
        </div>

        <div class="heading-elements">
            <div class="heading-btn-group">
                <a href="#" class="btn btn-link btn-float text-size-small has-text"><i class="icon-bars-alt text-indigo-400"></i><span>Statistics</span></a>
                <a href="#" class="btn btn-link btn-float text-size-small has-text"><i class="icon-calculator text-indigo-400"></i><span>Invoices</span></a>
                <a href="#" class="btn btn-link btn-float text-size-small has-text"><i class="icon-calendar5 text-indigo-400"></i><span>Schedule</span></a>
            </div>
        </div>
    </div> -->
    <!-- Page container -->
    <div class="page-container">

        <!-- Page content -->
        <div class="page-content">

            <!-- Main sidebar -->
            @if(Auth::user()->role_id == 1)
                @include('include.left_sidebar')
            @elseif(Auth::user()->role_id == 3)
                @include('include.opd_left_sidebar')
            @endif
            <!-- /main sidebar -->


            <!-- Main content -->
            @yield('tempat_content')
            <!-- /main content -->

        </div>
        <!-- /page content -->

    </div>
    <!-- /page container -->


    <!-- Footer -->
    @include('include.footer')
    <!-- /footer -->
</body>
</html>