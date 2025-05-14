<div class="row">
    <div class="col-lg-12">
        <div class="tabbable">
            <ul class="nav nav-tabs nav-tabs-highlight">
                <li class="active">
                    <a href="#tab_verifikasi" data-toggle="tab" aria-expanded="false">
                        Ubah Merek
                    </a>
                </li> 
            </ul>

            <div class="tab-content">
                <div class="tab-pane active" id="tab_verifikasi"> 
                    <div class="modal-body">
                        <form id="formTambahUsulanStaffPindahArsip" method="post" action="{{ route('simpan_merek_ubah',$data_merek->id) }}" class="form-horizontal steps-validation" enctype="multipart/form-data" >
                            {{ csrf_field() }}


                            <h6>Data Merek</h6>
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
                                                <input type="text" class="form-control required" placeholder="Masukkan Nomor Pendaftaran" name="nomor_pendaftaran" value="{{$data_merek->nomor_pendaftaran}}" id="nomor_pendaftaran" required="required">  
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="tanggal_pendaftaran" class="col-sm-4 control-label" style="text-align: right;">
                                                Tanggal Pendaftaran <span class="text-danger">*</span> : 
                                            </label>
                                            <div class="col-sm-7"> 
                                                <input type="date" class="form-control required" value="{{$data_merek['tanggal_pendaftaran']}}"  name="tanggal_pendaftaran" id="tanggal_pendaftaran" required="required">  
                                            </div>
                                        </div>

 
                                    </div> 
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="tanggal_pengumuman" class="col-sm-4 control-label" style="text-align: right;">
                                                Tanggal Pengumuman <span class="text-danger">*</span> : 
                                            </label>
                                            <div class="col-sm-7"> 
                                                <input type="date" class="form-control required" value="{{$data_merek['tanggal_pengumuman']}}" name="tanggal_pengumuman" id="tanggal_pengumuman">  
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="tujuan_pengajuan" class="col-sm-4 control-label" style="text-align: right;">
                                                Status <span class="text-danger">*</span> : 
                                            </label>
                                            <div class="col-sm-7"> 
                                                <select name="status_merek" id="status_merek" data-placeholder="Member" class="form-control select">
                                                    @if($data_merek['status'] == 1)
                                                    <option value="0">-- Tampilkan Semua --</option> 
                                                    <option selected="" value="1">(PA) Diberi Merek</option>
                                                    <option value="2">(PA) Dianggap Ditarik Kembali (Direktur)</option>
                                                    <option value="3">(PA) Berakhir Masa Perlindungan</option>
                                                    <option value="4">(PA) Pengajuan</option>
                                                    <option value="5">(PA) Proses</option>
                                                    <option value="6">(PA) Ditolak</option>
                                                @elseif($data_merek['status'] == 2)
                                                    <option value="0">-- Tampilkan Semua --</option> 
                                                    <option value="1">(PA) Diberi Merek</option>
                                                    <option selected="" value="2">(PA) Dianggap Ditarik Kembali (Direktur)</option>
                                                    <option value="3">(PA) Berakhir Masa Perlindungan</option>
                                                    <option value="4">(PA) Pengajuan</option>
                                                    <option value="5">(PA) Proses</option>
                                                    <option value="6">(PA) Ditolak</option>
                                                @elseif($data_merek['status'] == 3)
                                                    <option selected="" value="0">-- Tampilkan Semua --</option> 
                                                    <option value="1">(PA) Diberi Merek</option>
                                                    <option value="2">(PA) Dianggap Ditarik Kembali (Direktur)</option>
                                                    <option value="3">(PA) Berakhir Masa Perlindungan</option>
                                                    <option value="4">(PA) Pengajuan</option>
                                                    <option value="5">(PA) Proses</option>
                                                    <option value="6">(PA) Ditolak</option>
                                                @elseif($data_merek['status'] == 0)
                                                <option value="0">-- Tampilkan Semua --</option> 
                                                    <option value="1">(PA) Diberi Merek</option>
                                                    <option value="2">(PA) Dianggap Ditarik Kembali (Direktur)</option>
                                                    <option value="3">(PA) Berakhir Masa Perlindungan</option>
                                                    <option value="4">(PA) Pengajuan</option>
                                                    <option value="5">(PA) Proses</option>
                                                    <option value="6">(PA) Ditolak</option> 
                                                @elseif($data_merek['status'] == 4)
                                                <option value="0">-- Tampilkan Semua --</option> 
                                                    <option value="1">(PA) Diberi Merek</option>
                                                    <option value="2">(PA) Dianggap Ditarik Kembali (Direktur)</option>
                                                    <option value="3">(PA) Berakhir Masa Perlindungan</option>
                                                    <option selected="" value="4">(PA) Pengajuan</option>
                                                    <option value="5">(PA) Proses</option>
                                                    <option value="6">(PA) Ditolak</option> 
                                                @elseif($data_merek['status'] == 5)
                                                <option value="0">-- Tampilkan Semua --</option> 
                                                    <option value="1">(PA) Diberi Merek</option>
                                                    <option value="2">(PA) Dianggap Ditarik Kembali (Direktur)</option>
                                                    <option value="3">(PA) Berakhir Masa Perlindungan</option>
                                                    <option value="4">(PA) Pengajuan</option>
                                                    <option selected="" value="5">(PA) Proses</option>
                                                    <option value="6">(PA) Ditolak</option>
                                                    @elseif($data_merek['status'] == 6)
                                                <option value="0">-- Tampilkan Semua --</option> 
                                                    <option value="1">(PA) Diberi Merek</option>
                                                    <option value="2">(PA) Dianggap Ditarik Kembali (Direktur)</option>
                                                    <option value="3">(PA) Berakhir Masa Perlindungan</option>
                                                    <option value="4">(PA) Pengajuan</option>
                                                    <option value="5">(PA) Proses</option>
                                                    <option selected="" value="6">(PA) Ditolak</option>
                                                @endif
                                                </select>  
                                            </div>
                                        </div>
                                    </div>

                                        
                                    <div class="col-md-12"> 
                                        <div class="form-group">
                                            <label for="deskripsi" class="col-sm-3 control-label" style="text-align: right;">
                                                Translasi :
                                            </label>
                                            <div class="col-sm-8">
                                                <textarea style="font-weight: bold; font-family: Arial;" name="translasi" id="translasi" rows="4"class="form-control summernote">{{$data_merek['translasi']}}</textarea>
                                            </div>
                                        </div> 
                                    </div> 
   
                            </fieldset>

                            <h6>Data Merek</h6>
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label for="tanggal_pendaftaran" class="col-sm-4 control-label" style="text-align: right;">
                                                Nomor Pengumuman <span class="text-danger">*</span> : 
                                            </label>
                                            <div class="col-sm-7"> 
                                                <input type="text" placeholder="Masukkan Nomor Pengumuman" class="form-control" value="{{$data_merek['nomor_pengumuman']}}" name="nomor_pengumuman" id="nomor_pengumuman">  
                                            </div>
                                        </div>
 
 
                                        <div class="form-group">
                                            <label for="nomor_permohonan" class="col-sm-4 control-label" style="text-align: right;">
                                                Nomor Permohonan : 
                                            </label>
                                            <div class="col-sm-7">
                                                <input type="text" placeholder="Masukkan Nomor Permohonan Anda" class="form-control" value="{{$data_merek['nomor_permohonan']}}" name="nomor_permohonan" id="nomor_permohonan">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="tanggal_penerimaan" class="col-sm-4 control-label" style="text-align: right;">
                                                Tanggal Penerimaan <span class="text-danger">*</span> : 
                                            </label>
                                            <div class="col-sm-7"> 
                                                <input type="date" class="form-control" value="{{$data_merek['tanggal_penerimaan']}}" name="tanggal_penerimaan" id="tanggal_penerimaan">  
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-6"> 

                                        <div class="form-group">
                                            <label for="nama_merek" class="col-sm-4 control-label" style="text-align: right;">
                                                Nama Merek :
                                            </label>
                                            <div class="col-sm-7">
                                                <input placeholder="Masukkan Nama Merek" type="text" class="form-control required" name="nama_merek" value="{{$data_merek->nama}}" id="nama_merek" required="required"> 
                                            </div>
                                        </div> 
                                        <div class="form-group">
                                            <label for="tanggal_perlindungan" class="col-sm-4 control-label" style="text-align: right;">
                                                Tanggal Perlindungan : 
                                            </label>
                                            <div class="col-sm-7">
                                                <input type="date" placeholder="Masukkan Jenis Merek Anda" class="form-control" name="tanggal_perlindungan" value="{{$data_merek['tanggal_perlindungan']}}" id="tanggal_perlindungan" required="">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="tanggal_perlindungan" class="col-sm-4 control-label" style="text-align: right;">
                                                Tanggal Berakhir Perlindungan : 
                                            </label>
                                            <div class="col-sm-7">
                                                <input type="date" placeholder="Masukkan Tanggal Perlindungan Anda" class="form-control" value="{{$data_merek['tanggal_end_perlindungan']}}" name="tanggal_end_perlindungan" id="tanggal_end_perlindungan">
                                            </div>
                                        </div> 


                                    </div> 



                                </div>
                            </fieldset>
 
  
                            <button type="submit" class="btn btn-primary btn_simpan_db" style="display: none;"><i class="icon-check"></i> Simpan</button>
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