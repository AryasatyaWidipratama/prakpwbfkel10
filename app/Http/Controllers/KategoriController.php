<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    public function kategori(){
        $kategori = DB::table('kategori')->where('deleted_at',null)->get();
    
        return view('table.kategori',['kategori' => $kategori]);
}
public function edit($id){
    // mengambil data siswa berdasarkan id yang dipilih
    $kategori = DB::table('kategori')->where('id_kategoribencana',$id)->get(); 
      
    // passing data siswa yang didapat ke view edit.blade.php 
    return view('form edit.kategoriedit',['kategori' => $kategori]);
  
  
  }   

  public function update(Request $request){
    // update data siswa
    DB::table('kategori')->where('id_kategoribencana',$request->id)->update([
        'kategori_bencana' => $request->kategori_bencana
    ]);

    // alihkan halaman ke halaman siswa
    return redirect('/kategori');
    }

    public function tambah(){
        return view('Form tambah.kategoriadd');
    }

    public function store(Request $request){
        DB::table('kategori')->insert([
            'kategori_bencana' => $request->kategori_bencana,
        ]);
        return redirect('kategori');
    }
    public function delete($id){
        date_default_timezone_set('Asia/Jakarta');
        DB::table('kategori')->where('id_kategoribencana',$id)->update([
            'DELETED_AT' => date('Y-m-d H:i:s')
        ]);
        
        return redirect('/kategori');
    }




}
