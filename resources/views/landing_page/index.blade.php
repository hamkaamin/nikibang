@extends('layouts.landing_page')

@section('tempat_content') 
@include('include.function')
<div role="main" class="main" id="home">

    <section class="section custom-bg-color-light-1 border-0 pt-5 m-0">
        <!-- <div class="spacer d-none d-md-block" style="height: 350px;"></div> -->
        <div class="container position-relative z-index-1 pt-5 mt-1">
            <div class="custom-circle custom-circle-wrapper custom-circle-big custom-circle-pos-1 appear-animation" data-appear-animation="expandInWithBlur" data-appear-animation-delay="900" data-appear-animation-duration="2s">
                <div class="bg-color-tertiary rounded-circle w-100 h-100" data-plugin-float-element data-plugin-options="{'startPos': 'bottom', 'speed': 0.5, 'transition': true, 'transitionDuration': 1000}"></div>   
            </div>
            <div class="custom-circle custom-circle-medium custom-circle-pos-2 appear-animation" data-appear-animation="expandInWithBlur" data-appear-animation-delay="1450" data-appear-animation-duration="2s">
                <div class="custom-bg-color-grey-2 rounded-circle w-100 h-100" data-plugin-float-element data-plugin-options="{'startPos': 'bottom', 'speed': 0.2, 'transition': true, 'transitionDuration': 2000}"></div>
            </div>
            <div class="custom-circle custom-circle-medium custom-circle-pos-3 appear-animation" data-appear-animation="expandIn" data-appear-animation-delay="1300">
                <div class="custom-bg-color-grey-2 rounded-circle w-100 h-100" data-plugin-float-element data-plugin-options="{'startPos': 'bottom', 'speed': 0.3, 'transition': true, 'transitionDuration': 1000}"></div>
            </div>
            <div class="custom-circle custom-circle-small custom-circle-pos-4 appear-animation" data-appear-animation="expandIn" data-appear-animation-delay="1600">
                <div class="custom-bg-color-grey-2 rounded-circle w-100 h-100" data-plugin-float-element data-plugin-options="{'startPos': 'bottom', 'speed': 0.6, 'transition': true, 'transitionDuration': 500}"></div>
            </div>
            <div class="custom-circle custom-circle-medium custom-circle-pos-5 appear-animation" data-appear-animation="expandInWithBlur" data-appear-animation-delay="1050" data-appear-animation-duration="2s">
                <div class="bg-color-secondary rounded-circle w-100 h-100" data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.2, 'transition': true, 'transitionDuration': 2000}"></div>
            </div>
            <div class="custom-circle custom-circle-medium custom-circle-pos-6 appear-animation" data-appear-animation="expandInWithBlur" data-appear-animation-delay="1200" data-appear-animation-duration="2s">
                <div class="custom-bg-color-grey-2 rounded-circle w-100 h-100" data-plugin-float-element data-plugin-options="{'startPos': 'bottom', 'speed': 0.8, 'transition': true, 'transitionDuration': 500}"></div>
            </div>
            <div class="custom-circle custom-circle-small custom-circle-pos-7 appear-animation" data-appear-animation="expandIn" data-appear-animation-delay="1700">
                <div class="custom-bg-color-grey-2 rounded-circle w-100 h-100" data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.3, 'transition': true, 'transitionDuration': 1000}"></div>
            </div>
            <div class="custom-circle custom-circle-medium custom-circle-pos-8 appear-animation" data-appear-animation="expandInWithBlur" data-appear-animation-delay="1350" data-appear-animation-duration="2s">
                <div class="custom-bg-color-grey-2 rounded-circle w-100 h-100" data-plugin-float-element data-plugin-options="{'startPos': 'bottom', 'speed': 0.5, 'transition': true, 'transitionDuration': 500}"></div>
            </div>
            <div class="row align-items-center pt-4 text-center" align="center">
                <div class="col-md-12 pb-5 mb-md-5 text-center" align="center"> 
                    <h1 style="font-size: 20pt !important" class="text-color-dark text-center font-weight-bold text-10 mb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300" align="center">
                    	<!-- <img src="{{ asset('img/logo.png') }}" style="width: 100px">
                    	<br>
                        E-Klinik Kekayaan Intelektual Provinsi Jawa Timur -->
                    </h1>
                    <!-- <p class="custom-text-color-grey-1 text-4 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="450"> 
                    </p> 
                    <div class="spacer d-none d-md-block" style="height: 180px;"></div> -->
                </div> 
            </div>
        </div>
    </section>

    <section class="section position-relative bg-color-light border-0 m-0" id="hamdi">
        <svg class="custom-section-curved-top-1" width="100%" height="600px" xmlns="http://www.w3.org/2000/svg">
            <path id="svg_1" d="m-12.66406,442.40068c352.72654,-76.36348 565.45337,5.45453 696.36219,19.99996c130.90882,14.54542 270.90852,-23.63632 367.27196,-47.27263c96.36344,-23.63631 379.99921,-154.54513 527.27163,-209.09047c147.27242,-54.54535 381.813,-92.55755 406.36076,-99.00598c12.27388,-3.22421 917.96684,-113.93032 715.00991,10.61478c-202.95693,124.5451 -210.46055,521.28714 -198.64021,540.29354c11.82034,19.0064 -2500.90899,-15.53962 -2500.0019,-16.36399c-0.90709,0.82437 -9.99798,-180.99343 -9.09089,-181.8178" stroke-opacity="null" stroke-width="0" stroke="#000" fill="#f7f8f9"/>
            <path id="svg_2" d="m-116.90461,507.88064c314.5448,-112.72704 523.63527,-21.81814 878.17999,12.72724c354.54471,34.54538 632.72595,-225.45407 978.17978,-294.54484c172.72691,-34.54538 291.36195,-62.7275 368.52007,-78.40952c77.15812,-15.68202 352.84215,-22.50036 359.66142,-7.04537c13.63854,30.90997 97.72734,614.54347 50.90961,639.99858c-46.81772,25.4551 -855.68236,4.54593 -1433.63569,1.81866c-577.95334,-2.72727 -1155.90718,-5.45466 -1155.45364,-5.45491" stroke-opacity="null" stroke-width="0" stroke="#000" fill="#fbfcfc"/>
            <path id="svg_3" d="m-115.93584,623.27542c234.54496,-132.72699 429.09001,-112.72703 678.1804,-83.63619c249.09039,29.09085 389.09011,30.90903 656.36228,-107.2725c267.27217,-138.18153 816.36193,-207.2723 1121.81584,-170.90873c305.45391,36.36356 -292.72666,-19.99996 -293.63778,-18.18228c71.36548,8.18218 627.05432,68.63506 626.48637,265.22584c-0.56794,196.59079 -20.11364,456.59134 -31.02284,531.13767c-10.90919,74.54633 -1561.82313,-36.3646 -1565.45948,-34.54642c-3.63636,1.81818 -1249.08831,-1.81818 -1248.18122,-1.81869c-0.90709,0.00051 39.09282,-234.54445 39.99992,-234.54496c-0.9071,0.00051 -4.54345,-76.36297 -3.63636,-76.36348" stroke-opacity="null" stroke-width="0" stroke="#000" fill="#ffffff"/>
        </svg>
        <div class="container position-relative custom-negative-margin-1 z-index-3 pb-lg-5 mb-lg-3" style="padding-bottom: 0px !important; margin-bottom: 0px;">
            <div class="custom-circle custom-circle-medium custom-circle-pos-9 d-none d-md-block">
                <div class="bg-color-secondary rounded-circle w-100 h-100" data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.3, 'transition': true, 'transitionDuration': 1000}"></div>
            </div>
            <div class="custom-circle custom-circle-big custom-circle-pos-10 appear-animation" data-appear-animation="expandInWithBlur" data-appear-animation-delay="1850" data-appear-animation-duration="2s">
                <div class="bg-color-tertiary rounded-circle w-100 h-100" data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 3, 'transition': true, 'transitionDuration': 1000}"></div>
            </div>
            <div class="custom-circle custom-circle-medium custom-circle-pos-11 appear-animation" data-appear-animation="expandInWithBlur" data-appear-animation-delay="2000" data-appear-animation-duration="2s">
                <div class="custom-bg-color-grey-1 rounded-circle w-100 h-100" data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 1, 'transition': true, 'transitionDuration': 1000}"></div>
            </div>
            <div class="custom-circle custom-circle-small custom-circle-pos-12 appear-animation" data-appear-animation="expandInWithBlur" data-appear-animation-delay="2150" data-appear-animation-duration="2s">
                <div class="custom-bg-color-grey-2 rounded-circle w-100 h-100" data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 1, 'transition': true, 'transitionDuration': 1000}"></div>
            </div>
            <div class="custom-circle custom-circle-extra-small custom-circle-pos-13 appear-animation" data-appear-animation="expandInWithBlur" data-appear-animation-delay="2300" data-appear-animation-duration="2s">
                <div class="custom-bg-color-grey-2 rounded-circle w-100 h-100" data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 1, 'transition': true, 'transitionDuration': 1000}"></div>
            </div>
			<div class="row align-items-center">
				<div class="col-lg-7 pr-lg-5">
					@php 
					$tipe = App\Model\Tipe::get_all();
					$tipe_first = App\Model\Tipe::first();
					@endphp
					<form class="frm_action_1" method="get" action="{{ url('s/'. $tipe_first->kode) }}">
						<div class="spacer spacer-hamdi"></div>
						<h1 style="font-size: 20pt !important" class="text-color-dark text-center font-weight-bold text-10 mb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300" align="center">
							<img src="{{ asset('img/logo.png') }}" style="width: 100px">
							<br>
							Klinik Kekayaan Intelektual Provinsi Jawa Timur
						</h1>
						<p class="custom-text-color-grey-1 text-4 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="450">
							<div class="row">
								<div class="col-sm-12">
									<p class="text-4 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="450">Pencarian Data Bebas <span class="txt_tipe">{{ $tipe_first->nama }}</span></p>
									@include('include.form-success')
								</div> 
								<div class="col-sm-4">
									<select id="search_tipe" data-msg-required="Please enter the subject." class="form-control px-4 rounded-0 text-color-light bg-color-primary border-0 appear-animation" style="height: 50px"  data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400" required onchange="var nama = $(this).find(':selected').attr('data-nama');$('.txt_tipe').html(nama);$('#search_nama').attr('placeholder', 'Pencarian Data Bebas '+nama);$('.frm_action_1').attr('action', '<?php echo url('s') ?>/'+this.value);">
										@foreach($tipe as $r)
										<option data-nama="{{ $r->nama }}" value="{{ $r->kode }}">{{ $r->nama }}</option>
										@endforeach
									</select>
								</div>
								<div class="col-sm-8">
									<input type="text" name="q" id="search_nama" required="" class="input-hamdi form-control px-4 rounded-0 text-color-light bg-color-primary border-0 appear-animation"
									data-appear-animation="fadeInRightShorter"
									data-appear-animation-delay="100"
									placeholder="Pencarian Data Bebas {{ $tipe_first->nama }}" style="height: 50px">
								</div>
							</div>
						</p>
						<button type="submit" class="btn btn-sm btn-gradient btn-rounded font-weight-semibold px-5 py-3 text-3 mb-md-5 text-right appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600" style="float: right;">
							CARI
						</button>
						<div class="spacer d-none d-md-block" style="height: 110px;"></div>
					</form>
				</div>
				<div class="col-lg-5 pt-lg-5 pl-lg-4 mt-lg-5">
					<div class="spacer" style="height: 100px;"></div>
					<img src="{{ asset('assets_landing/img/demos/seo-2/concept-1.png') }}" class="img-fluid appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="500" alt="" />
				</div>
			</div>
        </div>
    </section>

    <section class="section custom-bg-color-light-2 position-relative border-0 pt-4 m-0">
        <svg class="custom-section-curved-top-2" width="100%" height="298" xmlns="http://www.w3.org/2000/svg">
            <path id="svg_3" d="m-79.33393,-38.33344c20.00001,16.00001 346.66686,448.00024 826.66712,236.00013c240.00013,-106.00006 647.58388,-25.45831 786.45913,6.2709c138.87524,31.72921 295.36054,26.21434 359.54203,2.72919c64.18149,-23.48515 718.67317,-158.11072 742.33982,-143.77728c214.66852,222.83259 61.00168,333.66623 77.22357,376.2222c16.22188,42.55598 -2796.23167,-33.44489 -2795.56445,-33.77815c-0.33361,0.16663 -0.83375,-98.08344 -1.16708,-196.41683c-0.33334,-98.33338 -0.49987,-196.75009 -0.16626,-196.91671" stroke-width="0" stroke="#000" fill="#eff1f3"/>
        </svg>
        <div class="container position-relative z-index-1 mt-3 mb-5">
            <div class="custom-circle custom-circle-small custom-circle-pos-14">
                <div class="custom-bg-color-grey-2 rounded-circle w-100 h-100" data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 1, 'horizontal': true, 'transition': true, 'transitionDuration': 1000}"></div>
            </div>
            <div class="custom-circle custom-circle-extra-small custom-circle-pos-15">
                <div class="custom-bg-color-grey-2 rounded-circle w-100 h-100" data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 1, 'horizontal': true, 'transition': true, 'transitionDuration': 1000}"></div>
            </div>
            <div class="custom-circle custom-circle-medium custom-circle-pos-16">
                <div class="custom-bg-color-grey-1 rounded-circle w-100 h-100" data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 1, 'horizontal': true, 'transition': true, 'transitionDuration': 1000}"></div>
            </div>   
        </div>
    </section>

    <section class="section bg-color-light position-relative border-0 pt-0 m-0" id="lokasi">
        <svg class="custom-section-curved-top-3" width="100%" height="298" xmlns="http://www.w3.org/2000/svg">
            <path id="svg_2" fill="#FFF" stroke="#000" stroke-width="0" d="m-19.87006,126.33922c0,0 2.16796,-1.48437 6.92379,-3.91356c4.75584,-2.42918 12.09956,-5.80319 22.45107,-9.58247c20.70303,-7.55856 53.43725,-16.7382 101.56202,-23.22255c48.12477,-6.48434 111.6401,-10.27339 193.90533,-7.05074c41.13262,1.61132 88.20271,5.91306 140.3802,12.50726c52.17748,6.59421 -86.4742,-15.61273 171.02458,26.26208c64.37469,10.4687 130.09704,0.19531 175.01626,-5.4736c44.91922,-5.66892 49.93384,-12.28022 191.44685,-45.34647c141.51301,-33.06625 221.34662,-61.99188 426.81438,-59.4919c102.73388,1.24999 203.44102,29.65927 398.99543,109.88821c195.55441,80.22895 668.78972,-44.38181 814.0537,-9.88704c-76.25064,69.23438 407.49874,281.32592 331.2481,350.5603c-168.91731,29.52009 85.02254,247.61162 -83.89478,277.13171c84.07062,348.27313 -2948.95065,-242.40222 -2928.39024,-287.84045"/>
        </svg> 
    </section>  

</div> 
@endsection