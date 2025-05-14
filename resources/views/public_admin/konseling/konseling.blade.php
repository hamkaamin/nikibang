@extends('index')
@section('tempat_content')
<!-- Main charts -->

<div class="row">

	<div class="col-md-12">
		@if (session()->has('status')) 
		<script type="text/javascript">
			alertKu('success', "{{ session()->get('status') }}");
		</script>
		<div class="alert alert-success alert-styled-left alert-arrow-left alert-bordered">
			<button type="button" class="close" data-dismiss="alert">
				<span>×</span>
				<span class="sr-only">Close</span>
			</button>
			<span class="text-semibold">Berhasil! </span> {{ session()->get('status') }}
			{{session()->forget('status')}}
		</div> 
		@endif
		@if (session()->has('statusT'))
		<div class="alert alert-warning alert-styled-left">
			<button type="button" class="close" data-dismiss="alert">
				<span>×</span>
				<span class="sr-only">Close</span>
			</button>
			<span class="text-semibold">Gagal!<br></span> {{ session()->get('statusT') }}
			{{session()->forget('statusT')}}
		</div>
		@endif
	</div>

	<div class="alert alert-info alert-styled-left alert-bordered">
		<button style="display: none;" type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
		<!-- <h5>Important Information =>
			<span class="text-semibold" style="display: none;">#. </span><b><u>All notifications on the system will be informed via email.</u></b>
		</h5> -->
		<h5>Status Information : </h5>
        <span class="text-semibold">1. </span><span class="label label-info label-rounded">Belum Ditanggapi</span> <b>=></b> Status Penyelesaian Belum Ditanggapi.
        <br>
        <span class="text-semibold">2. </span><span class="label label-default label-rounded">Rendah</span> <b>=></b> Status Penyelesaian Tergolong level rendah.
        <br>
        <span class="text-semibold">3. </span><span class="label bg-warning label-rounded">Sedang</span> <b>=></b> Status Penyelesaian Tergolong level sedang.
        <br>
        <span class="text-semibold">4. </span><span class="label bg-danger label-rounded">Tinggi</span> <b>=></b> Status Penyelesaian Tergolong level tinggi.
        <br> 
	</div>

	<div class="col-lg-12">

		<!-- Panel Event -->
		<div class="panel panel-indigo">
			<div class="panel-heading">
				<h6 class="panel-title">Menu Data Konseling </h6>
				<div class="heading-elements">
					<ul class="icons-list">
						<li><a data-action="collapse"></a></li>
						<li><a data-action="reload"></a></li>
						
					</ul>
				</div>
			</div>

			<div class="panel-body">
				<div class="col-md-12" style="display: none;">  
					<button type="button" class="btn bg-slate btn-labeled legitRipple" onclick="$('#divKonsultasi').show(500);">
						<b><i class="icon-add"></i></b>Create Data
					</button>
				</div>
				<div class="col-md-12" style="margin-top: 20px; display: none;" id="divKonsultasi">
					<fieldset class="content-group">
						<legend class="text-bold">
							Isi untuk Konsultasi Disini
							<label class="control-arrow" title="Close Blade" onclick="$('#divKonsultasi').hide(500);" style="cursor: pointer;">
								<i class="icon-close2"></i>
							</label>
							<a class="control-arrow" data-toggle="collapse" data-target="#data" title="Hide Blade" style="display: none;">
								<i class="icon-circle-down2"></i>
							</a>
						</legend>
						<div class="collapse in" id="data">
							<div class="row">
								<div class="col-md-12">
									<form class="form-horizontal" method="post" action="#" enctype="multipart/form-data" >
										{{ csrf_field() }}
										<div class="form-group">
											<label style="text-align: right" for="user_id" class="control-label col-sm-3">
												Isu Permasalahan <span style="color:red"><b>*</b></span> :
											</label>
											<div class="col-sm-8">
												<input type="text" class="form-control" name="judul" id="judul" placeholder="Masukkan Isu Permasalahan Disini" required="">
											</div>
										</div>
										<div class="form-group">
											<label style="text-align: right;" for="name" class="control-label col-sm-3">
												Kategori <span style="color:red">*</span>
											</label>
											<div class="col-sm-8">
												<select class="form-control select2" name="kategori" id="kategori" required="" tabindex="-1"> 
													<option value="1">Rendah</option>
													<option value="2">Sedang</option>
													<option value="3">Tinggi</option>
												</select>
											</div>	
										</div>

										<div class="form-group">
											<label style="text-align: right;" for="name" class="control-label col-sm-3">
												Deskripsi <span style="color:red"><b>*</b></span> :
											</label>
											<div class="col-sm-8">
												<textarea placeholder="Deskripsi" required="" class="form-control summernote" name="deskripsi" id="deskripsi"> 
												</textarea>
											</div>
										</div> 

										<div class="form-group">
											<div class="col-sm-11" style="text-align: right;">
												<button type="submit" class="btn btn-primary" id="laddaBtnSubmit"><i class="icon-floppy-disk"></i> Save</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</fieldset>
				</div>
				<br>
				<div class="">
					<table class="table table-bordered table-hover datatable-basic">
						<thead>
							<tr>
								<th width="1%">No</th>
								<th>Isu Permasalahan</th> 
								<th style="width: 15%">Kategori</th> 
								<th>Terakhir Diubah</th>  
								<th style="width: 50px !important">Act</th>
							</tr>
						</thead>
						<tbody> 
							<?php
							$count = 0; 
							$dis_kategori = '';
							?>
							@foreach($data_konseling as $r)
							<?php
							$count++; 
							$id = $r->user_id;
							if($r->kategori == 1){
								$dis_kategori ='<span class="label label-default label-rounded">Rendah</span>';
							}else if($r->kategori == 2){
								$dis_kategori ='<span class="label bg-warning label-rounded">Sedang</span>';
							}else if($r->kategori == 3){
								$dis_kategori ='<span class="label bg-danger label-rounded">Tinggi</span>';
							}else if($r->kategori == 4){
								$dis_kategori ='<span class="label bg-info label-rounded">Belum Ditanggapi</span>';
							}
							?>
							<tr>
								<td>{{$count}}</td>
								<td>{{$r->judul}}</td>  
								<td align="center">
									<?php $url = url('/admin/detail_konseling/?uuid='.$r->uuid); ?>
									<label style="cursor: pointer;" onclick="window.location.href='{{$url}}'">
										{!! $dis_kategori !!} 
									</label> 
								</td> 
								<td>{{$r->updated_at}}</td>    
								<td> 
									<div class="btn-group btn-block btn-group-velocity">
										<button type="button" class="btn bg-blue btn-sm btn-block dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-th-list"></i> Act <span class="caret"></span></button>
										<ul class="dropdown-menu">
											<li> 
												<?php $url = url('/admin/detail_konseling/?uuid='.$r->uuid); ?>
												<button type="button" onclick="window.location.href='{{$url}}' " id="modal_update_cipta" title="Tanggapi" class="btn bg-teal-400 btn-xs btn-block">
												<i class="glyphicon glyphicon-edit"></i>Tanggapi</button>  
											</li>
											@if(Auth::user()->role_id == 1) 
											<li>
												<button type="button" onclick="hapus_data_cipta('{{csrf_token()}}','{{ $id }}')"
												data-toggle="modal" title="Hapus" class="btn btn-danger btn-xs btn-block">
												<i class="glyphicon glyphicon-remove"></i>Hapus</button>
											</li>
											@endif
										</ul>
									</div>   
									
								</td> 
							</tr>  
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<!-- /Panel Event -->

	</div>
</div>
<!-- /main charts -->	

<script type="text/javascript">

    $('.select2').select2();
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

@endsection