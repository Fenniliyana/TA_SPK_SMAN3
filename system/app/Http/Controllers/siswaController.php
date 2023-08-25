<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siswa;
use App\Models\ekskul;
use App\Models\kriteria;
use App\Models\nilai;
use App\Models\NilaiNormalisasi;
use App\Models\RatingTertinggi;
use Illuminate\Support\Facades\DB;

class siswaController extends Controller
{
    function index(){
        $data['list_siswa'] = siswa::all(); 
        return view('siswa.index',$data);
    }
    function potensi($id){
            $data['siswa'] = siswa::find($id);
            $user = siswa::find($id)->id;

            $list_ekskul = $data['list_ekskul'] = ekskul::all();
            $data['list_kriteria'] = kriteria::all();
            $ratingTertinggi = RatingTertinggi::where('id_siswa',$user)->count();
            $data['data_nilai'] = NilaiNormalisasi::where('id_siswa',$user)->count();
            $ratingTertinggi=$data['ratingTertinggi'] = RatingTertinggi::where('id_siswa',$user)->first();
            $data['list_terpenuhi'] = NilaiNormalisasi::where('id_siswa',$user)->where('status_kuota','1')->get();
            $data['list_ranking'] = NilaiNormalisasi::where('id_siswa',$user)->orderBy('nilai','desc')->get();
            if($ratingTertinggi != null ){
                foreach($list_ekskul as $ekskul){
                    $minat = $ekskul->minat = nilai::where('id_siswa',$user)->where('id_ekskul',$ekskul->id)->where('id_kriteria',1)->first();
                    $bakat = $ekskul->bakat = nilai::where('id_siswa',$user)->where('id_ekskul',$ekskul->id)->where('id_kriteria',2)->first();
                    $waktu = $ekskul->waktu = nilai::where('id_siswa',$user)->where('id_ekskul',$ekskul->id)->where('id_kriteria',3)->first();
                    $tujuan = $ekskul->tujuan = nilai::where('id_siswa',$user)->where('id_ekskul',$ekskul->id)->where('id_kriteria',4)->first();

                   $ekskul->total = $minat->nilai_normalisasi+$bakat->nilai_normalisasi+$waktu->nilai_normalisasi+$tujuan->nilai_normalisasi;
                   $total = $minat->nilai_normalisasi+$bakat->nilai_normalisasi+$waktu->nilnilai_normalisasiai+$tujuan->nilai_normalisasi;

                    $cekNilai = NilaiNormalisasi::where('id_siswa',$user)->where('id_ekskul',$ekskul->id)->count();
                    $cekRating = RatingTertinggi::where('id_ekskul',$ekskul->id)->count();   
                }
            }
        if($ratingTertinggi == null){
            return view('siswa.sebelumRating',$data);
        }else{
            return view('siswa.potensi',$data);
        }
    }
    function profil(){
        return view('siswa.profil');
    }
    function profilUpdate(){
        $id = \Auth::user()->Siswa->id;

        $siswa = siswa::find($id);
        $siswa->siswa_nama = request('nama');
        $siswa->siswa_kelas = request('kelas');
        $siswa->siswa_alamat = request('alamat');
        $siswa->siswa_jk = request('jk');
        $siswa->siswa_tmp_lahir = request('tmp_lahir');
        $siswa->siswa_nis = request('nis');
        $siswa->save();
        return back()->with('profil','asdc');
    }
    function perangkingan(){
        $list_siswa = $data['list_siswa'] = siswa::all();
        $list_ekskul = $data['list_ekskul'] = ekskul::all();
        $data['jumlah_rating'] = RatingTertinggi::count();
            foreach($list_ekskul as $ekskul){
                $ekskul->ranking = NilaiNormalisasi::where('id_ekskul',$ekskul->id)->orderBy('nilai','desc')->get();
            }
            foreach ($list_siswa as $siswa) {
                $nilai_tertinggi = NilaiNormalisasi::where('id_siswa',$siswa->id)->max('nilai');
                $siswa->nilaiTinggi = NilaiNormalisasi::where('id_siswa',$siswa->id)->where('nilai',$nilai_tertinggi)->first();
            }
        
        return view("ekskul.perankingan",$data);
    }

    function createRank(){
        
        $list_siswa = $data['list_siswa'] = siswa::all();
         foreach ($list_siswa as $siswa) {
                $list_tertinggi = NilaiNormalisasi::where('id_siswa',$siswa->id)->orderBy('nilai','desc')->limit(3)->get();
                // $nilai_tertinggi = NilaiNormalisasi::where('id_siswa',$siswa->id)->max('nilai');
                // $datanilaiTinggi = NilaiNormalisasi::where('id_siswa',$siswa->id)->where('nilai',$nilai_tertinggi)->first();

                foreach($list_tertinggi as $tertinggi){
                        DB::table('rating_tertinggi_temp')->insert([
                            'id_siswa' => $siswa->id,
                            'id_ekskul' => $tertinggi->id_ekskul,
                            'nilai' => $tertinggi->nilai
                        ]);
                }
                   
                   
            }

       return redirect('rule/perangkingan/siswa/maxawal');
       
         
    }

    function nilaiMaxAwal(){
        $list_rank_sementara =  DB::table('rating_tertinggi_temp')->orderBy('nilai','desc')->get();
            foreach($list_rank_sementara as $sementara){

                    $data_normal = NilaiNormalisasi::where('id_siswa',$sementara->id_siswa)->where('id_ekskul',$sementara->id_ekskul)->first();
                    $cekRating = RatingTertinggi::where('id_ekskul',$sementara->id_ekskul)->count();
                    $data_kuota = ekskul::where('id',$sementara->id_ekskul)->first();

                    if($cekRating >= $data_kuota->kuota){
                        $data_normal->status_kuota = '1';
                        $data_normal->save();
                        // $nilaiMax = NilaiNormalisasi::where('id_siswa',$sementara->id_siswa)->where('status_kuota','0')->max('nilai');
                        $dataMax = NilaiNormalisasi::where('id_siswa',$sementara->id_siswa)->where('nilai',$nilaiMax)->where('status_kuota','0')->orderBy('nilai','desc')->limit(3)->get();
                        foreach($dataMax as $data){
                            $rating = new RatingTertinggi;
                            $rating->id_siswa = $sementara->id_siswa;
                            $rating->id_ekskul = $data->id_ekskul;
                            $rating->peroleh_nilai = $data->nilai;
                            $rating->save();
                        }
                    }else{
                            $rating = new RatingTertinggi;
                            $rating->id_siswa = $sementara->id_siswa;
                            $rating->id_ekskul = $sementara->id_ekskul;
                            $rating->peroleh_nilai = $sementara->nilai;
                            $rating->save();
                        
                    }
         
            }
        return back()->with('berhasil','data sudah selesai di cek');
    }
    function nilaiMaxiAkhir(){
        
        $list_ekskul = $data['list_ekskul'] = ekskul::all();
            foreach($list_ekskul as $ekskul){
                $ekskul->ranking_siswa = RatingTertinggi::where('id_ekskul',$ekskul->id)->orderBy('peroleh_nilai','desc')->get();
            }
           
        return view('ekskul.data_ranking',$data);

    }
    function resetRank(){
       RatingTertinggi::truncate();
       DB::table('rating_tertinggi_temp')->truncate();
        
        return redirect('rule/perangkingan');
    }
    //
}
