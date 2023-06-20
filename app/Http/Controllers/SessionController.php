<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    //
    function index()
    {
        return view("sesi/index");
    }
    function login(Request $request)
    {
        Session::flash('email', $request->input('email'));
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Email Wajib Diisi',
            'password.required' => 'Password wajib diisi'
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if(Auth::attempt($infologin)) {
            return redirect('/layout/home')->with('success', 'Berhasil login');
        } else {
            return redirect('sesi')->withErrors('Username dan Password yang dimasukkan salah');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/sesi')->with('success', 'Berhasil Logout');
    }
    public function register()
    {
        return view('sesi/register');
    }
    public function create(Request $request)
    {
        Session::flash('name', $request->input('name'));
        Session::flash('email', $request->input('email'));
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5'
        ], [
            'name.required' => 'nama wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Masukkan email anda dengan benar',
            'email.unique' => 'Email anda sudah digunakan pilih email baru',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Minimal password 5 karakter',
        ]);
        $data =[
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'password' => Hash::make($request->password)
        ];
        User::create($data);
        $infologin = [
            'email' => $request->email,
            'password' => ($request->password)
        ];
        if (Auth::attempt($infologin)) {
            return redirect('presensi')->with('success', Auth::user()->name. 'Berhasil Login');
        } else {
            return redirect('sesi')->withErrors('Username dan password yang dimasukkan tidak sesuai');
        }
    }
}
