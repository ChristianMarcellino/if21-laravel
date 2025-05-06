<a href="mahasiswa">Mahasiswa</a>
<a href="fakultas">Fakultas</a>
<a href="prodi">Prodi</a>
<h1>Fakultas</h1>
@foreach ($fakultas as $item) 
{{-- //$fakultas diambil dari with pada controller --}}
    {{ $item->nama }}
    {{ $item->singkatan }}
    {{ $item->nama_dekan }}
    {{ $item->nama_wadek }}
@endforeach