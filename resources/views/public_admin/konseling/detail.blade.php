@extends('index')  
@section('tempat_content') 
@include('sweetalert::alert')  
<div class="row">
    <div class="col-lg-12">
        @if (session()->has('status'))
        <script type="text/javascript">
            alertKu2('success', 'Success!', "{{ session()->get('status') }}");
        </script>
        @if (1==0)
        <div class="alert alert-success alert-styled-left alert-arrow-left alert-bordered">
            <button type="button" class="close" data-dismiss="alert">
                <span>×</span>
                <span class="sr-only">Close</span>
            </button>
            <span class="text-semibold">Success! </span> {{ session()->get('status') }}
        </div>
        @endif
        {{session()->forget('status')}}
        @endif
        @if (session()->has('statusT'))
        <script type="text/javascript">
            alertKu2('warning', 'Failed!', "{{ session()->get('statusT') }}");
        </script>
        @if (1==0)
        <div class="alert alert-warning alert-styled-left">
            <button type="button" class="close" data-dismiss="alert">
                <span>×</span>
                <span class="sr-only">Close</span>
            </button>
            <span class="text-semibold">Failed!</span> {{ session()->get('statusT') }}    
        </div>
        @endif
        {{session()->forget('statusT')}}
        @endif 
    </div>

    <div class="col-lg-3" style="margin-bottom: 10px;">
        <?php $urlBack = url('/admin/konseling'); ?>
        <button type="button" class="btn  btn-default btn-rounded btn-block btn-labeled btn-raised legitRipple" onclick="window.location.href='{{$urlBack}}'">
            <b style="background-color: #ffffff; color: #000000"><i class="icon-enter3"></i></b> <center>Kembali</center>
        </button>
    </div>

    <div class="col-lg-12">
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
    </div>
</div>
<?php
$dis_kategori='';
if($data->kategori == 1){
    $dis_kategori ='<span class="label label-default label-rounded">Rendah</span>';
}else if($data->kategori == 2){
    $dis_kategori ='<span class="label bg-warning label-rounded">Sedang</span>';
}else if($data->kategori == 3){
    $dis_kategori ='<span class="label bg-danger label-rounded">Tinggi</span>';
} else if($data->kategori == 4){
    $dis_kategori ='<span class="label bg-info label-rounded">Belum Ditanggapi</span>';
} 
?>

<div class="col-lg-12">
    <div class="panel panel-indigo">
        <div class="panel-heading">
            <h6 class="panel-title">Tanggapan dan Detail Data</h6>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                </ul>
            </div>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="tabbable nav-tabs-vertical nav-tabs-right">
                                <div class="tab-content">

                                    <div class="tab-pane has-padding active" id="tab-dua">

                                        <label style="float: left; font-weight: bold; font-family: Arial; font-size: 20px; text-align: center;">
                                            <?php echo $data->judul; ?> 
                                        </label> 
                                        <br><br>
                                        {!! $dis_kategori !!} 
                                        <br><br><br> 
                                            {!! $data->deskripsi !!} 


                                    </div>  

                                    <div class="tab-pane has-padding" id="tab-satu">
                                        <fieldset class="content-group">
                                            <legend class="text-bold">
                                                Tanggapan
                                                <a class="control-arrow" data-toggle="collapse" data-target="#data" title="Hide Blade">
                                                    <i class="icon-circle-down2"></i>
                                                </a>
                                            </legend>
                                            <div class="collapse in" id="data">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-horizontal">
                                                            <form method="post" action="{{ route('simpan_tanggapan') }}">
                                                                @csrf

                                                                
                                                            <div class="form-group"> 
                                                                <label style="text-align: right; padding-top: 0px;" class="control-label col-sm-2">
                                                                    Tanggapi : 
                                                                </label>
                                                                    <div class="col-sm-10">   
                                                                        <select class="form-control select22" name="kategori"> 
                                                                            <option value="1">Rendah</option>
                                                                            <option value="2">Sedang</option>
                                                                            <option value="3">Tinggi</option> 
                                                                        </select> 
                                                                    </div>
                                                                </div>  
                                                            <div class="form-group">
                                                                <label style="text-align: right; padding-top: 0px;" class="control-label col-sm-2">
                                                                    Tanggapi : 
                                                                </label>
                                                                <div class="col-sm-10">
                                                                    <textarea style="font-weight: bold; font-family: Arial;" name="tanggapan" id="tanggapan" rows="4"class="form-control summernote">{!! $data->tanggapan !!}</textarea>
                                                                </div>
                                                            </div> 
                                                            <input type="hidden" value="{{$data->id}}" name="konseling_id">
                                                            @if(Auth::user()->role_id == 1)
                                                            <div class="form-group">
                                                                <div class="col-sm-12" style="text-align: right;">
                                                                    <button type="submit" class="btn btn-primary" id="laddaBtnSubmit"><i class="icon-floppy-disk"></i> Save</button>
                                                                </div>
                                                            </div>
                                                            @endif
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>

                                    </div>

                                </div>
                                <ul class="nav nav-tabs nav-tabs-highlight"> 
                                    <li>
                                        <a href="#tab-satu" data-toggle="tab">
                                            <i class="glyphicon glyphicon-user pull-right"></i> Submission Data
                                        </a>
                                    </li> 
                                    <li class="active">
                                        <a href="#tab-dua" data-toggle="tab">
                                            <i class="icon-newspaper pull-right"></i> Detail Data
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
            <div class="col-md-12" style="padding-top: 10px; padding-bottom: 10px;" id="testCoba">
                <hr class="no-margin">
            </div>
            <div class="col-md-12">
                <div class="panel-heading">
                    <h6 class="panel-title text-semiold">Tanggapan</h6> 
                </div>

                <div class="panel-body">
                    <?php 
                    if($data->tanggapan==''){
                    ?> <h3 style="color:red">Belum Ada Tanggapan</h3>
                    <?php } else{?>
                    {!! $data->tanggapan !!} 
                  <?php  }?>
                </div>

            </div>

        </div>
    </div>
</div> 
<script type="text/javascript">
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

<script type="text/javascript">
$('.btn_tampilkan').click();
$(document).ready(function () {
$('.select22').select2();
});
</script>
@endsection
