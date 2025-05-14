
<div class="row">
    <div class="col-md-12">  
        <button type="button" class="btn btn-primary" onclick="$('#frmIpc_paten').toggle(500);">
            <i class="fas fa-plus"></i> Tambah Data
        </button>
    </div>
    <hr>
    <hr>
</div>
<form style="display: none;" id="frmIpc_paten" class="form-horizontal"  enctype="multipart/form-data" onsubmit="
    simpan_div_data_ipc_paten('{{csrf_token()}}', '{{ $id }}', '.btn_data_ipc_paten');
    return false;
">
                        <div class="modal-body">
                            <div class="form-group">
                                {{ csrf_field() }}
                            </div>  
                            <div class="form-group status_lengkap">
                                <label for="nama" style="text-align: right;" class="col-lg-3 control-label">
                                    Kode <span style="color:red"><b>*</b></span> : 
                                </label>
                                <div class="col-lg-8"> 
                                    <input placeholder="Kode Ipc" type="text" class="form-control" value="" name="kode" id="kode" >  
                                </div>
                            </div>
                            <div class="form-group status_lengkap">
                                <label for="nama" style="text-align: right;" class="col-lg-3 control-label">
                                    Nama <span style="color:red"><b>*</b></span> : 
                                </label>
                                <div class="col-lg-8"> 
                                    <input placeholder="Nama Ipc" type="text" class="form-control" value="" name="nama" id="nama" >  
                                </div>
                            </div> 
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="icon-cross"></i> Batal</button>
                            <button type="submit" class="btn btn-primary btn_data_ipc_paten"><i class="icon-check"></i> Simpan</button>
                        </div>
                    </form>
                            @php
                            $i=0;
                            @endphp
                            @foreach ($data_ipc_paten as $r)
                            <?php $i++; 
                            $id_ipc = $r->id;
                            ?> 
                            <div class="row">
                                <!-- <div class="col-md-3">

                                </div>
                                <div class="col-md-3">
                                    <button type="button" class="btn btn-danger btn_data_ipc_paten">{{$r->kode}} {{$r->nama}}</button> 
                                </div> -->
                                <div class="col-md-4">
                                    <div class="panel panel-body">
                                        <div class="media">
                                            <div class="media-left"> 
                                                {{ $i }}.
                                            </div>

                                            <div class="media-body">
                                                <h6 class="media-heading"> <a href='https://www.wipo.int/classifications/ipc/ipcpub/?notion=scheme&version=20180101&symbol={{$r->kode}}&menulang=en&lang=en&viewmode=f&fipcpc=no&showdeleted=yes&indexes=no&headings=yes&notes=yes&direction=o2n&initial=A&cwid=none&tree=no&searchmode=smart' target="_blank">{{$r->kode}} {{$r->nama}} </a></h6>
                                                
                                            </div>
 
                                            <div class="media-right media-middle">
                                                <ul class="icons-list">
                                                    <li class="dropdown">
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="icon-menu7"></i></a>
                                                        <ul class="dropdown-menu dropdown-menu-right">
                                                            <li>
                                                                <button type="button" class="btn btn-danger btn-xs btn-block" onclick="hapus_data_ipc_paten('{{csrf_token()}}','{{ $id_ipc }}','{{$id}}')"><i class="fas fa-trash-alt pull-right"></i> Hapus
                                                                </button>
                                                            </li> 
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div> 
                                        </div>
                                    </div>
                                </div> 
                            @endforeach
                            </div> 


<script type="text/javascript">
    $( document ).ready(function() {
        $('.select2').select2();
    });
</script>