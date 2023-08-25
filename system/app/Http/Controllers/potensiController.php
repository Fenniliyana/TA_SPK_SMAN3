<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kriteria;
use App\Models\logAktifitas;
use App\Models\ekskul;
use App\Models\utility;
use App\Models\nilai;
use App\Models\NilaiNormalisasi;
use App\Models\RatingTertinggi;

class potensiController extends Controller
{
    function kriteria1(){
        $user = \Auth::user();
        $log = logAktifitas::where('id_user',$user->id)->count();
        if($log == null){
            $kriteria = $data['kriteria'] = kriteria::where('kriteria',1)->first();
            $data['list_jawaban'] = utility::where('id_kriteria',$kriteria->id)->get();
            $data['list_ekskul'] = ekskul::all();
            return view('potensi.satu',$data);
        }elseif($log == 1){
            $kriteria = $data['kriteria'] = kriteria::where('kriteria',2)->first();
            $data['list_jawaban'] = utility::where('id_kriteria',$kriteria->id)->get();
            $data['list_ekskul'] = ekskul::all();
            return view('potensi.dua',$data);
        }elseif($log == 2){
            $kriteria = $data['kriteria'] = kriteria::where('kriteria',3)->first();
            $data['list_jawaban'] = utility::where('id_kriteria',$kriteria->id)->get();
            $data['list_ekskul'] = ekskul::all();
            return view('potensi.tiga',$data);
        }elseif($log == 3){
            $kriteria = $data['kriteria'] = kriteria::where('kriteria',4)->first();
            $data['list_jawaban'] = utility::where('id_kriteria',$kriteria->id)->get();
            $data['list_ekskul'] = ekskul::all();
            return view('potensi.empat',$data);
        }elseif($log == 4){
            $user = \Auth::user()->Siswa->id;
            $list_ekskul = $data['list_ekskul'] = ekskul::all();
            $data['list_kriteria'] = kriteria::all();
            $ratingTertinggi = RatingTertinggi::where('id_siswa',$user)->count();
            $data['list_rating'] = RatingTertinggi::where('id_siswa',$user)->get();
            $data['list_terpenuhi'] = NilaiNormalisasi::where('id_siswa',$user)->where('status_kuota','1')->get();
            foreach($list_ekskul as $ekskul){
                $minat = $ekskul->minat = nilai::where('id_siswa',$user)->where('id_ekskul',$ekskul->id)->where('id_kriteria',1)->first();
                $bakat = $ekskul->bakat = nilai::where('id_siswa',$user)->where('id_ekskul',$ekskul->id)->where('id_kriteria',2)->first();
                $waktu = $ekskul->waktu = nilai::where('id_siswa',$user)->where('id_ekskul',$ekskul->id)->where('id_kriteria',3)->first();
                $tujuan = $ekskul->tujuan = nilai::where('id_siswa',$user)->where('id_ekskul',$ekskul->id)->where('id_kriteria',4)->first();

               $ekskul->total = $minat->nilai_normalisasi+$bakat->nilai_normalisasi+$waktu->nilai_normalisasi+$tujuan->nilai_normalisasi;
               $total = $minat->nilai_normalisasi+$bakat->nilai_normalisasi+$waktu->nilai_normalisasi+$tujuan->nilai_normalisasi;

                $cekNilai = NilaiNormalisasi::where('id_siswa',$user)->where('id_ekskul',$ekskul->id)->count();
                $cekRating = RatingTertinggi::where('id_ekskul',$ekskul->id)->count();
                if($cekNilai == null){
                    $nilai = new NilaiNormalisasi;
                    $nilai->id_ekskul = $ekskul->id;
                    $nilai->id_siswa = $user;
                    $nilai->nilai = $total;
                    if($cekRating >= $ekskul->kuota){
                        $nilai->status_kuota =  '1';
                    }else{
                        $nilai->status_kuota =  '0';
                    }
                    $nilai->save();

                }

                
            }
            if($ratingTertinggi == null){
                return view('potensi.siswa');
            }else{
                return view('potensi.hasil',$data);
            }
        }
    }

    function next1(){
        $kriteria = kriteria::where('id',request('id_kriteria'))->first()->kriteria_bobot;
        $sumKrieria = kriteria::sum('kriteria_bobot');
        $normalisasi = round($kriteria/$sumKrieria,4);
        $log = new logAktifitas;
        $log->id_user = \Auth::user()->id;
        $log->id_siswa = \Auth::user()->Siswa->id;
        $log->kriteria = request('id_kriteria');
        $log->save();

        $list_ekskul = ekskul::all();
        foreach($list_ekskul as $ekskul){
            $text = request('jawaban_'.$ekskul->id);

            $pecah = explode(",",$text);
            $nilai = new nilai;
            $nilai->id_siswa = \Auth::user()->Siswa->id;
            $nilai->id_ekskul = $ekskul->id;
            $nilai->id_kriteria = request('id_kriteria');
            $nilai->id_jawaban = $pecah[0];
            $nilai->nilai = $pecah[1];
            $nilai->nilai_normalisasi = $normalisasi * $pecah[1];
            $nilai->save();
        }
        return back();
    }
   
    function nilaiMaximal(){
        $user = \Auth::user()->Siswa->id;
        $nilaiMax = NilaiNormalisasi::where('id_siswa',$user)->where('status_kuota','0')->max('nilai');
        $dataMax = NilaiNormalisasi::where('id_siswa',$user)->where('nilai',$nilaiMax)->where('status_kuota','0')->first();
        $rating = new RatingTertinggi;
        $rating->id_siswa = $user;
        $rating->id_ekskul = $dataMax->id_ekskul;
        $rating->peroleh_nilai = $dataMax->nilai;
        $rating->save();
        return redirect('potensi');

    }
}
