<div class="row">
    <div class="col-lg-12">
        <div class="tabbable">
            <ul class="nav nav-tabs nav-tabs-highlight">
                <li class="active">
                    <a href="#tab_verifikasi" data-toggle="tab" aria-expanded="false">
                        Detail Paten
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
                                                Nomor Pendaftaran <span class="text-danger">*</span> : 
                                            </label>
                                            <div class="col-sm-7">
                                            <p><b>{{$data_paten['nomor_pct']}}</b></p> 
                                                  
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="tanggal_pendaftaran" class="col-sm-4 control-label" style="text-align: right;">
                                                Tanggal PCT <span class="text-danger">*</span> : 
                                            </label>
                                            <div class="col-sm-7"> 
                                                <p><b>{{$data_paten['tanggal_pct']}}</b></p>  
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="tanggal_pendaftaran" class="col-sm-4 control-label" style="text-align: right;">
                                                Nomor IPC <span class="text-danger">*</span> : 
                                            </label>
                                            <div class="col-sm-7"> 
                                                <p><b>
                                                {{$data_paten['nomor_ipc']}}</b></p>
                                            </div>
                                        </div>
 
 
                                    </div> 
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="tanggal_pengajuan" class="col-sm-4 control-label" style="text-align: right;">
                                                Tanggal Pengajuan <span class="text-danger">*</span> : 
                                            </label>
                                            <div class="col-sm-7">
                                            <p><b>{{$data_paten['tanggal_pengajuan']}}</b></p> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="tujuan_pengajuan" class="col-sm-4 control-label" style="text-align: right;">
                                                Status <span class="text-danger">*</span> : 
                                            </label>
                                            <div class="col-sm-7"> 
                                                @php
                                                $status='BELUM DIVERIFIKASI'; 
                                                @endphp
                                                    @if($data_paten['status'] == 1)
                                                    <?php $status = '(PA) Diberi Paten'; ?>
                                                    @elseif($data_paten['status']==2)
                                                    <?php $status = '(PA) Dianggap Ditarik Kembali (Direktur)'; ?>
                                                    @elseif($data_paten['status']==3)
                                                    <?php $status = '(PA) Berakhir Masa Perlindungan'; ?>
                                                    @elseif($data_paten['status']==4)
                                                    <?php $status = '(PA) Pengajuan'; ?>
                                                    @elseif($data_paten['status']==5)
                                                    <?php $status = '(PA) Proses'; ?>
                                                    @elseif($data_paten['status']==6)
                                                    <?php $status = '(PA) Ditolak'; ?>
                                                    @endif
                                                <p><b>{{$status}}</b></p>

                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="nama_pemeriksa" class="col-sm-4 control-label" style="text-align: right;">
                                                Jenis Paten : 
                                            </label>
                                            <div class="col-sm-7">
                                                
                                                <p><b><?php
                                                    if($data_paten->jenis_paten == 1) {
                                                        ?>
                                                        PATEN
                                                        <?php
                                                    }else if($data_paten->jenis_paten == 2){
                                                        ?> 
                                                        PATEN SEDERHANA
                                                        <?php
                                                    }else if($data_paten->jenis_paten == 3){
                                                        ?> 
                                                        PATEN PCT
                                                        <?php
                                                    }
                                                    ?></b></p>
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
                                            <label for="nama_paten" class="col-sm-4 control-label" style="text-align: right;">
                                                Nama Paten :
                                            </label>
                                            <div class="col-sm-7">
                                                <p><b>{{$data_paten['nama']}}</b></p>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="nomor_paten" class="col-sm-4 control-label" style="text-align: right;">
                                                Nomor Publikasi : 
                                            </label>
                                            <div class="col-sm-7">
                                                <p><b>{{$data_paten['nomor_publikasi']}}</b></p>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-6">  

                                        <div class="form-group">
                                            <label for="jumlah_klaim" class="col-sm-4 control-label" style="text-align: right;">
                                                Jumlah Klaim : 
                                            </label>
                                            <div class="col-sm-7">
                                                <p><b>{{$data_paten['jumlah_klaim']}}</b></p>
                                            </div>
                                        </div> 
                                        
 
                                        <div class="form-group">
                                            <label for="nomor_permohonan" class="col-sm-4 control-label" style="text-align: right;">
                                                Nomor Permohonan Induk : 
                                            </label>
                                            <div class="col-sm-7">
                                                <p><b>{{$data_paten['nomor_permohonan_induk']}}</b></p>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="tanggal_penerimaan" class="col-sm-4 control-label" style="text-align: right;">
                                                Tanggal Publikasi <span class="text-danger">*</span> : 
                                            </label>
                                            <div class="col-sm-7"> 
                                            
                                            <p><b>{{$data_paten['tanggal_publikasi']}}</b></p>  
                                            </div>
                                        </div>



                                    </div>
                                    <div class="col-md-12"> 
                                        <div class="form-group">
                                            <label for="deskripsi" class="col-sm-3 control-label" style="text-align: right;">
                                                Abstrak :
                                            </label>
                                            <div class="col-sm-8"> 
                                                <?php  
                                                $abstrak=str_ireplace('<p>','',$data_paten->abstrak);
                                                $abstrak2=str_ireplace('</p>','',$abstrak);  
                                                ?>
                                                <p><b>
                                                    <?= $abstrak2;?></b></p>
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
                                            <label for="thn_pembayaran_terakhir" class="col-sm-4 control-label" style="text-align: right;">
                                                Tahun Pembayaran Terakhir :
                                            </label>
                                            <div class="col-sm-7">
                                            <p>
                                                <b>
                                            {{$data_paten['tahun_pembayaran_terakhir']}}
                                                </b>
                                            </p>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="tanggal_bayar" class="col-sm-4 control-label" style="text-align: right;">
                                                Tanggal Bayar : 
                                            </label>
                                            <div class="col-sm-7">
                                                <p><b>{{$data_paten['tanggal_bayar']}}</b></p>
                                            </div>
                                        </div>
 
                                    </div>
                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label for="tanggal_penerimaan" class="col-sm-4 control-label" style="text-align: right;">
                                                Tanggal Penerimaan <span class="text-danger">*</span> : 
                                            </label>
                                            <div class="col-sm-7"> 
                                                <p><b>{{$data_paten['tanggal_penerimaan']}}</b></p> 
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="nominal" class="col-sm-4 control-label" style="text-align: right;">
                                                Nominal : 
                                            </label>
                                            <div class="col-sm-7">
                                                <p><b>{{$data_paten['nominal']}}</b></p>
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