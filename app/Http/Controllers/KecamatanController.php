<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class KecamatanController extends Controller
{
    public function kecamatan(){
        $kec = DB::table('kecamatan')->get();
    
        return view('table.kecamatan',['kecamatan' => $kec]);
}
}