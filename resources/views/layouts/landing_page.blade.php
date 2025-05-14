<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>{{env("APP_NAMA_PANJANG", "")}}</title>	

		<meta name="keywords" content='{{env("APP_NAMA_PANJANG", "")}}' />
		<meta name="description" content='{{env("APP_NAMA_PANJANG", "")}}'>
		<meta name="author" content='{{env("APP_NAMA_PANJANG", "")}}'>

		<!-- Favicon -->
		<link rel="shortcut icon" href="{{ asset('favicon.png') }}" />
		<link rel="apple-touch-icon" href="{{ asset('assets_landing/img/apple-touch-icon.png') }}">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{ asset('assets_landing/vendor/bootstrap/css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets_landing/vendor/bootstrap/css/bootstrap.css') }}">
		<link rel="stylesheet" href="{{ asset('assets_landing/vendor/fontawesome-free/css/all.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets_landing/vendor/animate/animate.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets_landing/vendor/simple-line-icons/css/simple-line-icons.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets_landing/vendor/owl.carousel/assets/owl.carousel.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets_landing/vendor/owl.carousel/assets/owl.theme.default.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets_landing/vendor/magnific-popup/magnific-popup.min.css') }}">
		<link href="{{asset('assets/css/icons/icomoon/styles.css')}}" rel="stylesheet" type="text/css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{ asset('assets_landing/css/theme.css') }}">
		<link rel="stylesheet" href="{{ asset('assets_landing/css/theme-elements.css') }}">
		<link rel="stylesheet" href="{{ asset('assets_landing/css/theme-blog.css') }}">
		<link rel="stylesheet" href="{{ asset('assets_landing/css/theme-shop.css') }}">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="{{ asset('assets_landing/vendor/rs-plugin/css/settings.css') }}">
		<link rel="stylesheet" href="{{ asset('assets_landing/vendor/rs-plugin/css/layers.css') }}">
		<link rel="stylesheet" href="{{ asset('assets_landing/vendor/rs-plugin/css/navigation.css') }}">
		
		<!-- Demo CSS -->

		<link rel="stylesheet" href="{{ asset('assets_landing/css/demos/demo-seo-2.css') }}">

		<!-- Skin CSS -->
		<link rel="stylesheet" href="{{ asset('assets_landing/css/skins/skin-seo-2.css') }}"> 
		<link href="{{asset('assets/css/colors.css')}}" rel="stylesheet" type="text/css">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{ asset('assets_landing/css/custom.css') }}"> 
		<link rel="stylesheet" href="{{ asset('loading.css') }}">

		<!-- Head Libs -->
		<script src="{{ asset('assets_landing/vendor/modernizr/modernizr.min.js') }}"></script>   
		<script type="text/javascript" src="{{asset('js/share.js')}}"></script>
		<script type="text/javascript" src="{{asset('js/proses_data.js')}}"></script> 

		<style type="text/css">
			.spacer-hamdi {
				height: 150px;
			}
			@media only screen and (max-width: 1125px) {
				.spacer-hamdi {
					height: 200px;
				}
			}
			@media only screen and (max-width: 767px) {
				.spacer-hamdi {
					height: 0px;
					margin-top: -100px
				}
			}
			
		</style>
		@php
		$settings = DB::table('settings')->orderBy('id','desc')->limit(1)->first();
		@endphp
	</head>
	<body data-target="#header" data-spy="scroll" data-offset="100">
		<div class="body">
			<header id="header" class="header-transparent header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 70, 'stickyHeaderContainerHeight': 70}">
				<div class="header-body border-top-0 appear-animation" data-appear-animation="fadeIn">
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-row">
									<div class="header-logo">
										<a href="{{ url('/') }}">
											<img alt="Porto" width="186" height="86" src="{{ asset('img/logotype.png') }}">
										</a>
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row">
									<div class="header-nav header-nav-links order-2 order-lg-1">
										<div class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1">
											<nav class="collapse">
												<ul class="nav nav-pills" id="mainNav">

													<li>
														<a class="nav-link {{ Request::is('*berandapage') ? 'active' : '' }}" href="{{ url('/berandapage') }}">
															Beranda
														</a>
													</li>
													<li>
														<a class="nav-link {{ Request::is('*tentang_kami') ? 'active' : '' }}" href="{{ url('/tentang_kami') }}">
															Tentang Kami
														</a>
													</li>
													<li>
														<a class="nav-link {{ Request::is('*berita_page') ? 'active' : '' }}" href="{{ url('/berita_page/1') }}">
															Berita
														</a>
													</li>
													@if (!Auth::guest())  
													<li>
														<a class="nav-link" href="{{ url('/logout') }}">
															<button type="button" class="btn btn-sm btn-grad btn-rounded font-weight-semibold"> Logout </button>
														</a>
													</li> 
													@else
													
													<li>
														<a class="nav-link" href="{{ url('/login') }}">
															<button type="button" class="btn btn-sm btn-gradient btn-rounded font-weight-semibold"> Masuk / Daftar </button>
														</a>
													</li> 
													@endif
												</ul>
											</nav>
										</div>
										<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
											<i class="fas fa-bars"></i>
										</button>
									</div>
									<div class="header-nav-features header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2 d-none">
										<div class="header-nav-feature header-nav-features-search d-inline-flex">
											<a href="#" class="header-nav-features-toggle" data-focus="headerSearch"><i class="fas fa-search header-nav-top-icon"></i></a>
											<div class="header-nav-features-dropdown" id="headerTopSearchDropdown">
												<form role="search" action="page-search-results.html" method="get">
													<div class="simple-search input-group">
														<input class="form-control text-1" id="headerSearch" name="q" type="search" value="" placeholder="Search...">
														<span class="input-group-append">
															<button class="btn" type="submit">
																<i class="fa fa-search header-nav-top-icon"></i>
															</button>
														</span>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

			<!-- Main content -->
            @yield('tempat_content')
            <!-- /main content -->

			<div id="ModalTealSm" class="modal fade">
			    <div class="modal-dialog">
			        <div class="modal-content">
			            <div class="modal-header bg-teal-400">
			                <h6 class="modal-title">
			                    <span class="title" id="ModalTealSmLabel">
			                        Judul
			                    </span>
			                </h6>
			                <button type="button" class="close" data-dismiss="modal">&times;</button>
			            </div>

			            <div class="modal-body"> 
			                <div id="ModalTealSmIsi">

			                </div>
			            </div> 
			        </div>
			    </div>
			</div> 
			<div id="ModalTeal" class="modal fade">
				<div class="modal-dialog modal-full">
					<div class="modal-content ">
						<div class="modal-header bg-teal-400">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h6 class="modal-title">
								<span class="title" id="ModalTealLabel">
									Judul
								</span>
							</h6>
						</div>

						<div class="modal-body"> 
							<div id="ModalTealIsi">

							</div>
						</div> 
					</div>
				</div>
			</div>
            <!-- FOOTER -->
            @include('landing_page.contact_us')
            <!-- FOOTER -->


		</div>

		<!-- Vendor -->
		<script src="{{ asset('assets_landing/vendor/jquery/jquery.min.js') }}"></script>
			<script src="{{asset('assets_landing/js/anchor.min.js')}}"></script> 
		<script src="{{ asset('assets_landing/vendor/jquery.appear/jquery.appear.min.js') }}"></script>
		<script src="{{ asset('assets_landing/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
		<script src="{{ asset('assets_landing/vendor/jquery.cookie/jquery.cookie.min.js') }}"></script>
		<script src="{{ asset('assets_landing/vendor/popper/umd/popper.min.js') }}"></script>
		<script src="{{ asset('assets_landing/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('assets_landing/vendor/common/common.min.js') }}"></script>
		<script src="{{ asset('assets_landing/vendor/jquery.validation/jquery.validate.min.js') }}"></script>
		<script src="{{ asset('assets_landing/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
		<script src="{{ asset('assets_landing/vendor/jquery.gmap/jquery.gmap.min.js') }}"></script>
		<script src="{{ asset('assets_landing/vendor/jquery.lazyload/jquery.lazyload.min.js') }}"></script>
		<script src="{{ asset('assets_landing/vendor/isotope/jquery.isotope.min.js') }}"></script>
		<script src="{{ asset('assets_landing/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
		<script src="{{ asset('assets_landing/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
		<script src="{{ asset('assets_landing/vendor/vide/jquery.vide.min.js') }}"></script>
		<script src="{{ asset('assets_landing/vendor/vivus/vivus.min.js') }}"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="{{ asset('assets_landing/js/theme.js') }}"></script>
		
		<!-- Current Page Vendor and Views -->
		<script src="{{ asset('assets_landing/vendor/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
		<script src="{{ asset('assets_landing/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>



		<!-- Demo -->
		<script src="{{ asset('assets_landing/js/demos/demo-seo-2.js') }}"></script>

		<!-- Theme Custom -->
		<script src="{{ asset('assets_landing/js/custom.js') }}"></script>
		
		<!-- Theme Initialization Files -->
		<script src="{{ asset('assets_landing/js/theme.init.js') }}"></script>
		<script type="text/javascript" src="{{asset('assets/js/plugins/forms/selects/select2.min.js')}}"></script> 

	

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
		 
		<link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
		<link rel="stylesheet" href="//cdn.datatables.net/responsive/2.2.6/css/responsive.bootstrap4.min.css">

		<script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script> 
		<script src="//cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script> 
		<script src="//cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script> 
		<script src="//cdn.datatables.net/responsive/2.2.6/js/responsive.bootstrap4.min.js"></script>

        @stack('scripts')

	</body>
</html>
