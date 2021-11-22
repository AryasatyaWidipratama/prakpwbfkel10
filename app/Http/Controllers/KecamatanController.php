<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Kota;
use App\Models\Kecamatan;

class KecamatanController extends Controller
{
    public function kecamatan(){
        $kecamatan = DB::table('kecamatan')->where('deleted_at',null)->get();
    
        return view('table.kecamatan',['kecamatan' => $kecamatan]);
}

public function edit($id){
    $kecamatan = DB::table('kecamatan')->where('id_kecamatan',$id)->get(); 
    return view('form edit.kecamatanedit',['kecamatan' => $kecamatan]);
  
  
  }   
  
  public function update(Request $request){
  
      DB::table('kecamatan')->where('id_kecamatan',$request->id)->update([
          'id_kota' => $request-> id_kota,
          'nama_kecamatan' => $request->nama_kecamatan
      ]);
  
      return redirect('/kecamatan');
      }
  
  
  
      public function tambah(){
              $kota = kota::all();
              return view('Form tambah.kecamatanadd', compact('kota'));
          }
      
          public function store(Request $request){
              $kecamatan = new kecamatan; 
              $kecamatan->id_kota = $request->id_kota;
              $kecamatan->nama_kecamatan = $request->nama_kecamatan;
  
              if($kecamatan->save()){
                  echo "
                  <script>
                      alert('Data berhasil ditambahkan');
                      document.location.href='/kecamatan'
                  </script>
                  ";
              }else{
                  echo "
                  <script>
                      alert('Data gagal ditambahkan');
                      document.location.href='Form tambah/kecamatanadd'
                  </script>
                  ";
              }
      
          }

          public function delete($id){
            date_default_timezone_set('Asia/Jakarta');
            DB::table('kecamatan')->where('id_kecamatan',$id)->update([
                'DELETED_AT' => date('Y-m-d H:i:s')
            ]);
            
            return redirect('/kecamatan');
        }
  

}