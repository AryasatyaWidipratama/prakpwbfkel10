<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PelaporanController extends Controller
{
    public function pelaporan(){
        $lapor = DB::table('pelaporan')->get();
    
        return view('table.pelaporan',['pelaporan' => $lapor]);
}
public function delete($id_pelaporan){

    DB::table('pelaporan')->where('id_pelaporan',$id_pelaporan)->delete();
return redirect('pelaporan');
}

}
