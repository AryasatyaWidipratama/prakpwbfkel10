<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Provinsi;

class ProvinsiController extends Controller
{
    public function provinsi(){
    $provinsi = DB::table('provinsi')->where('deleted_at',null)->get();

    return view('table.provinsi',['provinsi' => $provinsi]);

    }
    public function edit($id){
        // mengambil data siswa berdasarkan id yang dipilih
        $provinsi = DB::table('provinsi')->where('id_provinsi',$id)->get(); 
          
        // passing data siswa yang didapat ke view edit.blade.php 
        return view('form edit.provinsiedit',['provinsi' => $provinsi]);
      
      
      }   

      public function update(Request $request){
        // update data siswa
        DB::table('provinsi')->where('id_provinsi',$request->id)->update([
            'nama_provinsi' => $request->nama_provinsi
        ]);
    
        // alihkan halaman ke halaman siswa
        return redirect('/provinsi');
        }

        public function tambah(){
            return view('Form tambah.provinsiadd');
        }
    
        public function store(Request $request){
            $provinsi = new provinsi; 
            $provinsi->id_provinsi = $request->id_provinsi;
            $provinsi->nama_provinsi = $request->nama_provinsi;

            if($provinsi->save()){
                echo "
                <script>
                    alert('Data berhasil ditambahkan');
                    document.location.href='/provinsi'
                </script>
                ";
            }else{
                echo "
                <script>
                    alert('Data gagal ditambahkan');
                    document.location.href='Form tambah/provinsiadd'
                </script>
                ";
            }
    
        }

    // public function delete($id_provinsi){

    //     DB::table('provinsi')->where('id_provinsi',$id_provinsi)->softDeletes();
    // return redirect('provinsi');
    // }
    public function delete($id){
        date_default_timezone_set('Asia/Jakarta');
        DB::table('provinsi')->where('id_provinsi',$id)->update([
            'DELETED_AT' => date('Y-m-d H:i:s')
        ]);
        
        return redirect('/provinsi');
    }

}
