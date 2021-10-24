<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function detail(){
        $detail = DB::table('detailkorban')->get();
    
        return view('table.detail',['detailkorban' => $detail]);
}}
