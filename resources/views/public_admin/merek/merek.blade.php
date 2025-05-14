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

	<div class="col-lg-12">

		<!-- Panel Event -->
		<div class="panel panel-indigo">
			<div class="panel-heading">
				<h6 class="panel-title">Data Merek </h6>
				<div class="heading-elements">
					<ul class="icons-list">
						<li><a data-action="collapse"></a></li>
						<li><a data-action="reload"></a></li>
						
					</ul>
				</div>
			</div>

			<div class="panel-body">
				<div>
					<a class="btn btn-info" onclick="tambah_modal_merek('{{csrf_token()}}', '#ModalBiru')">Tambah Data <i class="icon-plus3 position-right"></i></a>
				</div>
				<br>
				<div class="">
					<table class="table table-bordered table-hover datatable-basic">
						<thead>
							<tr>
								<th width="1%">No</th>
								<th>Nomor Pendaftaran</th> 
								<th>Tanggal Pendaftaran</th> 
								<th>Nama</th>  
								<th>Status</th>  
								<th style="width: 50px !important">Act</th>
							</tr>
						</thead>
						<tbody>
							<?php 
							$no = 0;
							$status='-';
							?>
							@foreach ($data_merek as $r) 
							@php
							$no ++;
							$id = $r['id'];

							@endphp


							@if($r['status'] == 1)
								<?php $status = '(PA) Diberi Merek'; ?>
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
							<tr>
								<td>{{$no}}</td>
								<td>{{$r['nomor_pendaftaran']}}</td> 
								<td>{{$r['tanggal_pendaftaran']}}</td> 
								<td>{{$r['nama']}}</td>   
								<td>{{$status}}</td>   
								<td> 
								<div class="btn-group btn-block btn-group-velocity">
                        <button type="button" class="btn bg-blue btn-sm btn-block dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-th-list"></i> Act <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li> 
									<button type="button" onclick="
									edit_modal_merek('{{csrf_token()}}', '{{ $id }}', '#ModalTeal')
									" id="modal_update_merek" title="Ubah" class="btn bg-teal-400 btn-xs btn-block">
									<i class="glyphicon glyphicon-edit"></i>Ubah</button>  
                            </li>
                            <li> 
									<button type="button" onclick="
									detail_modal_merek('{{csrf_token()}}', '{{ $id }}', '#ModalHijau')
									" id="modal_update_merek" title="Detail" class="btn bg-green btn-xs btn-block">
									<i class="glyphicon glyphicon-repeat"></i>Detail</button>  
                            </li>
                            <li>
                                	<button type="button" onclick="
									modal_isi_merek('{{csrf_token()}}', '{{ $id }}', '#ModalKuning')
									" id="modal_update_merek" title="Isi Data" class="btn bg-warning btn-xs btn-block">
									<i class="glyphicon glyphicon-search"></i>Isi Data</button>
                            </li> 
                            <li>
                            	<button type="button" onclick="hapus_data_merek('{{csrf_token()}}','{{ $id }}')"
									data-toggle="modal" title="Hapus" class="btn btn-danger btn-xs btn-block">
									<i class="glyphicon glyphicon-remove"></i>Hapus</button>
                            </li>
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

@endsection