<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ekskul;
use App\Models\RatingTertinggi;

class landingController extends Controller
{
    function index(){
         $list_extra = $data['list_extra'] = ekskul::all();
         foreach ($list_extra as $extra) {
             $extra->juara = $extra->kuota - RatingTertinggi::where('id_ekskul',$extra->id)->count();
         }
        return view('landing.index',$data); 
    }
}
