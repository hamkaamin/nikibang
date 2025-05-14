<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th width="1%">No</th> 
            <th>Nama</th> 
            <th>Kewarganegaraan</th> 
            <th>Alamat</th>   
            <th>Email</th>   
            <th>No Telepon</th>  
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
                <input type="hidden" name="arr_nama_inventor[]" id="arr_nama_inventor" value="{{$r['nama_inventor']}}">
                <input type="hidden" name="arr_kewarganegaraan_inventor[]" id="arr_kewarganegaraan_inventor" value="{{$r['kewarganegaraan_inventor']}}">
                <input type="hidden" name="arr_alamat_inventor[]" id="arr_alamat_inventor" value="{{$r['alamat_inventor']}}"> 
                <input type="hidden" name="arr_email_inventor[]" id="arr_email_inventor" value="{{$r['email_inventor']}}"> 
                <input type="hidden" name="arr_telp_inventor[]" id="arr_telp_inventor" value="{{$r['telp_inventor']}}"> 
            </td> 
            <td>{{$r['nama_inventor']}}</td>
            <td>{{$r['kewarganegaraan_inventor']}}</td>
            <td>{{$r['alamat_inventor']}}</td> 
            <td>{{$r['email_inventor']}}</td> 
            <td>{{$r['telp_inventor']}}</td>  
        </tr>
        @endforeach
    </tbody>   
</table>
<script type="text/javascript">
    $('.datatable-basic').DataTable();
</script>