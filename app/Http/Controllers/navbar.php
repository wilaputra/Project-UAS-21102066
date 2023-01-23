<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Uas;

class navbar extends Controller
{
     function komponenTBL(){
      $data = Uas::all();
      return view('home')->with([
         'data' => $data
     ]);
     }

     function daftar(){
      $data = Uas::komponens();
      return view('daftar')->with([
         'data' => $data
     ]);
     }
     

     function utama(){
      $data = Uas::all();
      return view('/utama')->with([
         'data' => $data
      ]);
     }

     function code(){
      return view('/code');
     }

     function alat(){
        $data = Uas::komponens();
        return view('alat')->with([
           'data' => $data
]);
     }
}
