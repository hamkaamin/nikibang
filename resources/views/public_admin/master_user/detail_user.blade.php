<table border="0"> 
    <tbody>
        <?php $count = 0; 
        $role = '';?>
         
        <?php $count++; ?>  
        @if($data_user['role_id']==1) 
        <?php $role = 'Admin'; ?> 
        @elseif($data_user['role_id']==2)
        <?php $role='User'; ?>
        @endif
        <tr>
            <th>Nama User</th>
            <td>: {{ $data_user['name'] }}</td>
        </tr>
        <tr>
            <th>Username</th>
            <td>: {{ $data_user['username'] }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>: {{ $data_user['email'] }}</td>
        </tr>
        <tr>
            <th>Role</th>
            <td>: {{ $role }}</td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td>: {{ $data_user['alamat'] }}</td>
        </tr> 
        <tr>
            <th>Nomor Telepon</th>
            <td>: {{ $data_user['no_telp'] }}</td>
        </tr>
        <tr>
            <th>Tempat Lahir</th>
            <td>: {{ $data_user['tempat_lahir'] }}</td>
        </tr> 
        <tr>
            <th>Tanggal Lahir</th> 
            <td>: {{ $data_user['tanggal_lahir'] }}</td>
        </tr>  
    </tbody>
</table> 