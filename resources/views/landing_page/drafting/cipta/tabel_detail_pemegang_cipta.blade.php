
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
                <input type="hidden" name="arr_nama_pemegang_cipta[]" id="arr_nama_pemegang_cipta" value="{{$r['nama_pemegang_cipta']}}">
                <input type="hidden" name="arr_kewarganegaraan_pemegang_cipta[]" id="arr_kewarganegaraan_pemegang_cipta" value="{{$r['kewarganegaraan_pemegang_cipta']}}">
                <input type="hidden" name="arr_alamat_pemegang_cipta[]" id="arr_alamat_pemegang_cipta" value="{{$r['alamat_pemegang_cipta']}}">
                <input type="hidden" name="arr_kota_pemegang_cipta[]" id="arr_kota_pemegang_cipta" value="{{$r['kota_pemegang_cipta']}}">
                <input type="hidden" name="arr_kode_pos_pemegang_cipta[]" id="arr_kode_pos_pemegang_cipta" value="{{$r['kode_pos_pemegang_cipta']}}"> 
                <input type="hidden" name="arr_negara_pemegang_cipta[]" id="arr_negara_pemegang_cipta" value="{{$r['negara_pemegang_cipta']}}">
                <input type="hidden" name="arr_provinsi_pemegang_cipta[]" id="arr_provinsi_pemegang_cipta" value="{{$r['provinsi_pemegang_cipta']}}">  

                
            </td> 
            <td>{{$r['nama_pemegang_cipta']}}</td>
            <td>{{$r['kewarganegaraan_pemegang_cipta']}}</td>
            <td>{{$r['alamat_pemegang_cipta']}}</td>
            <td>{{$r['kota_pemegang_cipta']}}</td>
            <td>{{$r['kode_pos_pemegang_cipta']}}</td> 
            <td>{{$r['negara_pemegang_cipta']}}</td> 
            <td>{{$r['provinsi_pemegang_cipta']}}</td>  
        </tr>
        @endforeach
    </tbody>   
</table>
<script type="text/javascript">
    $('.datatable-basic').DataTable();
</script>