<h1>Mahasiswa</h1>

@foreach ($mahasiswa as $item)
<li>{{ $item -> nama }}</li>
<li>{{ $item -> npm }}</li>
<li>{{ $item -> jk }}</li>
<li>{{ $item -> asal_sma }}</li>
@endforeach
