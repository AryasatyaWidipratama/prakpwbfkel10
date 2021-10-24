<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class KotaController extends Controller
{
    public function kota(){
        $kota = DB::table('kota')->get();
    
        return view('table.kota',['kota' => $kota]);
}}
