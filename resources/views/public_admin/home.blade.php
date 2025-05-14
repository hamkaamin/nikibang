@extends('index')
@section('tempat_content') 
<div class="row">
    <div class="col-sm-6">
        <div class="panel bg-success">
            <div class="panel-body">
                <div class="heading-elements">
                    <!-- <span class="heading-text badge bg-teal-800">+53,6%</span> -->
                    <ul class="icons-list">
                        <li><a data-action="reload"></a></li>
                    </ul>
                </div>

                <h3 class="no-margin">
                    {{$total_paten}} 
                </h3>
                <div class="text-muted text-size-small">
                Jumlah Paten
                </div>
            </div>
        </div>
    </div> 
    <div class="col-sm-6">
        <div class="panel bg-primary">
            <div class="panel-body">
                <div class="heading-elements">
                    <!-- <span class="heading-text badge bg-teal-800">+53,6%</span> -->
                    <ul class="icons-list">
                        <li><a data-action="reload"></a></li>
                    </ul>
                </div> 
                <h3 class="no-margin"> 
                    {{$total_cipta}}
                </h3>
                <div class="text-muted text-size-small">
                Jumlah Hak Cipta
                </div>
            </div>
        </div>
    </div> 
</div>  
<div class="panel"> 
    <div class="panel-body">
        <div class="row">
            <div class="col-sm-12">
                <div id="div_grafik_paten">

                </div>
            </div> 
        </div>
    </div>
</div>
<script type="text/javascript"> 
    $(document ).ready(function() {  
    div_grafik_paten('{{csrf_token()}}', '#div_grafik_paten');   
});
</script>
@endsection