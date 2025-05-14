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

	<!-- INFORMASI -->
	<div class="alert alert-info alert-styled-left alert-bordered">
		<button style="display: none;" type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
		<!-- <h5>Important Information =>
			<span class="text-semibold" style="display: none;">#. </span><b><u>All notifications on the system will be informed via email.</u></b>
		</h5> -->
		<h5>Status Information : </h5>
		<span class="text-semibold">1. </span><span class="label label-default label-rounded">Belum Verifikasi</span> <b>=></b> Belum Diverifikasi oleh pusat.
		<br>
		<span class="text-semibold">2. </span><span class="label bg-warning label-rounded">Tidak Dibiayai</span> <b>=></b> Tidak Dibiayai oleh pusat.
		<br>
		<span class="text-semibold">3. </span><span class="label bg-success label-rounded">Dibiayai</span> <b>=></b> Dibiayai oleh pusat.
		<br> 
	</div>
	<!-- END INFORMASI -->

	<div class="col-lg-12">

		<!-- Panel Event -->
		<div class="panel panel-indigo">
			<div class="panel-heading">
				<h6 class="panel-title">Data Paten </h6>
				<div class="heading-elements">
					<ul class="icons-list">
						<li><a data-action="collapse"></a></li>
						<li><a data-action="reload"></a></li>
						
					</ul>
				</div>
			</div>

			<div class="panel-body">
				@if(Auth::user()->role_id == 1)
				<div>
					<a class="btn btn-info" onclick="tambah_modal_paten('{{csrf_token()}}', '#ModalBiru')">Tambah Data <i class="icon-plus3 position-right"></i></a>
				</div>
				@endif
				<br>
				<div class="">
					<table class="table table-bordered table-hover datatable-basic">
						<thead>
							<tr>
								<th width="1%">No</th> 
								<th>Nama</th>  
								<th>Status</th>  
								<th>Pembiayaan</th>  
							@if(Auth::user()->role_id == 1) 
								<th style="width: 50px !important">Act</th>
							@endif
							</tr>
						</thead>
						<tbody>
							<?php 
							$no = 0;
							$status='-';
							$verifikasi = '';
							?>
							@foreach ($data_paten_belum_biaya as $r) 
							@php
							$no ++;
							$id = $r['id'];

							@endphp


							@if($r['status'] == 1)
								<?php $status = '(PA) Diberi Paten'; ?>
							@elseif($r['status']==2)
								<?php $status = '(PA) Dianggap Ditarik Kembali (Direktur)'; ?>
							@elseif($r['status']==3)
								<?php $status = '(PA) Berakhir Masa Perlindungan'; ?>
							@elseif($r['status']==4)
								<?php $status = '(PA) Pengajuan'; ?>
							@elseif($r['status']==5)
								<?php $status = '(PA) Proses'; ?>
							@elseif($r['status']==6)
								<?php $status = '(PA) Ditolak'; ?>
							@endif

							@if($r['is_biaya']==0)
								<?php $verifikasi = '<span class="label bg-warning label-rounded">Tidak Dibiayai</span>'; ?> 
							@elseif($r['is_biaya==1']) 
								<?php $verifikasi = '<span class="label bg-success label-rounded">Dibiayai</span>'; ?> 
							@elseif ($r['is_biaya']==NULL || $r['is_biaya']== '') 
								<?php $verifikasi = '<span class="label bg-default label-rounded">Tidak Dibiayai</span>'; ?> 
							@endif
							<tr>
								<td>{{$no}}</td> 
								<td>{{$r['nama']}}</td>   
								<td >{{$status}}</td>    
							@if(Auth::user()->role_id == 1) 
								<td ><span onclick="stat_verif_tidak_dibiayai('{{csrf_token()}}', '{{$r->id}}')" style="cursor: pointer;" class="label bg-warning label-rounded">Tidak Dibiayai</span></td>
							@elseif(Auth::user()->role_id == 3)  
								<td ><span class="label bg-warning label-rounded">Tidak Dibiayai</span></td>
							@endif
							@if(Auth::user()->role_id == 1) 
								<td> 
								<div class="btn-group btn-block btn-group-velocity">
                        <button type="button" class="btn bg-blue btn-sm btn-block dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-th-list"></i> Act <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li> 
									<button type="button" onclick="
									edit_modal_paten('{{csrf_token()}}', '{{ $id }}', '#ModalTeal')
									" id="modal_update_paten" title="Ubah" class="btn bg-teal-400 btn-xs btn-block">
									<i class="glyphicon glyphicon-edit"></i>Ubah</button>  
                            </li>
                            <li> 
									<button type="button" onclick="
									detail_modal_paten('{{csrf_token()}}', '{{ $id }}', '#ModalHijau')
									" id="modal_update_paten" title="Detail" class="btn bg-green btn-xs btn-block">
									<i class="glyphicon glyphicon-repeat"></i>Detail</button>  
                            </li>
                            <li>
                                	<button type="button" onclick="
									modal_isi_paten('{{csrf_token()}}', '{{ $id }}', '#ModalKuning')
									" id="modal_update_paten" title="Isi Data" class="btn bg-warning btn-xs btn-block">
									<i class="glyphicon glyphicon-search"></i>Isi Data</button>
                            </li> 
                            <li>
                            	<button type="button" onclick="hapus_data_paten_belum_biaya('{{csrf_token()}}','{{ $id }}')"
									data-toggle="modal" title="Hapus" class="btn btn-danger btn-xs btn-block">
									<i class="glyphicon glyphicon-remove"></i>Hapus</button>
                            </li>
                        </ul>
                    </div>  
									 
								</td>
								@endif
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

@endsection