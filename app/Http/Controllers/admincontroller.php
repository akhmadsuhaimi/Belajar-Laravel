<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\berita;
use App\Models\user;
use App\Models\jabatan;
use App\Models\pegawai;
use Auth;

class admincontroller extends Controller
{
    public function postlogin(Request $request){
        
        if (Auth::attempt(
            [
                'email' => $request->email,
                'password' => $request->password,
            ]
                
        )) {
            return redirect('dashboard');
        }
        return redirect('dashboard');

    }

    public function login(){
        $berita = berita::all();

        return view('welcome',compact('berita'));
    }

    public function logout(){

        Auth::logout();
        return redirect('/');
    }

    public function dashboard(){

        return view('admintools.dashboard');
    }

    public function tampilHalamanberita(){
        $berita = berita::where('delstatus','=',1)->latest()->paginate(6);

        return view('welcome',compact('berita'));

    }

    public function struktur(){
        $pegawai = pegawai::with('jabatan')->where('delstatus','=',true)->get();
        return view('struktur', compact('pegawai'));

    }

    public function tambahAdmin(){


        return view('tambah-admin');

    }

    public function simpanAdmin(Request $request){

        User::create([
            'name'=> $request->nama,
            'email'=> $request->email,
            'password'=> bcrypt($request->passwordpengguna),
        ]);
        return redirect('/');

    }
}
