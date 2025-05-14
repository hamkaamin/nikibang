<div class="row">
    <div class="col-md-12">  
        <button type="button" class="btn btn-primary" onclick="$('#frmInventor').toggle(500);">
            <i class="fas fa-plus"></i> Tambah Data
        </button>
    </div>
    <hr>
    <hr>
</div>
<form style="display: none;" id="frmInventor" class="form-horizontal"  enctype="multipart/form-data" onsubmit="
    simpan_div_data_inventor('{{csrf_token()}}', '{{ $id }}', '.btn_data_inventor');
    return false;
">
                        <div class="modal-body">
                            <div class="form-group">
                                {{ csrf_field() }}
                            </div>  
                            <div class="form-group status_lengkap">
                                <label for="nama" style="text-align: right;" class="col-lg-3 control-label">
                                    Nama <span style="color:red"><b>*</b></span> : 
                                </label>
                                <div class="col-lg-8"> 
                                    <input placeholder="Nama Inventor" type="text" class="form-control" value="" name="nama" id="nama" >  
                                </div>
                            </div>
                            <div class="form-group status_lengkap">
                                <label for="nama" style="text-align: right;" class="col-lg-3 control-label">
                                    Telepon <span style="color:red"><b>*</b></span> : 
                                </label>
                                <div class="col-lg-8"> 
                                    <input placeholder="Nomor Teleponr" type="number" class="form-control" value="" name="nomor_telepon" id="nomor_telepon" >  
                                </div>
                            </div>
                            <div class="form-group status_lengkap">
                                <label for="keterangan" style="text-align: right;" class="col-lg-3 control-label">
                                    Alamat <span style="color:red"><b>*</b></span> : 
                                </label> 
                                <div class="col-lg-8">  
                                   <textarea placeholder="Alamat Inventor" class="form-control" name="alamat_inventor" id="alamat_inventor"> 
                                    </textarea>
                                </div>
                            </div> 
                            <div class="form-group status_lengkap">
                                <label for="email" style="text-align: right;" class="col-lg-3 control-label">
                                    Email <span style="color:red"><b>*</b></span> : 
                                </label>
                                <div class="col-lg-8"> 
                                    <input placeholder="Email Inventor" type="text" class="form-control" value="" name="email" id="email" >  
                                </div>
                            </div>
                            <div class="form-group status_lengkap">
                                <label for="keterangan" style="text-align: right;" class="col-lg-3 control-label">
                                    Kewarganegaraan <span style="color:red"><b>*</b></span> : 
                                </label> 
                                <div class="col-lg-8"> 
                                     <select class="form-control select2" name="countries_id" id="countries_id" required="" style="width: 100%"> 
                                    <option value="0">-- Tampilkan Semua --</option>
                                    @foreach($data_countries as $r)
                                    <option value="{{$r->en_short_name}} ( {{$r->alpha_2_code}} )">{{$r->en_short_name}} ( {{$r->alpha_2_code}} )</option>  
                                    @endforeach
                                    </select>   
                                </div>
                            </div> 
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="icon-cross"></i> Batal</button>
                            <button type="submit" class="btn btn-primary btn_data_inventor"><i class="icon-check"></i> Simpan</button>
                        </div>
                    </form>
                    <table class="table table-bordered table-hover datatable-basic">
                        <thead>
                            <tr>
                                <th width="1%">No</th>
                                <th>Nama Inventor</th> 
                                <th>Alamat Inventor</th> 
                                <th>Kewarganegaraan</th>  
                                <th style="width: 50px !important">Act</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no = 0;
                            ?>
                            @foreach ($data_inventor as $r) 
                            @php
                            $no ++;
                            $id_inventor = $r['id'];
                            @endphp
                            <tr>
                                <td>{{$no}}</td>
                                <td>{{$r['nama']}}</td> 
                                <td>{{$r['alamat_inventor']}}</td> 
                                <td> {{($r->kewarganegaraan)}}</td>   
                                <td>  
                                    <button type="button" onclick="hapus_data_inventor('{{csrf_token()}}','{{ $id_inventor }}','{{$id}}')"
                                    data-toggle="modal" class="btn btn-danger btn-xs btn-block">
                                    <i class="glyphicon glyphicon-remove"></i></button> 
                                </td>
                            </tr> 
                            @endforeach
                        </tbody>
                    </table>


<script type="text/javascript">
    $( document ).ready(function() {
        $('.select2').select2();
    });
</script>