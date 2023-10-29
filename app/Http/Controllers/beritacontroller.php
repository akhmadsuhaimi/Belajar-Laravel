<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\berita;

class beritacontroller extends Controller
{

    public function singleBerita($url){
        $single = berita::where([
            ['delstatus','=',true],
            ['url', '=', $url]
        ])->first();

        return view('berita.singleBerita', compact('single'));
    }

    //beritadasboard
    public function tampilberita(){
        $berita = berita::where('delstatus','=',true)->latest()->get();

        return view('berita.databerita',compact('berita'));

    }
    
    public function tambahberita(){
        

        return view('berita.tambahberita');

    }

    public function simpanberita(Request $request){

        berita::create([
            'tgl'=> $request->tgl,
            'judul'=> $request->judul,
            'url'=> Str::slug($request->judul,'-'),
            'isi'=>$request->isi,
        ]);
        return redirect('/');

    }

    public function Update($id){
        $berita = berita::findOrFail($id);
        
        return view('berita.update-berita',compact('berita'));

    }

    public function simpanPerubahan(Request $request, $id)
    {
            $varka = berita::findOrFail($id);

            $data = [
                'tgl'=> $request->tgl,
                'judul'=> $request->judul,
                'url'=> Str::slug($request->judul,'-'),
                'isi'=>$request->isi,
            ];

            $varka->update($data);
            return redirect('data-berita');
    }
    
    public function hapusberita($id)
    {
        $var = berita::findOrFail($id);
        $var->delete();
        return back();
    }

}
