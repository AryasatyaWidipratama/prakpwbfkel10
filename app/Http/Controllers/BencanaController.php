<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Bencana;
use App\Models\Kategori;

class BencanaController extends Controller
{
    public function bencana(){
        $bencana = DB::table('bencana')->where('deleted_at',null)->get();
    
        return view('table.bencana',['bencana' => $bencana]);
    }

    public function edit($id){
        $bencana = DB::table('bencana')->where('id_bencana',$id)->get(); 
        return view('form edit.bencanaedit',['bencana' => $bencana]);
      
      
      }   
      
      public function update(Request $request){
      
          DB::table('bencana')->where('id_bencana',$request->id)->update([
              'id_kategoribencana' => $request-> id_kategoribencana,
              'nama_bencana' => $request->nama_bencana
          ]);
      
          return redirect('/bencana');
          }
      
      
      
          public function tambah(){
                  $kategori = kategori::all();
                  return view('Form tambah.bencanaadd', compact('kategori'));
              }
          
              public function store(Request $request){
                  $bencana = new bencana; 
                  $bencana->id_kategoribencana = $request->id_kategoribencana;
                  $bencana->nama_bencana = $request->nama_bencana;
      
                  if($bencana->save()){
                      echo "
                      <script>
                          alert('Data berhasil ditambahkan');
                          document.location.href='/bencana'
                      </script>
                      ";
                  }else{
                      echo "
                      <script>
                          alert('Data gagal ditambahkan');
                          document.location.href='Form tambah/bencanaadd'
                      </script>
                      ";
                  }
          
              }
    
              public function delete($id){
                date_default_timezone_set('Asia/Jakarta');
                DB::table('bencana')->where('id_bencana',$id)->update([
                    'DELETED_AT' => date('Y-m-d H:i:s')
                ]);
                
                return redirect('/bencana');
            }
      

}
