<div class="row">
    <div class="col-lg-12">
        <div class="tabbable">
            <ul class="nav nav-tabs nav-tabs-highlight">
                <li class="active">
                    <a href="#tab_verifikasi" data-toggle="tab" aria-expanded="false">
                        Detail Ki Komunal
                    </a>
                </li> 
            </ul>

            <div class="tab-content">
                <div class="tab-pane active" id="tab_verifikasi"> 
                    <div class="modal-body">
                        <form id="formTambahUsulanStaffPindahArsip" class="form-horizontal steps-validation" enctype="multipart/form-data" >
                            {{ csrf_field() }}


                            <h6>Data Paten</h6>
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group" style="text-align: center;"> 
                                        </div>
                                        <div class="form-group">
                                            <label for="nomor_pendaftaran" class="col-sm-4 control-label" style="text-align: right;">
                                                Nama IG : 
                                            </label>
                                            <div class="col-sm-7">
                                            <p><b>{{$data_ki_komunal['nama']}}</b></p> 
                                                  
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="tanggal_pendaftaran" class="col-sm-4 control-label" style="text-align: right;">
                                                Nama Lain IG : 
                                            </label>
                                            <div class="col-sm-7"> 
                                                <p><b>{{$data_ki_komunal['nama_lain']}}</b></p>  
                                            </div>
                                        </div>
 
 
                                    </div> 
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="tanggal_pengajuan" class="col-sm-4 control-label" style="text-align: right;">
                                                Tempat dan Tanggal Pelaporan : 
                                            </label>
                                            <div class="col-sm-7">
                                            <p><b>{{$data_ki_komunal['tempat_pelaporan']}} - {{$data_ki_komunal['tanggal_pelaporan']}}</b></p> 
                                            </div>
                                        </div> 

                                        <div class="form-group">
                                            <label for="nama_pemeriksa" class="col-sm-4 control-label" style="text-align: right;">
                                                Jenis Barang / Produk
                                            </label>
                                            <div class="col-sm-7">
                                                
                                                <p>{{$data_ki_komunal->jenis_barang->nama}}</p>
                                            </div>
                                        </div>
                                        </div>  
                                    </div>
   
                            </fieldset>

                            <h6>Data Paten</h6>
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label for="tanggal_pendaftaran" class="col-sm-4 control-label" style="text-align: right;">
                                                Nama Potensi IG : 
                                            </label>
                                            <div class="col-sm-7"> 
                                                <p><b>
                                                {{$data_ki_komunal['nama_potensi']}}</b></p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="nama_ki_komunal" class="col-sm-4 control-label" style="text-align: right;">
                                                Karakteristik Produk :
                                            </label>
                                            <div class="col-sm-7">
                                                <p><b>{{$data_ki_komunal['karakter_produk']}}</b></p>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="nomor_ki_komunal" class="col-sm-4 control-label" style="text-align: right;">
                                                Uraian / Batas Wilayah : 
                                            </label>
                                            <div class="col-sm-7">
                                                <p><b>{{$data_ki_komunal['uraian_wilayah']}}</b></p>
                                            </div>
                                        </div>



                                    </div>

                                    <div class="col-md-6">  

                                        <div class="form-group">
                                            <label for="jumlah_klaim" class="col-sm-4 control-label" style="text-align: right;">
                                                Kondisi IG Saat ini 
                                            </label>
                                            <div class="col-sm-7">
                                                <ul>
                                                @foreach($kondisi_komunal as $r)
                                                    <li>{{$r->kondisi->nama}}</li>
                                                @endforeach
                                                </ul>
                                            </div>
                                        </div> 
                                        
 
                                        <div class="form-group">
                                            <label for="nomor_permohonan" class="col-sm-4 control-label" style="text-align: right;">
                                                Jenis Dokumentasi : 
                                            </label>
                                            <div class="col-sm-7">
                                                <ul>
                                                    @foreach($jenis_dokumentasi as $r)
                                                        <li>{{$r->jenis_dokumentasi->nama}}</li>
                                                    @endforeach
                                                    </ul>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="tanggal_penerimaan" class="col-sm-4 control-label" style="text-align: right;">
                                                Upaya Pelestarian : 
                                            </label>
                                            <div class="col-sm-7"> 
                                            <ul>
                                                @foreach($pelestarian_komunal as $r)
                                                    <li>{{$r->upaya_pelestarian->nama}}</li>
                                                @endforeach
                                            </ul>
                                            </div>
                                        </div> 
                                    </div>
                                    


                                </div>
                            </fieldset>

                            <h6>Data Paten</h6>
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-6"> 
                                        <div class="form-group">
                                            <label for="deskripsi" class="col-sm-3 control-label" style="text-align: right;">
                                                Uraian Deskripsi :
                                            </label>
                                            <div class="col-sm-8">  
                                                <p><b>
                                                    {!! $data_ki_komunal->uraian_geografis !!}</b></p>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="thn_pembayaran_terakhir" class="col-sm-4 control-label" style="text-align: right;">
                                                Refrensi :
                                            </label>
                                            <div class="col-sm-7">
                                            <p>
                                                <b>
                                            {!! $data_ki_komunal['refrensi']!!}
                                                </b>
                                            </p>
                                            </div>
                                        </div>
 


                                </div>
                            </fieldset> 
                        </form>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

    
    $( document ).ready(function() { 
        var form = $(".steps-validation").show();
        
        $(".steps-validation").steps({
            headerTag: "h6",
            bodyTag: "fieldset",
            transitionEffect: "fade",
            titleTemplate: '<span class="number">#index#</span> #title#',
            autoFocus: true,
            onStepChanging: function (event, currentIndex, newIndex) {

            // Allways allow previous action even if the current form is not valid!
            if (currentIndex > newIndex) {
                return true;
            }

            // Forbid next action on "Warning" step if the user is to young
            if (newIndex === 3 && Number($("#age-2").val()) < 18) {
                return false;
            }

            // Needed in some cases if the user went back (clean up)
            if (currentIndex < newIndex) {

                // To remove error styles
                form.find(".body:eq(" + newIndex + ") label.error").remove();
                form.find(".body:eq(" + newIndex + ") .error").removeClass("error");
            }

            form.validate().settings.ignore = ":disabled,:hidden";
            return form.valid();
        },

        onStepChanged: function (event, currentIndex, priorIndex) {

            // Used to skip the "Warning" step if the user is old enough.
            if (currentIndex === 2 && Number($("#age-2").val()) >= 18) {
                form.steps("next");
            }

            // Used to skip the "Warning" step if the user is old enough and wants to the previous step.
            if (currentIndex === 2 && priorIndex === 3) {
                form.steps("previous");
            }
        },

        onFinishing: function (event, currentIndex) {
            form.validate().settings.ignore = ":disabled";
            return form.valid();
        },

        onFinished: function (event, currentIndex) {
            // alert("Submitted!");
            $('.btn_simpan_db').click();
        }
    });

        // Initialize validation
        $(".steps-validation").validate({
        ignore: 'input[type=hidden], .select2-search__field', // ignore hidden fields
        errorClass: 'validation-error-label',
        successClass: 'validation-valid-label',
        highlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },
        unhighlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },

        // Different components require proper error label placement
        errorPlacement: function(error, element) {

            // Styled checkboxes, radios, bootstrap switch
            if (element.parents('div').hasClass("checker") || element.parents('div').hasClass("choice") || element.parent().hasClass('bootstrap-switch-container') ) {
                if(element.parents('label').hasClass('checkbox-inline') || element.parents('label').hasClass('radio-inline')) {
                    error.appendTo( element.parent().parent().parent().parent() );
                }
                else {
                    error.appendTo( element.parent().parent().parent().parent().parent() );
                }
            }

            // Unstyled checkboxes, radios
            else if (element.parents('div').hasClass('checkbox') || element.parents('div').hasClass('radio')) {
                error.appendTo( element.parent().parent().parent() );
            }

            // Input with icons and Select2
            else if (element.parents('div').hasClass('has-feedback') || element.hasClass('select2-hidden-accessible')) {
                error.appendTo( element.parent() );
            }

            // Inline checkboxes, radios
            else if (element.parents('label').hasClass('checkbox-inline') || element.parents('label').hasClass('radio-inline')) {
                error.appendTo( element.parent().parent() );
            }

            // Input group, styled file input
            else if (element.parent().hasClass('uploader') || element.parents().hasClass('input-group')) {
                error.appendTo( element.parent().parent() );
            }

            else {
                error.insertAfter(element);
            }
        },
        rules: {
            email: {
                email: true
            }
        }
    });

    // Initialize plugins
    // ------------------------------

    // Select2 selects
    $('.select').select2();


    // Simple select without search
    $('.select-simple').select2({
        minimumResultsForSearch: Infinity
    });


    // Styled checkboxes and radios
    $('.styled').uniform({
        radioClass: 'choice'
    });


    // Styled file input
    $('.file-styled').uniform({
        fileButtonClass: 'action btn bg-blue'
    });
}); 


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
</script>