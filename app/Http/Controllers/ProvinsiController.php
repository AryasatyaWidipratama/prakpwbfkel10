<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProvinsiController extends Controller
{
    public function provinsi(){
    $prov = DB::table('provinsi')->get();

    return view('table.provinsi',['provinsi' => $prov]);

    }
}
