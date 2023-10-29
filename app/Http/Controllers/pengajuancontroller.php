<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pengajuan;

class pengajuancontroller extends Controller
{
    public function Pengajuan(){

        $pengajuan = pengajuan::where('delstatus','=', true)->get();

        return view('pengajuan.pengajuan', compact('pengajuan'));

    }


    public function tambahpengajuan(){

        $pengajuan = Pengajuan::all();

        return view('pengajuan.tambah-pengajuan', compact('pengajuan'));

    }

    public function simpanpengajuan(Request $request){

        pengajuan::create([
            'jenispengajuan'=> $request->jenispengajuan,
            
        ]);
        return redirect('pengajuan');

    }

    public function Updatepengajuan($id){
        $pengajuan = pengajuan::findOrFail($id);
        return view('pengajuan.update-pengajuan',compact('pengajuan'));

    }

    public function simpanPerubahan(Request $request, $id)
    {
            $pengajuan = pengajuan::findOrFail($id);

            $data = [
                'jenispengajuan'=> $request->jenispengajuan,
            ];

            $pengajuan->update($data);
            return redirect('pengajuan');
    }
    
    public function hapuspengajuan($id)
    {
        $varPengajuan = pengajuan::findOrFail($id);
        $data = ['delstatus' => false,];
        $varPengajuan->update($data);
        return back();
    }

    
}
