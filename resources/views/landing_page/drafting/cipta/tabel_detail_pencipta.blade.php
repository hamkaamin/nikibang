<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th width="1%">No</th> 
            <th>Nama</th> 
            <th>Kewarganegaraan</th> 
            <th>Alamat</th>  
            <th>Kode Pos</th>  
            <th>Kota</th>
            <th>Negara</th>
            <th>Provinsi</th>   
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
                <input type="hidden" name="arr_nama_pencipta[]" id="arr_nama_pencipta" value="{{$r['nama_pencipta']}}">
                <input type="hidden" name="arr_kewarganegaraan_pencipta[]" id="arr_kewarganegaraan_pencipta" value="{{$r['kewarganegaraan_pencipta']}}">
                <input type="hidden" name="arr_alamat_pencipta[]" id="arr_alamat_pencipta" value="{{$r['alamat_pencipta']}}">
                <input type="hidden" name="arr_kota_pencipta[]" id="arr_kota_pencipta" value="{{$r['kota_pencipta']}}">
                <input type="hidden" name="arr_kode_pos_pencipta[]" id="arr_kode_pos_pencipta" value="{{$r['kode_pos_pencipta']}}"> 
                <input type="hidden" name="arr_negara_pencipta[]" id="arr_negara_pencipta" value="{{$r['negara_pencipta']}}">
                <input type="hidden" name="arr_provinsi_pencipta[]" id="arr_provinsi_pencipta" value="{{$r['provinsi_pencipta']}}">
            </td> 
            <td>{{$r['nama_pencipta']}}</td>
            <td>{{$r['kewarganegaraan_pencipta']}}</td>
            <td>{{$r['alamat_pencipta']}}</td>
            <td>{{$r['kota_pencipta']}}</td>
            <td>{{$r['kode_pos_pencipta']}}</td> 
            <td>{{$r['negara_pencipta']}}</td> 
            <td>{{$r['provinsi_pencipta']}}</td>  
        </tr>
        @endforeach
    </tbody>   
</table>
<script type="text/javascript">
    $('.datatable-basic').DataTable();
</script>