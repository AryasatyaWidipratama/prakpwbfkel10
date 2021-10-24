<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BencanaController extends Controller
{
    public function bencana(){
        $bencana = DB::table('bencana')->get();
    
        return view('table.bencana',['bencana' => $bencana]);
    }
}
