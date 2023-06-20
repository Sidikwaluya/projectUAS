<?php

namespace App\Http\Controllers;

use App\Models\presensi;
use Illuminate\Http\Request;

class Layout extends Controller
{
    //
    public function index()
    {
        return view("layout.main");
    }
    public function home()
    {
        $category = presensi::count();
        $hadir = presensi::where('status_kehadiran','Hadir')->count();
        $terlambat = presensi::where('status_kehadiran','Terlambat')->count();
        $izin = presensi::where('status_kehadiran','Izin')->count();
        $tidakhadir = presensi::where('status_kehadiran','Tidak Hadir')->count();
        return view("layout.home", compact('category','hadir','terlambat','izin','tidakhadir'));
    }
}
