<div class="row">
    <div class="col-lg-12">
        <div class="tabbable">
            <ul class="nav nav-tabs nav-tabs-highlight">
                <li class="active">
                    <a href="#tab_verifikasi" data-toggle="tab" aria-expanded="false">
                        Tambah Kelas
                    </a>
                </li> 
            </ul>

            <div class="tab-content">
                <div class="tab-pane active" id="tab_verifikasi"> 
                    <form id="formTambahMasterRS" method="post" action="{{ route('simpan_master_user') }}" class="form-horizontal" enctype="multipart/form-data" >
                        <div class="modal-body">
                            <div class="form-group">
                                {{ csrf_field() }}
                            </div>  
                            <div class="form-group status_lengkap">
                                <label for="nama" style="text-align: right;" class="col-lg-3 control-label">
                                    Nama <span style="color:red"><b>*</b></span> : 
                                </label>
                                <div class="col-lg-8"> 
                                    <input required="required" type="text" class="form-control" value="" name="nama" id="nama" >  
                                </div>
                            </div>
                            
                            <div class="form-group status_lengkap">
                                <label for="no_telp" style="text-align: right;" class="col-lg-3 control-label">
                                    Nomor Telepon <span style="color:red"><b>*</b></span> : 
                                </label>
                                <div class="col-lg-8"> 
                                    <input required="required" type="text" class="form-control" value="" name="no_telp" id="no_telp" >  
                                </div>
                            </div> 

                            <div class="form-group status_lengkap">
                                <label for="no_telp" style="text-align: right;" class="col-lg-3 control-label">
                                    Alamat <span style="color:red"><b>*</b></span> : 
                                </label>
                                <div class="col-lg-8"> 
                                    <input required="required" type="text" class="form-control" value="" name="alamat" id="alamat" >  
                                </div>
                            </div> 

                            <div class="form-group status_lengkap">
                                <label for="no_telp" style="text-align: right;" class="col-lg-3 control-label">
                                    Tempat Lahir <span style="color:red"><b>*</b></span> : 
                                </label>
                                <div class="col-lg-8"> 
                                    <input required="required" type="text" class="form-control" value="" name="tempat_lahir" id="tempat_lahir" >  
                                </div>
                            </div> 


                            <div class="form-group status_lengkap">
                                <label for="no_telp" style="text-align: right;" class="col-lg-3 control-label">
                                    Tanggal Lahir <span style="color:red"><b>*</b></span> : 
                                </label>
                                <div class="col-lg-8"> 
                                    <input required="required" type="date" class="form-control" value="" name="tanggal_lahir" value="2006-01-01" id="tanggal_lahir" >  
                                </div>
                            </div>

                            <div class="form-group status_lengkap">
                                <label for="username" style="text-align: right;" class="col-lg-3 control-label">
                                    NIK <span style="color:red"><b>*</b></span> : 
                                </label>
                                <div class="col-lg-8"> 
                                    <input required="required" type="text" class="form-control" value="" name="username" id="username" >  
                                </div>
                            </div> 

                            <div class="form-group status_lengkap">
                                <label for="email" style="text-align: right;" class="col-lg-3 control-label">
                                    Email <span style="color:red"><b>*</b></span> : 
                                </label>
                                <div class="col-lg-8"> 
                                    <input required="required" type="email" class="form-control" value="" name="email" id="email" >  
                                </div>
                            </div>
 
                            <div class="form-group status_lengkap">
                                <label for="keterangan" style="text-align: right;" class="col-lg-3 control-label">
                                    User Role <span style="color:red"><b>*</b></span> : 
                                </label> 
                                <div class="col-lg-8"> 
                                    <select class="form-control select2" name="role_id" id="role_id" required="" style="width: 100%">   
                                    <option selected="" value="1">Admin</option> 
                                    <option value="2">Masyarakat / User</option> 
                                    <option value="3">OPD</option> 
                                    </select>
                                </div>
                            </div>  

                            <div class="form-group status_lengkap">
                                <label for="password" style="text-align: right;" class="col-lg-3 control-label">
                                    Password <span style="color:red"><b>*</b></span> : 
                                </label>
                                <div class="col-lg-8"> 
                                    <input required="required" type="password" class="form-control" value="" name="password" id="password" >  
                                </div>
                            </div>

                            <div class="form-group status_lengkap">
                                <label for="password" style="text-align: right;" class="col-lg-3 control-label">
                                    Ulangi Password <span style="color:red"><b>*</b></span> : 
                                </label>
                                <div class="col-lg-8"> 
                                    <input required="required" type="password" class="form-control" value="" name="re_password" id="re_password" >  
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
    $('.select22').select2();
</script>