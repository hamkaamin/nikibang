@extends('index')
@section('tempat_content')
<!-- Main charts -->
<style>
.image-thumb > img:hover {
  width: 500px;
  height: 200px;
}    
</style>
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
                <h6 class="panel-title">Data Berita </h6>
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
                    <a class="btn btn-info" onclick="tambah_modal_berita('{{csrf_token()}}', '#ModalBiru')">Tambah Data
                        <i class="icon-plus3 position-right"></i></a>
                </div>
                @endif
                <br>
                <div class="">
                    <table class="table table-bordered table-hover datatable-basic">
                        <thead>
                            <tr>
                                <th width="1%">No</th>
                                <th>Thumbnail</th>
                                <th>Judul</th>
                                <th>Kategori</th>
                                @if(Auth::user()->role_id == 1)
                                <th style="width: 50px !important">Act</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
							$no = 0;
							$status='-';
							?>
                            @foreach ($berita as $r)
                            @php
                            $no ++;
                            $id = $r['id'];

                            @endphp

                            <tr>
                                <td>{{$no}}</td>
                                <td>
                                    <div class="row lightgallery float-left mr-0">
                                        <div class="col item"
                                             data-src="{{asset($r->thumbnail)}}"
                                             data-sub-html="<h4>{{$r->thumbnail}}</h4><p></p>">
                                            <div class="image-thumb">
                                                <img width="100" alt="Thumbnail" class="img-thumbnail"
                                                     src="{{asset($r->thumbnail)}}">
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>{{$r['judul']}}</td>
                                <td>{{$r['kategori']}}</td>
                                @if(Auth::user()->role_id == 1)
                                <td>
                                    <div class="btn-group btn-block btn-group-velocity">
                                        <button type="button" class="btn bg-blue btn-sm btn-block dropdown-toggle"
                                            data-toggle="dropdown"><i class="glyphicon glyphicon-th-list"></i> Act <span
                                                class="caret"></span></button>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <button type="button" onclick="
									edit_modal_berita('{{csrf_token()}}', '{{ $id }}', '#ModalTeal')
									" id="modal_update_berita" title="Ubah" class="btn bg-teal-400 btn-xs btn-block">
                                                    <i class="glyphicon glyphicon-edit"></i>Ubah</button>
                                            </li>
                                            <li>
                                                <button type="button"
                                                    onclick="hapus_data_berita('{{csrf_token()}}','{{ $id }}')"
                                                    data-toggle="modal" title="Hapus"
                                                    class="btn btn-danger btn-xs btn-block">
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
