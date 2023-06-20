<?php

namespace App\Http\Controllers;

use App\Models\presensi;
use Barryvdh\DomPDF\Facade\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Presensicontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = presensi::all();
        $data = presensi::orderBy('nim_mhs', 'desc')->paginate(10);
        return view('presensi/index')->with('data', $data);
    }

    public function cetak_pdf()
    {
    	$data = presensi::all();
        view()->share('data',$data);
    	$pdf = PDF::loadview('presensi.presensi_pdf');
    	return $pdf->download('Presensi.pdf');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('presensi/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Session::flash('tanggal_presensi', $request->tanggal_presensi);
        Session::flash('nama_mhs', $request->nama_mhs);
        Session::flash('nim_mhs', $request->nim_mhs);
        Session::flash('prodi_mhs', $request->prodi_mhs);
        $request->validate([
            'tanggal_presensi' => 'required',
            'nama_mhs' => 'required',
            'nim_mhs' => 'required|numeric',
            'prodi_mhs' => 'required',
            'status_kehadiran' => 'required'
        ], [
            'tanggal_presensi' => 'Tanggal Wajib Diisi',
            'nama_mhs' => 'Nama Wajib Diisi',
            'nim_mhs' => 'Nim Wajib Diisi',
            'prodi_mhs' => 'Prodi Wajib Diisi',
        ]);
        $data =[
            'tanggal_presensi' => $request->input('tanggal_presensi'),
            'nama_mhs' => $request->input('nama_mhs'),
            'nim_mhs' => $request->input('nim_mhs'),
            'prodi_mhs' => $request->input('prodi_mhs'),
            'status_kehadiran' => $request->input('status_kehadiran'),
        ];
        presensi::create($data);
        return redirect('presensi')->with('success', 'Berhasil memasukkan data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
         // return "<h1>Saya mahasiswa dari STMIK dengan nim $id </h1>";
         $data = presensi::where('nim_mhs',$id)->first();
         return view('presensi/show')->with('data',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = presensi::where('nim_mhs',$id)->first();
        return view('presensi.edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'tanggal_presensi' => 'required',
            'nama_mhs' => 'required',
            'nim_mhs' => 'required|numeric',
            'prodi_mhs' => 'required',
            'status_kehadiran' => 'required'
        ], [
            'tanggal_presensi' => 'Tanggal Wajib Diisi',
            'nama_mhs' => 'Nama Wajib Diisi',
            'nim_mhs' => 'Nim Wajib Diisi',
            'prodi_mhs' => 'Prodi Wajib Diisi',
        ]);
        $data =[
            'tanggal_presensi' => $request->input('tanggal_presensi'),
            'nama_mhs' => $request->input('nama_mhs'),
            'nim_mhs' => $request->input('nim_mhs'),
            'prodi_mhs' => $request->input('prodi_mhs'),
            'status_kehadiran' => $request->input('status_kehadiran'),
        ];
        presensi::where('nim_mhs', $id)->update($data);
        return redirect('presensi')->with('success', 'Berhasil melakukan update data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        presensi::where('nim_mhs', $id)->delete();
        return redirect('presensi')->with('success', 'Berhasil menghapus data');
    }
}
