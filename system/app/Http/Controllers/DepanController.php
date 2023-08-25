<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ekskul;
use App\Models\siswa;
use App\Models\RatingTertinggi;

class DepanController extends Controller
{
    function index(){
        $data['siswa'] = siswa::count(); 
        $data['ekskul'] = ekskul::count();
        $data['minat'] = RatingTertinggi::count();
   
       
        return view('dashboard.index',$data);
    }
    //
  
}
