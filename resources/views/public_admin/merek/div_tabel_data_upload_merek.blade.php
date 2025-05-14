
<div class="row">
    <div class="col-md-12">  
        <button type="button" class="btn btn-primary" onclick="$('#frmUpload_merek').toggle(500);">
            <i class="fas fa-plus"></i> Tambah Data
        </button>
    </div>
    <hr>
    <hr>
</div>
<form style="display: none;" id="frmUpload_merek" class="form-horizontal"  enctype="multipart/form-data">
<div class="modal-body">
    <div class="form-group">
        {{ csrf_field() }}
    </div>  
    <input type="hidden" name="merek_id" value="{{$id}}">
    <div class="form-group">
        <label style="text-align: right;" class="col-lg-3 control-label">Nama File:</label>
        <div class="col-lg-8">
         <input type="text" class="form-control" name="nama_file" value="">
     </div>
 </div>
 <div class="form-group">
    <label style="text-align: right;" class="col-lg-3 control-label">Keterangan File:</label>
    <div class="col-lg-9">
        <textarea style="font-weight: bold; font-family: Arial;" name="keterangan" id="keterangan" rows="4"class="form-control"></textarea>
    </div>
</div>  
<div class="form-group">
    <label style="text-align: right;" class="col-lg-3 control-label">Pilih Berkas:</label>
    <div class="col-lg-9">
        <!-- <input type="file" name=""> --> 
        <img id="loading" src="{{asset('assets/images/loading.gif')}}" style="display:none;">
        <input id="select_file" type="file" size="45" name="select_file" class="input"> 
    </div>
</div> 
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="icon-cross"></i> Batal</button>
    <button type="submit" class="btn btn-primary btn_data_upload_merek"><i class="icon-check"></i> Simpan</button>
</div>
</form>
<table class="table datatable-basic">
    <thead>
        <tr>
            <th style="width: 120px;">No</th>
            <th>Nama File</th>
            <th>Keterangan</th>
            <th>Ukuran</th>
            <th>Nama File</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        @php $no=0; @endphp
        @foreach ($data_upload_merek as $r)
        @php $no++; @endphp
        <tr>
            <td class="tCenter" style="width: 1%"><?php echo $no; ?></td>
            <td class="tLeft">
                {{$r->nama_file}}
            </td>
            <td class="tLeft">
                {{$r->keterangan}}
            </td>  
            <td class="tLeft">
                <?php
                $pathView = explode("/", $r['path']);
                echo $pathView[count($pathView) - 1];
                ?>
                {{$r->path}}
            </td>
            <td class="tLeft">
                <a href="{{asset('file_upload/'.$r->path)}}" target="_blank">link</a>
            </td>
            <td class="tCenter">
                <?php
                if ($r['status'] == 0) {
                    ?>
                    <button title="hapus" type="button" class="btn btn-danger btn-icon btn-rounded btn-xs" onclick="hapus_upload_data_merek('{{csrf_token()}}', '{{$r->id}}', '{{$id}}', '#div_tabel_data_upload_merek');"><i
                        class="icon-trash"></i></button>
                    <?php } else {
                        echo "&nbsp;";
                    } ?>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table> 


    <script type="text/javascript">
        $(document).ready(function () {
        $('#frmUpload_merek').on('submit', function (event) {
            event.preventDefault(); 
            $.ajax({
                url: "{{ route('upload_merek.action') }}",
                method: "POST",
                data: new FormData(this),
                dataType: 'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) { 
                    if(data.res == 'success'){ 
                        swal({
                            html: true,
                            title: "Data berhasil diupload",
                            text: "",
                            type: "success",     
                            confirmButtonColor: "#4CAF50"
                        },
                        function(isConfirm){ 
                            if(isConfirm){ 
                                $('#message').css('display', 'block');
                                $('#message').html(data.message);
                                $('#message').addClass(data.class_name);
                                $('#uploaded_image').html(data.uploaded_image);  
                                div_tabel_data_upload_merek('{{csrf_token()}}', '#div_tabel_data_upload_merek', '{{$id}}');
                            }
                        });
                    } else {
                        alertKu('warning', data.message);
                    }
                }
            })
        });

    });
        $( document ).ready(function() {
            $('.select2').select2();
        });
    </script>