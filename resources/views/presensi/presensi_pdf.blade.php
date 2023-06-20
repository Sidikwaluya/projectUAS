<style>
#presensi {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#presensi td, #presensi th {
    border: 1px solid black;
    padding: 8px;
}


</style>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
{{-- <a href="/presensi/create" class="btn btn-primary"> + Tambah Data Presensi </a> --}}
<table id="presensi">
    <thead>
        <tr>
            <th>Tanggal</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Prodi</th>
            <th>Status Kehadiran</th>

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
            </tr>
        @endforeach
    </tbody>
</table>

