<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Kota;
use App\Models\Provinsi;

class KotaController extends Controller
{
    public function kota(){
        $kota = DB::table('kota')->where('deleted_at',null)->get();
    
        return view('table.kota',['kota' => $kota]);
}

public function edit($id){
  $kota = DB::table('kota')->where('id_kota',$id)->get(); 
  return view('form edit.kotaedit',['kota' => $kota]);


}   

public function update(Request $request){

    DB::table('kota')->where('id_kota',$request->id)->update([
        'id_provinsi' => $request-> id_provinsi,
        'nama_kota' => $request->nama_kota
    ]);

    return redirect('/kota');
    }



    public function tambah(){
            $provinsi = provinsi::all();
            return view('Form tambah.kotaadd', compact('provinsi'));
        }
    
        public function store(Request $request){
            $kota = new kota; 
            $kota->id_kota = $request->id_kota;
            $kota->id_provinsi = $request->id_provinsi;
            $kota->nama_kota = $request->nama_kota;

            if($kota->save()){
                echo "
                <script>
                    alert('Data berhasil ditambahkan');
                    document.location.href='/kota'
                </script>
                ";
            }else{
                echo "
                <script>
                    alert('Data gagal ditambahkan');
                    document.location.href='Form tambah/kotaadd'
                </script>
                ";
            }
    
        }



// public function delete($id){

//     DB::table('kota')->where('id_kota',$id_kota)->delete();
// return redirect('kota');
// }
public function delete($id){
    date_default_timezone_set('Asia/Jakarta');
    DB::table('kota')->where('id_kota',$id)->update([
        'DELETED_AT' => date('Y-m-d H:i:s')
    ]);
    
    return redirect('/kota');
}
        
    }
    
