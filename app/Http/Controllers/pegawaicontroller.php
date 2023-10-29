<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jabatan;
use App\Models\pegawai;


class pegawaicontroller extends Controller
{
    public function adminPegawai(){

        $pegawai = pegawai::with('jabatan')->where('delstatus','=',1)->latest()->get();

        return view('pegawai.pegawai',compact('pegawai'));

    }

    public function singlePegawai($id){
        $single = pegawai::with('jabatan')->where([
            ['delstatus','=',true],
            ['id', '=', $id]
        ])->first();

        return view('pegawai.singlePegawai', compact('single'));
    }

    public function tambahpegawai(){

        $jab = jabatan::all();

        return view('pegawai.tambahpegawai', compact('jab'));

    }

    public function simpanpegawai(Request $request){

        pegawai::create([
            'nama'=> $request->nama,
            'jabatan_id'=> $request->jabatan_id,
            'agama'=>$request->agama,
            'tempat_lahir'=>$request->tempat_lahir,
            "tgl_lahir"=>$request->tgl_lahir
            
        ]);
        return redirect('pegawai-admin');

    }

    public function UpdatePegawai($id){
        $pegawai = pegawai::findOrFail($id);
        $jab = jabatan::where('delstatus', '=', true)->get();
        return view('pegawai.update-pegawai',compact('pegawai', 'jab'));

    }

    public function simpanPerubahan(Request $request, $id)
    {
            $pegawai = pegawai::findOrFail($id);

            $data = [
                'nama'=> $request->nama,
                'jabatan_id'=> $request->jabatan_id,
                'agama'=>$request->agama,
                'tempat_lahir'=>$request->tempat_lahir,
                "tgl_lahir"=>$request->tgl_lahir
            ];

            $pegawai->update($data);
            return redirect('pegawai-admin');
    }
    
    public function hapuspegawai($id)
    {
        $varPegawai = pegawai::findOrFail($id);
        $data = ['delstatus' => false,];
        $varPegawai->update($data);
        return back();
    }
}
