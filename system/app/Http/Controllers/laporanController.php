<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bulanan;
use App\Models\triwulan;
use App\Models\semester;
use App\Models\tahunan;

class laporanController extends Controller
{
    //add laporan
    function add(){

        $user = \Auth::user()->id;
        switch (request('jenis_laporan')) {
            case '1':
                $laporan = new bulanan;
                $laporan->deskripsi = request('deskripsi');
                $laporan->data_dukung = request('data_dukung');
                $laporan->tgl_akhir = date('Y-m-d',strtotime(request('tgl_akhir')));
                $laporan->tgl_disusun = date('Y-m-d',strtotime(request('tgl_disusun')));
                $laporan->user = $user;
                $laporan->pic = request('pic');
                $laporan->status = '1';
                $laporan->save();
                return redirect('dashboard');
                break;
            case '2':
                $laporan = new triwulan;
                $laporan->deskripsi = request('deskripsi');
                $laporan->data_dukung = request('data_dukung');
                $laporan->tgl_akhir = date('Y-m-d',strtotime(request('tgl_akhir')));
                $laporan->tgl_disusun = date('Y-m-d',strtotime(request('tgl_disusun')));
                $laporan->user = $user;
                $laporan->pic = request('pic');
                $laporan->status = '1';
                $laporan->save();
                return redirect('dashboard');
                break;
            case '3':
                $laporan = new semester;
                $laporan->deskripsi = request('deskripsi');
                $laporan->data_dukung = request('data_dukung');
                $laporan->tgl_akhir = date('Y-m-d',strtotime(request('tgl_akhir')));
                $laporan->tgl_disusun = date('Y-m-d',strtotime(request('tgl_disusun')));
                $laporan->user = $user;
                $laporan->pic = request('pic');
                $laporan->status = '1';
                $laporan->save();
                return redirect('dashboard');
                break;
            case '4':
                $laporan = new tahunan;
                $laporan->deskripsi = request('deskripsi');
                $laporan->data_dukung = request('data_dukung');
                $laporan->tgl_akhir = date('Y-m-d',strtotime(request('tgl_akhir')));
                $laporan->tgl_disusun = date('Y-m-d',strtotime(request('tgl_disusun')));
                $laporan->user = $user;
                $laporan->pic = request('pic');
                $laporan->status = '1';
                $laporan->save();
                return redirect('dashboard');
                break;
            
        }
    }
    //bulanan
     function bulanan(){
        $user = \Auth::user()->id;
        $data['list_data'] = bulanan::all();
        return view('laporan.bulanan',$data);
    }
    //triwulan
    function triwulan(){
        $user = \Auth::user()->id;
        $data['list_data'] = triwulan::all();
        return view('laporan.triwulan',$data);
    }
    //semester
    function semester(){
        $user = \Auth::user()->id;
        $data['list_data'] = semester::all();
        return view('laporan.semester',$data);
    }
    //tahunan
    function tahunan(){
        $user = \Auth::user()->id;
        $data['list_data'] = tahunan::all();
        return view('laporan.tahunan',$data);
    }

}
