@extends('layout/project')

@section('kontent')
<a href="/presensi/create" class="btn btn-primary"> + Tambah Data Presensi </a>
<table class="table">
    <thead>
        <tr>
            <th>Tanggal</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Prodi</th>
            <th>Status Kehadiran</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
            <tr>


                <th>{{ $item->tanggal_presensi }}</th>
                <th>{{ $item->nama_mhs }}</th>
                <th>{{ $item->nim_mhs }}</th>
                <th>{{ $item->prodi_mhs }}</th>
                <th>{{ $item->status_kehadiran }}</th>
                <td>
                    <a class="btn btn-secondary btn-sm" href="{{ url('/presensi/'.$item->nim_mhs) }}">Detail</a>
                    <a class="btn btn-warning btn-sm" href="{{ url('/presensi/'.$item->nim_mhs.'/edit') }}">Edit</a>

                    <form onsubmit="return confirm('Yakin mau hapus data?')" class="d-inline" action="{{ '/presensi/'.$item->nim_mhs }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" type="submit">Del</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
{{ $data->links() }}
@endsection
