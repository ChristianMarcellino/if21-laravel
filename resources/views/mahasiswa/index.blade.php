<a href="mahasiswa">Mahasiswa</a>
<a href="fakultas">Fakultas</a>
<a href="prodi">Prodi</a>
<h1>Mahasiswa</h1>
<table border="1">
    <thead>
        <tr>
            <th>Nama</th>
            <th>NPM</th>
            <th>Jenis Kelamin</th>
            <th>Asal Sekolah</th>
            <th>Tempat Lahir</th>
            <th>Program Studi</th>
            <th>Fakultas</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($mahasiswa as $item)  
            <tr>
                <td>{{ $item -> nama }}</td>
                <td>{{ $item -> npm }}</td>
                <td>
                    <?php 
                        if($item->jk == 'L'){
                            echo "Laki Laki";
                        }else{
                            echo "Perempuan";
                        }
                    ?>
                </td>
                <td>{{ $item -> asal_sma }}</td>
                <td>{{ $item -> tempat_lahir }}</td>
                <td>{{$item->prodi->nama}}</td>
                <td>{{ $item -> prodi -> fakultas -> nama }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
