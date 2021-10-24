<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function kategori(){
        $kat = DB::table('kategori')->get();
    
        return view('table.kategori',['kategori' => $kat]);
}}
