<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jabatan;

class jabatancontroller extends Controller
{
    public function jabatan(){

        $jabatan = jabatan::where('delstatus','=', true)->get();

        return view('jabatan.jabatan', compact('jabatan'));

    }

    public function tambahjabatan(){
        

        return view('jabatan.tambahjabatan');

    }

    public function simpanjabatan(Request $request){

        jabatan::create([
            'jabatan'=> $request->jabatan,
            
            
        ]);
        return redirect('jabatan');

    }


    public function Update($id){
        $jabatan = jabatan::findOrFail($id);
        
        return view('jabatan.update-jabatan',compact('jabatan'));

    }

    public function simpanPerubahan(Request $request, $id)
    {
            $jabatan = jabatan::findOrFail($id);

            $data = [
                'jabatan'=> $request->jabatan,
            ];

            $jabatan->update($data);
            return redirect('jabatan');
    }

    public function hapusjabatan($id)
    {
        $varJabatan = jabatan::findOrFail($id);
        $data = ['delstatus' => false,];
        $varJabatan->update($data);
        return back();
    }
}
