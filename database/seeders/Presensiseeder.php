<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Presensiseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('presensi')->insert([
            'tanggal_presensi' => '30-05-2023',
            'nama_mhs' => 'Sidik',
            'nim_mhs' => '22020022',
            'prodi_mhs' => 'Manajemen Informatika',
            'status_kehadiran' => 'Hadir',
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
