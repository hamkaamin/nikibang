<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th width="1%">No</th> 
            <th>Nomor Prioritas</th> 
            <th>Negara</th> 
            <th>Tanggal</th>   
        </tr>
    </thead> 
    <tbody>
        <?php
        $count = 0; 
        ?>
        @foreach ($arr_detail as $r) 
        @php 
        $count++;
        @endphp
        <tr>
            <td>  {{$count}}
                <input type="hidden" name="arr_nomor_prioritas[]" id="arr_nomor_prioritas" value="{{$r['nomor_prioritas']}}">
                <input type="hidden" name="arr_negara_prioritas[]" id="arr_negara_prioritas" value="{{$r['negara_prioritas']}}">
                <input type="hidden" name="arr_tanggal_prioritas[]" id="arr_tanggal_prioritas" value="{{$r['tanggal_prioritas']}}">  
            </td> 
            <td>{{$r['nomor_prioritas']}}</td>
            <td>{{$r['negara_prioritas']}}</td>
            <td>{{$r['tanggal_prioritas']}}</td>  
        </tr>
        @endforeach
    </tbody>   
</table>
<script type="text/javascript">
    $('.datatable-basic').DataTable();
</script>