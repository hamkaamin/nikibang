
<div class="row">
    <div class="col-md-12">  
        <button type="button" class="btn btn-primary" onclick="$('#frmKonsultan_cipta').toggle(500);">
            <i class="fas fa-plus"></i> Tambah Data
        </button>
    </div>
    <hr>
    <hr>
</div>
<form style="display: none;" id="frmKonsultan_cipta" class="form-horizontal"  enctype="multipart/form-data" onsubmit="
    simpan_div_data_konsultan_cipta('{{csrf_token()}}', '{{ $id }}', '.btn_data_konsultan_cipta');
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
                                    <input placeholder="Nama Konsultan" type="text" class="form-control" value="" name="nama" id="nama" >  
                                </div>
                            </div>
                            <div class="form-group status_lengkap">
                                <label for="keterangan" style="text-align: right;" class="col-lg-3 control-label">
                                    Alamat <span style="color:red"><b>*</b></span> : 
                                </label> 
                                <div class="col-lg-8">  
                                   <textarea placeholder="Alamat Inventor" class="form-control" name="alamat" id="alamat"> 
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
                                    <option value="{{$r->id}}">{{$r->en_short_name}} ( {{$r->alpha_2_code}} )</option>  
                                    @endforeach
                                    </select>   
                                </div>
                            </div> 
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="icon-cross"></i> Batal</button>
                            <button type="submit" class="btn btn-primary btn_data_konsultan_cipta"><i class="icon-check"></i> Simpan</button>
                        </div>
                    </form>
<table class="table table-bordered table-hover datatable-basic">
                        <thead>
                            <tr>
                                <th width="1%">No</th>
                                <th>Nama Konsultan</th> 
                                <th>Alamat Konsultan</th> 
                                <th>Nationality</th>  
                                <th style="width: 50px !important">Act</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no = 0;
                            ?>
                            @foreach ($data_konsultan_cipta as $r) 
                            @php
                            $no ++;
                            $id_konsultan = $r['id'];
                            @endphp
                            <tr>
                                <td>{{$no}}</td>
                                <td>{{$r['nama']}}</td> 
                                <td>{{$r['alamat']}}</td> 
                                <td> {{($r->countries->en_short_name)}} ( {{($r->countries->alpha_2_code)}} )</td>   
                                <td>  
                                    <button type="button" onclick="hapus_data_konsultan_cipta('{{csrf_token()}}','{{ $id_konsultan }}','{{$id}}')"
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