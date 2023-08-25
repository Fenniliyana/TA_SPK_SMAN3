<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiNormalisasi extends Model
{
    protected $table = 'nilai_ternormalisasi';
    use HasFactory;
    
    function Siswa(){
        return $this->belongsTo('App\Models\siswa', 'id_siswa');
    }
    function Ekskul(){
        return $this->belongsTo('App\Models\ekskul', 'id_ekskul');
    }
}
