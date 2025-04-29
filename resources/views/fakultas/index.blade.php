<h1>Fakultas</h1>
@foreach ($fakultas as $item) 
{{-- //$fakultas diambil dari with pada controller --}}
    {{ $item->nama }}
    {{ $item->singkatan }}
    {{ $item->nama_dekan }}
    {{ $item->nama_wadek }}
@endforeach