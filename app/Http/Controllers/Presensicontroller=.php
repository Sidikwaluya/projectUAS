<?php

namespace App\Http\Controllers;

use App\Models\presensi;
use Illuminate\Http\Request;

class Presensicontroller extends Controller
{
    //
    function index()
    {
        // $data = presensi::all();
        $data = presensi::orderBy('nim_mhs', 'desc')->paginate(1);
        return view('presensi.index')->with('data', $data);
    }
        function detail($id)
        {
            // return "<h1>Saya mahasiswa dari STMIK dengan nim $id </h1>";
            $data = presensi::where('nim_mhs',$id)->first();
            return view('presensi.show')->with('data',$data);
        }

}
