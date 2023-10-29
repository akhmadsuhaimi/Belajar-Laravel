<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\surat;
use App\Models\pengajuan;

class suratcontroller extends Controller
{
    public function TampilSurat(){

        $surat = surat::with('pengajuan')->where('delstatus','=',1)->latest()->get();

        return view('admintools.dashboard', compact('surat'));

    }

    public function TambahSurat(){

        $surat = pengajuan::where('delstatus','=',1)->get();

        
        return view('tools.pengajuan', compact('surat'));

    }

    public function simpanSurat(Request $request){

        surat::create([
            'nama'=> $request->nama,
            'nik'=> $request->nik,
            'nohp'=> $request->nohp,
            'pengajuan_id'=> $request->pengajuan_id,
            'keterangan'=> $request->keterangan,
            
        ]);
        return redirect('/');

    }


}
