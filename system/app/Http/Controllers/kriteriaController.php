<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kriteria;
use App\Models\utility;

class kriteriaController extends Controller
{
    function index(){
        $list_kriteria = $data['list_kriteria'] = kriteria::all();
        $kriteriaSum = $list_kriteria->sum('kriteria_bobot');

        foreach($list_kriteria as $kriteria){
            $kriteria->normalisasi = round($kriteria->kriteria_bobot/$kriteriaSum,4);
          
        }
        return view('kriteria.index',$data);
    }
    function addKriteria(){
        $kriteria = new kriteria;
        $kriteria->kriteria_nama = request('kriteria');
        $kriteria->kriteria_bobot = request('bobot');
        $kriteria->save();
        return back();
    }
    function editKriteria($id){
        $kriteria = kriteria::find($id);
        $kriteria->kriteria_nama = request('kriteria');
        $kriteria->kriteria_bobot = request('bobot');
        $kriteria->save();
        return back()->with('edit','teredit');
    }
    function hapusKriteria($id){
        kriteria::destroy($id);
       
        return back()->with('hapus','teredit');
    }
    function utility($id){
        $data['kriteria'] = kriteria::find($id);
        $data['list_utility'] = utility::where('id_kriteria',$id)->get();
        return view('utility.index',$data);
    }
    function addUtility(){
        $utility = new utility;
        $utility->id_kriteria = request('id_kriteria');
        $utility->sub_kriteria = request('utility'); 
        $utility->nilai_utility =request('nilai');
        $utility->save();
        return back();
    }
    function editUtility($id){
        $utility = utility::find($id);
        $utility->id_kriteria = request('id_kriteria');
        $utility->sub_kriteria = request('utility'); 
        $utility->nilai_utility =request('nilai');
        $utility->save();
        return back()->with('edit','teredit');
    }
    function hapusUtility($id){
        utility::destroy($id);
        return back()->with('hapus','teredit');
    }
}
