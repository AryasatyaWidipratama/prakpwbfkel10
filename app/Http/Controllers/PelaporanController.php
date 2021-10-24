<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PelaporanController extends Controller
{
    public function pelaporan(){
        $lapor = DB::table('pelaporan')->get();
    
        return view('table.pelaporan',['pelaporan' => $lapor]);
}}
