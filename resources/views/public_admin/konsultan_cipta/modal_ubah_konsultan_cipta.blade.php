<div class="row">
    <div class="col-lg-12">
        <div class="tabbable">
            <ul class="nav nav-tabs nav-tabs-highlight">
                <li class="active">
                    <a href="#tab_verifikasi" data-toggle="tab" aria-expanded="false">
                        Edit Konsultan
                    </a>
                </li> 
            </ul>

            <div class="tab-content">
                <div class="tab-pane active" id="tab_verifikasi"> 
                    <form id="formTambahMasterRS" method="post" action="{{ route('simpan_konsultan_cipta_ubah', $data_konsultan_cipta->id) }}" class="form-horizontal" enctype="multipart/form-data" >
                        <div class="modal-body">
                            <div class="form-group">
                                {{ csrf_field() }}
                            </div>  
                            <div class="form-group status_lengkap">
                                <label for="nama" style="text-align: right;" class="col-lg-3 control-label">
                                    Nama Konsultan <span style="color:red"><b>*</b></span> : 
                                </label>
                                <div class="col-lg-8"> 
                                    <input required="required" type="text" class="form-control" placeholder="Nama Konsultan" value="{{$data_konsultan_cipta['nama']}}" name="nama" id="nama" >  
                                </div>
                            </div>

                            <div class="form-group status_lengkap">
                                <label for="keterangan" style="text-align: right;" class="col-lg-3 control-label">
                                    Alamat <span style="color:red"><b>*</b></span> : 
                                </label> 
                                <div class="col-lg-8"> 
                                <textarea placeholder="Alamat Konsultan" class="form-control" name="alamat" id="alamat">
                                    {{$data_konsultan_cipta['alamat']}}
                                    </textarea>  
                                </div>
                            </div> 
                            <div class="form-group status_lengkap">
                                <label for="keterangan" style="text-align: right;" class="col-lg-3 control-label">
                                    Nationality <span style="color:red"><b>*</b></span> : 
                                </label> 
                                <div class="col-lg-8"> 
                                    <select class="form-control select2" name="countries_id" id="countries_id" required="" style="width: 100%"> 
                                    <option value="0">-- Tampilkan Semua --</option>
                                    @foreach($data_countries as $r)
                                    @if($r->id == $data_konsultan_cipta->countries_id)
                                    <option selected="" value="{{$r->id}}">{{$r->en_short_name}} ( {{$r->alpha_2_code}} )</option>
                                    @else
                                    <option value="{{$r->id}}">{{$r->en_short_name}} ( {{$r->alpha_2_code}} )</option>
                                    @endif  
                                    @endforeach
                                    </select>
                                </div>
                            </div> 
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="icon-cross"></i> Batal</button>
                            <button type="submit" class="btn btn-primary"><i class="icon-check"></i> Ubah</button>
                        </div>
                    </form>
                </div> 
            </div>
        </div>
    </div>
</div>
<script type="text/javascript"> 
    if($('.select2').length){
        $('.select2').select2();
    } 
    $( document ).ready(function() { 

        //CKEditor
        // CKEDITOR.replace('ckeditors');
        // CKEDITOR.config.height = 300;  
        // $('.summernote').each(function(e){  
        //     CKEDITOR.replace(this.id,{  
        //         uiColor : '#b2cefe ' 
        //     }); 

        // }); 
    }); 
</script>