@extends('layout/project')

@section('kontent')

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

@endsection
