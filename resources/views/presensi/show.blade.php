@extends('layout/main')

@section('content')
<div class="container-fluid py-4">
<div>
    <a href="/presensi" class="btn btn-secondary">>> Kembali</a>
    <h1>{{ $data->nim_mhs }}</h1>
    <p>
        <b>Nama </b> {{ $data->nama_mhs }}
    </p>
    <p>
        <b>Nim </b> {{ $data->nim_mhs }}
    </p>
    <p>
        <b>Prodi </b> {{ $data->prodi_mhs }}
    </p>
</div>
</div>
@endsection
