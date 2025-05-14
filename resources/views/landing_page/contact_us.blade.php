<span id="contact-us"> 
  <footer id="footer" class="bg-color-quaternary position-relative mt-0">
    <svg class="custom-section-curved-top-7" width="100%" height="400"
    xmlns="http://www.w3.org/2000/svg">
    <path id="svg_2" fill="#171940" stroke="#000" stroke-width="0"
    d="m-16.68437,95.44889c0,0 5.33335,176.00075 660.00283,93.33373c327.33474,-41.33351 503.33549,15.3334 639.00274,35.66682c135.66725,20.33342 59.66691,9.66671 358.33487,28.33346c298.66795,18.66676 268.66829,-45.00088 382.66831,-112.00048c114.00002,-66.9996 718.31698,-59.48704 1221.66946,95.563c503.35248,155.05004 -221.83202,184.10564 -243.66935,197.60521c-21.83733,13.49958 -3008.67549,-19.83371 -3008.00467,-20.83335c-0.67082,0.99964 -30.00428,-232.33469 -10.00419,-317.66839z"
    class="svg-fill-color-quaternary"/>
  </svg>
  <div class="container mt-0 mb-4">
    <form onsubmit="return check_g()" action="{{ route('connect_with_us') }}" method="POST">
      @csrf
      <div class="row py-5"> 
        <div class="col-lg-12" align="center">
          <h4 class="font-weight-bold text-color-light text-5 ls-0 pb-1 mb-2">HUBUNGI KAMI</h4> 
          @include('include.form-success')
          <h4 align="center" class="text-color-secondary custom-text-10 font-weight-bolder text-center custom-title-with-icon-center custom-title-with-icon custom-title-with-icon-primary ">
            Provinsi Jawa Timur
          </h4> 
          <span> 
            {!! $settings->alamat !!} 
            <br>
            <a href="https://mail.google.com/mail/u/0/?view=cm&fs=1&tf=1&to={!! $settings->email !!}">
              {!! $settings->email !!}
            </a>
            <br>
            <a href="tel:{!! str_replace(' ', '', $settings->telp) !!}">
              {!! $settings->telp !!}
            </a>
          </span>
        </div>
        <div class="col-lg-6">
          <div style="width: 100%; height: 530px !important;" id="map">
            <span class="blink_me">-- sedang memuat peta --</span>
          </div>
        </div>
        <div class="col-lg-6"> 
          <div class="form-row">
            <div class="form-group col-md-6">
              <input type="text" value="" data-msg-required="Please enter your name."
              maxlength="100"
              class="form-control py-4 px-4 rounded-0 text-color-light bg-color-secondary border-0 appear-animation"
              name="nama" id="nama" placeholder="Nama Anda"
              data-appear-animation="fadeInRightShorter"
              data-appear-animation-delay="200"
              required>
            </div>
            <div class="form-group col-md-6">
              <input type="email" value="" data-msg-required="Please enter the email."
              data-msg-email="Please enter a valid email." maxlength="100"
              class="form-control py-4 px-4 rounded-0 text-color-light bg-color-secondary border-0 appear-animation"
              name="email" id="email" placeholder="E-mail Anda"
              data-appear-animation="fadeInRightShorter"
              data-appear-animation-delay="200"
              required>
            </div>
            <div class="form-group col-lg-12">
              <input type="text" value="" data-msg-required="Please enter the subject."
              maxlength="100"
              class="form-control py-4 px-4 rounded-0 text-color-light bg-color-secondary border-0 appear-animation"
              name="subject" id="subject" placeholder="Subject"
              data-appear-animation="fadeInRightShorter"
              data-appear-animation-delay="400"
              required>
            </div>
            <div class="form-group col">
              <textarea maxlength="5000" data-msg-required="Please enter your message."
              rows="6"
              class="form-control py-4 px-4 rounded-0 text-color-light bg-color-secondary border-0 appear-animation"
              name="isi" placeholder="Isi Pesan"
              data-appear-animation="fadeInRightShorter"
              data-appear-animation-delay="200"
              required></textarea>
              <input type="hidden" name="ket" value="connect_with_us">
            </div>
          </div> 
          <div class="form-group">
            <label for="captcha"></label>
            <div style="width: 100%; ">
              {!! NoCaptcha::renderJs() !!}
              {!! NoCaptcha::display() !!}
            </div>
            <span id="txt_google_captcha" class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
          </div>
          <div class="form-row justify-content-center appear-animation"
          data-appear-animation="fadeInUpShorter" data-appear-animation-delay="850">
          <div class="form-group col-auto mb-0">
            <button type="submit"
            class="btn btn-gradient btn-rounded font-weight-bold px-5 py-3 text-3">
            Submit
          </button>
        </div>
        <div class="form-group col-md-10" style="color:white">
          <p style="color:white"> STATISTIK PENGUNJUNG</p>
          @php 
          $jumlah_pengunjung_hari_ini = App\Model\Visitor::count_pengunjung_hari_ini();
          $jumlah_pengunjung_kemarin = App\Model\Visitor::count_pengunjung_kemarin();
          $jumlah_total_pengunjung = App\Model\Visitor::count_total_pengunjung();
          @endphp
          <table>
          <tr>
            <td style="width: 200px"> Hari Ini	</td>
            <td> :	{{$jumlah_pengunjung_hari_ini}}</td> 
          </tr>
          <tr>
            <td> Pengunjung Kemaren </td>
            <td>	:	{{$jumlah_pengunjung_kemarin}} </td>
          </tr>
          <tr>
            <td>Total Pengunjung</td>
            <td>	:	{{$jumlah_total_pengunjung}} </td>
          <tr>
          </table>
        </div>
      </div> 
    </div>
  </div>
</form> 
</div>
<div class="footer-copyright bg-color-quaternary">
  <div class="container py-2">
    <hr class="bg-color-light opacity-1 mb-0">
    <div class="row justify-content-center py-4">
      <div class="col-auto">
        <p class="text-color-light opacity-5 text-3">
          {!! env('APP_FOOTER', '') !!}
        </p>
      </div>
    </div>
  </div>
</div>
</footer>
</span>
@push('scripts')
<!-- START PETA  -->
<link rel="stylesheet" href="{{ asset('assets_peta/leaflet.css') }}" type="text/css">

<script src="{{ asset('assets_peta/leaflet.js') }}" type="text/javascript"></script>
<script src="https://cdn.polyfill.io/v2/polyfill.min.js?features=Promise"></script> 

<script type="text/javascript" src="{{ asset('assets_peta/wicket/wicket.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets_peta/wicket/wicket-leaflet.js') }}"></script> 
<script type="text/javascript">
  // -7.322669, 112.779577
  var map = L.map('map').setView([{!! $settings->location_y !!}, {!! $settings->location_x !!}], 16);
  var osm = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {});
  osm.addTo(map);

  var googleStreets = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
    maxZoom: 20,
    subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
  });

  var googleSat = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
    maxZoom: 20,
    subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
  });

  var googleHybrid = L.tileLayer('http://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}', {
    maxZoom: 20,
    subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
  });

  googleStreets.addTo(map);
  googleSat.addTo(map);
  googleHybrid.addTo(map);

  var baseMaps = {
    "OpenStreetMap": osm,
    "googleHybrid": googleHybrid,
    "Google Satellite": googleSat,
    "Google Street": googleStreets,
  };

  L.control.layers(baseMaps).addTo(map);

  // -7.322669, 112.779577 
  
  var point = 'POINT ({!! $settings->location_x !!} {!! $settings->location_y !!})'; 


  var wkt = new Wkt.Wkt();

  wkt.read(point);
  var feature_point = wkt.toObject(); // convert menjadi object
  feature_point.addTo(map);
  feature_point.on('click', function (e) {
    var pop = L.popup();
    pop.setLatLng(e.latlng);
    pop.setContent(`
      {!! $settings->alamat !!}
      <br>
      <a href="https://www.google.com/maps?saddr=My+Location&daddr={!! $settings->location_y !!},{!! $settings->location_x !!}" target="_blank" >
      <u>Direction</u>
      </a>
      `);
    map.openPopup(pop);
  }); 

</script> 
@endpush