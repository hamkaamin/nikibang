<div class="modal-body">
    <div class="row">
        <div class="col-lg-12">
            <div class="tabbable">
                <ul class="nav nav-tabs nav-tabs-highlight">
                    <li class="active">
                        <a href="#tabtabtab" data-toggle="tab" aria-expanded="false">
                            Verifikasi Pembiayaan
                        </a>
                    </li> 
                </ul>

                <div class="tab-content">
                    <div class="tab-pane active" id="tabtabtab">
                        <!--  -->
                        <form id="formVerifPembayaranTransaksiBeli" class="form-horizontal" method="post" action="{{url('admin/simpan_verifikasi_paten_pembiayaan')}}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="hidden" name="paten_id" id="paten_id" value="{{$data_paten->id}}">
                            <?php
                            $lunas = '';
                            if($data_paten->is_biaya == 1){
                                $lunas = 'checked';
                            }
                            ?>
                            <div class="form-group status_lengkap">
                                <label style="text-align: right;" class="col-sm-4 control-label">
                                    Status :
                                </label>
                                <div class="col-sm-7"> 
                                    <div class="onoffswitch">
                                        <input {{ $lunas }} type="checkbox" class="onoffswitch-checkbox"
                                        name="sts_verif" id="setuju_3">
                                        <label class="onoffswitch-label" for="setuju_3">
                                            <span class="onoffswitch-inner"></span>
                                            <span class="onoffswitch-switch"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="keterangan" style="text-align: right;" class="col-sm-4 control-label">
                                    Keterangan <span style="color:red"><b>*</b></span> : 
                                </label>
                                <div class="col-sm-7"> 
                                    <textarea class="form-control input-xs" id="keterangan" name="keterangan" rows="3" style="resize: none;" required="required">{{$data_paten->ket_biaya}}</textarea>  
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="icon-cross"></i> Batal</button>
                                <button class="btn btn-primary" type="submit"><i class="icon-check"></i> Simpan</button>
                            </div>
                        </form>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript"> 
    if($('.select22').length){
        $('.select22').select2();
    }
</script>