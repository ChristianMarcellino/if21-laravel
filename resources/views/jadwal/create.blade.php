@extends('main')

@section('title', 'Jadwal')
@section('content')
<div class="app-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <div class="card card-primary card-outline mb-4">
                  <div class="card-header"><div class="card-title">Form Tambah @yield('title')</div></div>
                  <form action="{{ route('jadwal.store')}}" method="POST">
                    @csrf
                    <div class="card-body">
                      <div class="mb-3">
                      <label for="mata_kuliah_id" class="form-label">Mata Kuliah</label>
                      <select class="form-select" name="mata_kuliah_id" id="nama">
                        @foreach ($mata_kuliah as $item)
                          <option value="{{ $item -> id }}">{{ $item->nama }}</option>
                        @endforeach
                      </select>
                      </div>
                      <div class="mb-3">
                        <label for="dosen_id" class="form-label">Nama Dosen</label>
                        <select class="form-select" name="dosen_id" id="dosen_id">
                          @foreach ($dosen as $item)
                            <option value="{{ $item -> id }}">{{ $item->nama }}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="mb-3">
                        <label for="sesi_id" class="form-label">Waktu Sesi</label>
                        <select class="form-select" name="sesi_id" id="sesi_id">
                          @foreach ($sesi as $item)
                            <option value="{{ $item -> id }}">{{ $item->nama }}</option>
                          @endforeach
                        </select>
                        </div>
                      <div class="mb-3">
                        <label for="kelas" class="form-label">Kelas</label>
                        <input id="kelas" type="text" class="form-control" name="kelas">
                      </div>
                      <div class="mb-3">
                        <label for="singkatan" class="form-label">Singkatan Prodi</label>
                        <input type="text" class="form-control" name="singkatan">
                      </div>
                      <div class="mb-3">
                        <label for="kaprodi" class="form-label">Nama Kaprodi</label>
                        <input type="text" class="form-control" name="kaprodi">
                      </div>
                      <div class="mb-3">
                        <label for="sekretaris" class="form-label">Nama Sekretaris</label>
                        <input type="text" class="form-control" name="sekretaris">
                      </div>
                    </div>
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary confirm_input">Submit</button>
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
@endsection
