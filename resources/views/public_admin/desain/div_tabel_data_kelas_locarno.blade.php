
<div class="row">
    <div class="col-md-12">  
        <button type="button" class="btn btn-primary" onclick="$('#frmKelas_locarno').toggle(500);">
            <i class="fas fa-plus"></i> Tambah Data
        </button>
    </div>
    <hr>
    <hr>
</div>
<form style="display: none;" id="frmKelas_locarno" class="form-horizontal"  enctype="multipart/form-data" onsubmit="
    simpan_div_data_kelas_locarno('{{csrf_token()}}', '{{ $id }}', '.btn_data_kelas_locarno');
    return false;
">
                        <div class="modal-body">
                            <div class="form-group">
                                {{ csrf_field() }}
                            </div>  
                            <div class="form-group status_lengkap">
                                <label for="kode" style="text-align: right;" class="col-lg-3 control-label">
                                    Kode Kelas Locarno <span style="color:red"><b>*</b></span> : 
                                </label>
                                <div class="col-lg-8"> 
                                    <input required="required" type="text" class="form-control" value="" name="kode" id="kode" >  
                                </div>
                            </div>
                            <div class="form-group status_lengkap">
                                <label for="keterangan" style="text-align: right;" class="col-lg-3 control-label">
                                    Keterangan <span style="color:red"><b>*</b></span> : 
                                </label>
                                <div class="col-lg-8"> 
                                    <input required="required" type="text" class="form-control" value="" name="keterangan" id="keterangan" >   
                                </div>
                            </div> 
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="icon-cross"></i> Batal</button>
                            <button type="submit" class="btn btn-primary btn_data_kelas_locarno"><i class="icon-check"></i> Simpan</button>
                        </div>
                    </form>
<table class="table table-bordered table-hover datatable-basic">
						<thead>
							<tr>
								<th width="1%">No</th> 
								<th>Kode Kelas Locarno</th> 
								<th>Keterangan</th>  
								<th style="width: 50px !important">Act</th>
							</tr>
						</thead>
						<tbody>
							<?php 
							$no = 0;
							?>
							@foreach ($data_kelas_locarno as $r) 
							@php 
							$no ++;
							$id_prioritas = $r['id'];
							@endphp
							<tr>
								<td>{{$no}}</td>
								<td><b>({{$r->kode}})</b></td> 
								<td>{{$r['keterangan']}}</td>  
								<td>
									<button type="button" onclick="hapus_data_kelas_locarno('{{csrf_token()}}','{{ $id_prioritas }}','{{$id}}')"
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