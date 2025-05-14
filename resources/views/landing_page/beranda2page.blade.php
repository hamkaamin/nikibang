@extends('layouts.landing_page')

@section('tempat_content')
@include('include.function')  
@include('sweetalert::alert')
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
        </div>
    </section> 
                <section class="section position-relative custom-bg-color-light-2 border-0 pt-5 pt-lg-4 m-0">
                    <svg class="custom-section-curved-top-5" width="100%" height="284" xmlns="http://www.w3.org/2000/svg">
                        <path id="svg_2" fill="#eff1f3" stroke="#000" stroke-width="0" d="m-30.75698,18.18081c99.6013,28.33304 337.54319,327.06425 868.97187,168.96887c265.71434,-79.04769 585.03969,-5.59538 690.67474,14.9602c105.63504,20.55559 381.87048,2.11063 555.67444,-75.27753c86.90199,-38.69407 736.04117,-78.60276 742.95015,12.26524c6.90898,90.86801 -66.08835,361.6009 -103.97283,363.40912c-37.88449,1.80823 -2793.7397,-55.67435 -2792.62804,-56.56315"/>
                    </svg>
                    <div class="container position-relative z-index-1 pb-lg-4 mb-lg-5">
                        <div class="custom-circle custom-circle-medium custom-circle-pos-44 appear-animation" data-appear-animation="expandIn" data-appear-animation-delay="200">
                            <div class="custom-bg-color-grey-1 rounded-circle w-100 h-100" data-plugin-float-element data-plugin-options="{'startPos': 'bottom', 'speed': 0.8, 'transition': true, 'transitionDuration': 3000}"></div>
                        </div>
                        <div class="custom-circle custom-circle-small custom-circle-pos-45 appear-animation" data-appear-animation="expandIn" data-appear-animation-delay="500">
                            <div class="custom-bg-color-grey-2 rounded-circle w-100 h-100" data-plugin-float-element data-plugin-options="{'startPos': 'bottom', 'speed': 0.3, 'transition': true, 'transitionDuration': 2000}"></div>
                        </div>
                        <div class="custom-circle custom-circle-extra-small custom-circle-pos-46 appear-animation" data-appear-animation="expandIn" data-appear-animation-delay="800">
                            <div class="custom-bg-color-grey-2 rounded-circle w-100 h-100" data-plugin-float-element data-plugin-options="{'startPos': 'bottom', 'speed': 0.3, 'transition': true, 'transitionDuration': 1500}"></div>
                        </div> 
                        <div class="row pricing-table custom-pricing-table-style-1 justify-content-center mb-4">
                            <div class="col-md-8 col-lg-3">
                                <div class="plan text-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="550">
                                    <div class="custom-dots-rect-5" style="background-image: url(img/demos/seo-2/dots-group.png);"></div>
                                    <div class="plan-header bg-color-light pt-5 px-4">
                                        <h4 class="text-color-dark font-weight-bold text-color-quaternary text-5 mt-4 mb-2">Bank Data</h4> 
                                    </div>
                                    <div class="plan-features px-4">
                                        <img src="{{asset('assets_landing/img/icon_data.png')}}" style="width: 200px;height: 200px;">
                                    </div>
                                    <div class="plan-footer pt-3 pb-5">
                                        <a href="{{ url('/bankdata') }}" class="btn btn-secondary btn-outline btn-rounded font-weight-semibold px-5 py-3 text-3 mb-4">MASUK</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-3">
                                <div class="plan text-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="550">
                                    <div class="custom-dots-rect-5" style="background-image: url(img/demos/seo-2/dots-group.png);"></div>
                                    <div class="plan-header bg-color-light pt-5 px-4">
                                        <h4 class="text-color-dark font-weight-bold text-color-quaternary text-5 mt-4 mb-2">Tentang Kami</h4> 
                                    </div>
                                    <div class="plan-features px-4">
                                        <img src="{{asset('assets_landing/img/about_us.png')}}" style="width: 200px;height: 200px;">
                                    </div>
                                    <div class="plan-footer pt-3 pb-5">
                                        <a href="{{ url('/tentang_kami') }}" class="btn btn-secondary btn-outline btn-rounded font-weight-semibold px-5 py-3 text-3 mb-4">MASUK</a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-8 col-lg-3">
                                <div class="plan text-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="550">
                                    <div class="custom-dots-rect-5" style="background-image: url(img/demos/seo-2/dots-group.png);"></div>
                                    <div class="plan-header bg-color-light pt-5 px-4">
                                        <h4 class="text-color-dark font-weight-bold text-color-quaternary text-5 mt-4 mb-2">Berita</h4> 
                                    </div>
                                    <div class="plan-features px-4">
                                        <img src="{{asset('assets_landing/img/newspapernew.png')}}" style="width: 200px;height: 200px;">
                                    </div>
                                    <div class="plan-footer pt-3 pb-5">
                                        <a href="{{ url('/berita_page/1') }}" class="btn btn-secondary btn-outline btn-rounded font-weight-semibold px-5 py-3 text-3 mb-4">MASUK</a>
                                    </div>
                                </div>
                            </div>

                            @if (!Auth::guest()) 
                            <div class="col-md-8 col-lg-3">
                                <div class="plan text-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="550">
                                    <div class="custom-dots-rect-5" style="background-image: url(img/demos/seo-2/dots-group.png);"></div>
                                    <div class="plan-header bg-color-light pt-5 px-4">
                                        <h4 class="text-color-dark font-weight-bold text-color-quaternary text-5 mt-4 mb-2">Konseling</h4> 
                                    </div>
                                    <div class="plan-features px-4">
                                        <img src="{{asset('assets_landing/img/consultant.jpg')}}" style="width: 200px;height: 200px;">
                                    </div>
                                    <div class="plan-footer pt-3 pb-5">
                                        <a href="{{url('/landing_konseling')}}" class="btn btn-secondary btn-outline btn-rounded font-weight-semibold px-5 py-3 text-3 mb-4">MASUK</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-8 col-lg-3">
                                <div class="plan text-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="550">
                                    <div class="custom-dots-rect-5" style="background-image: url(img/demos/seo-2/dots-group.png);"></div>
                                    <div class="plan-header bg-color-light pt-5 px-4">
                                        <h4 class="text-color-dark font-weight-bold text-color-quaternary text-5 mt-4 mb-2">Drafting Paten</h4> 
                                    </div>
                                    <div class="plan-features px-4">
                                        <img src="{{asset('assets_landing/img/demos/seo-2/concept-1.png')}}" style="width: 200px;height: 200px;">
                                    </div>
                                    <div class="plan-footer pt-3 pb-5">
                                        <a href="{{ url('/landing_drafting_paten') }}" class="btn btn-secondary btn-outline btn-rounded font-weight-semibold px-5 py-3 text-3 mb-4">MASUK</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-8 col-lg-3">
                                <div class="plan text-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="550">
                                    <div class="custom-dots-rect-5" style="background-image: url(img/demos/seo-2/dots-group.png);"></div>
                                    <div class="plan-header bg-color-light pt-5 px-4">
                                        <h4 class="text-color-dark font-weight-bold text-color-quaternary text-5 mt-4 mb-2">Drafting Cipta</h4> 
                                    </div>
                                    <div class="plan-features px-4">
                                        <img src="{{asset('assets_landing/img/cipta.png')}}" style="width: 200px;height: 200px;">
                                    </div>
                                    <div class="plan-footer pt-3 pb-5">
                                        <a href="{{ url('/landing_drafting_cipta') }}" class="btn btn-secondary btn-outline btn-rounded font-weight-semibold px-5 py-3 text-3 mb-4">MASUK</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-3">
                                <div class="plan text-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="550">
                                    <div class="custom-dots-rect-5" style="background-image: url(img/demos/seo-2/dots-group.png);"></div>
                                    <div class="plan-header bg-color-light pt-5 px-4">
                                        <h4 class="text-color-dark font-weight-bold text-color-quaternary text-5 mt-4 mb-2">Pembiayaan Cipta</h4> 
                                    </div>
                                    <div class="plan-features px-4">
                                        <img src="{{asset('assets_landing/img/biaya_cipta.png')}}" style="width: 250px;height: 200px;">
                                    </div>
                                    <div class="plan-footer pt-3 pb-5">
                                        <a href="{{ url('/landing_drafting_cipta') }}" class="btn btn-secondary btn-outline btn-rounded font-weight-semibold px-5 py-3 text-3 mb-4">MASUK</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-3">
                                <div class="plan text-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="550">
                                    <div class="custom-dots-rect-5" style="background-image: url(img/demos/seo-2/dots-group.png);"></div>
                                    <div class="plan-header bg-color-light pt-5 px-4">
                                        <h4 class="text-color-dark font-weight-bold text-color-quaternary text-5 mt-4 mb-2">Pembiayaan Paten</h4> 
                                    </div>
                                    <div class="plan-features px-4">
                                        <img src="{{asset('assets_landing/img/biaya_paten.png')}}" style="width: 200px;height: 200px;">
                                    </div>
                                    <div class="plan-footer pt-3 pb-5">
                                        <a href="{{ url('/landing_drafting_cipta') }}" class="btn btn-secondary btn-outline btn-rounded font-weight-semibold px-5 py-3 text-3 mb-4">MASUK</a>
                                    </div>
                                </div>
                            </div>
                            @endif
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
