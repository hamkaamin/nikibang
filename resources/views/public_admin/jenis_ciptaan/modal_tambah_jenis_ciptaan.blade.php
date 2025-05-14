<div class="row">
    <div class="col-lg-12">
        <div class="tabbable">
            <ul class="nav nav-tabs nav-tabs-highlight">
                <li class="active">
                    <a href="#tab_verifikasi" data-toggle="tab" aria-expanded="false">
                        Tambah Locarno
                    </a>
                </li> 
            </ul>

            <div class="tab-content">
                <div class="tab-pane active" id="tab_verifikasi"> 
                    <form id="formTambahMasterRS" method="post" action="{{ route('simpan_jenis_ciptaan') }}" class="form-horizontal" enctype="multipart/form-data" >
                        <div class="modal-body">
                            <div class="form-group">
                                {{ csrf_field() }}
                            </div>  
                            <div class="form-group status_lengkap">
                                <label for="kode" style="text-align: right;" class="col-lg-3 control-label">
                                    Kode <span style="color:red"><b>*</b></span> : 
                                </label>
                                <div class="col-lg-8"> 
                                    <input type="text" placeholder="Kode Jenis Ciptaan" class="form-control" value="" name="kode" id="kode" >  
                                </div>
                            </div>
                            <div class="form-group status_lengkap">
                                <label for="keterangan" style="text-align: right;" class="col-lg-3 control-label">
                                    Keterangan <span style="color:red"><b>*</b></span> : 
                                </label> 
                                <div class="col-lg-8">  
                                   <textarea placeholder="Keterangan" class="form-control" name="keterangan" id="keterangan"> 
                                    </textarea>
                                </div>
                            </div>    
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="icon-cross"></i> Batal</button>
                            <button type="submit" class="btn btn-primary"><i class="icon-check"></i> Simpan</button>
                        </div>
                    </form>
                </div> 
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $('.select2').select2();
</script>