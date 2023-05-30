<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class presensi extends Model
{
    use HasFactory;
    protected $table = "presensi";
    protected $fillable=
    [
        'tanggal_presensi',
        'nama_mhs',
        'nim_mhs',
        'prodi_mhs',
        'status_kehadiran'
    ];
}
