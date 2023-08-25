<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ekskul;
use Illuminate\Support\Str;
use App\Models\NilaiNormalisasi;

class ekskulController extends Controller
{
    function index(){
        $list_ekskul = $data['list_ekskul'] = ekskul::all();

        foreach($list_ekskul as $ekskul){
            $ekskul->ranking = NilaiNormalisasi::where('id_ekskul',$ekskul->id)->orderBy('nilai', 'DESC')->get();
        }
        return view('ekskul.index',$data);
    }
    function add(Request $req){
        $random = Str::random(20);
        $ekskul = new ekskul;
        $ekskul->nama = request('nama');
        $ekskul->deskripsi = request('deskripsi');
        $ekskul->foto = '';
        $ekskul->kuota = request('kuota');
        $ekskul->save();

         $filename = $random.'.'.$req->file('gambar')->getClientOriginalExtension();
                $req->file('gambar')->move(public_path('../../imageEkskul'),$filename);
                
                $ekskul->foto = $filename;
                $ekskul->save();
        return redirect('ekstrakulikuler');
    }
    function edit($id){
        $ekskul = ekskul::find($id);
        $ekskul->nama = request('nama');
        $ekskul->deskripsi = request('deskripsi');
        $ekskul->kuota = request('kuota');
        $ekskul->save();
        return back()->with('edit','teredit');
    }
    function editFoto($id,Request $req){
         $random = Str::random(20);
        $ekskul = ekskul::find($id);
                $filename = $random.'.'.$req->file('gambar')->getClientOriginalExtension();
                $req->file('gambar')->move(public_path('../../imageEkskul'),$filename);
                
                $ekskul->foto = $filename;
                $ekskul->save();
                return back()->with('edit','teredit');
    }
    function delete($id){
        ekskul::destroy($id);
        return back()->with('hapus','terhapus');
    }
}
