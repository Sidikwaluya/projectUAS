@extends('layout/project')

@section('kontent')
<a href="/presensi" class="btn btn-secondary"> << Kembali</a>
    <form method="post" action="{{ '/presensi/'.$data->nim_mhs }}" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="tanggal_presensi" class="form-label">Tanggal Presensi</label>
            <input type="text" class="form-control" name="tanggal_presensi" value="{{ $data->tanggal_presensi }}">
        </div>
        <div class="mb-3">
            <label for="nama_mhs" class="form-label">Nama Mahasiswa</label>
            <input type="text" class="form-control" name="nama_mhs" id="nama_mhs" value="{{ $data->nama_mhs }}">
        </div>
        <div class="mb-3">
            <label for="nim_mhs" class="form-label">Nim Mahasiswa</label>
            <input type="text" class="form-control" name="nim_mhs" id="nim_mhs" value="{{ $data->nim_mhs }}">
        </div>
        <div class="mb-3">
            <label for="prodi_mhs" class="form-label">Prodi Mahasiswa</label>
            <input type="text" class="form-control" name="prodi_mhs" value="{{ $data->prodi_mhs }}">
        </div>
        <div class="mb-3">
            <label for="status_kehadiran" class="form-label" >Status Kehadiran :</label> <br>
            <input type="radio" name="status_kehadiran" value="Hadir"> Hadir <br>
            <input type="radio" name="status_kehadiran" value="Terlambat"> Terlambat <br>
            <input type="radio" name="status_kehadiran" value="Izin"> Izin <br>
            <input type="radio" name="status_kehadiran" value="Tidak Hadir"> Tidak Hadir <br>
        </div>

        <button class='btn btn-warning btn-sm' type="submit" href=''>Simpan</button>
    </form>

@endsection
