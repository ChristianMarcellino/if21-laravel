<a href="mahasiswa">Mahasiswa</a>
<a href="fakultas">Fakultas</a>
<a href="prodi">Prodi</a>

<h1>Prodi</h1>

@foreach ($prodi as $item)
<li>{{ $item -> nama }}</li>
<li>{{ $item -> singkatan }}</li>
<li>{{ $item -> kaprodi }}</li>
<li>{{ $item -> sekretaris }}</li>
<li>{{$item->fakultas->nama}}</li>
@endforeach
