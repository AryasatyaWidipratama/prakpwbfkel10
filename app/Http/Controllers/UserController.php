<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function user()
    {
        $user = DB::table('user')->where('deleted_at',null)->get();

        return view('table.user',['user' => $user]);
    }

    public function useradd(){

        return view('form tambah.useradd');
    }

    public function userstore(Request $request)
    {
        DB::table('user')->insert([
            'nama_user' => $request->nama_user,
            'password' => $request->password,
            'email' => $request->email,
            'tgl_lahir' => $request->tgl_lahir,
        ]);
        return redirect('user');
    }

    public function edit($id){
        // mengambil data siswa berdasarkan id yang dipilih
        $user = DB::table('user')->where('id_user',$id)->get(); 
          
        // passing data siswa yang didapat ke view edit.blade.php 
        return view('form edit.useredit',['user' => $user]);
      
      
      }   

    public function update(Request $request)
{
    DB::table('user')->where('id_user',$request->id)->update([
        'nama_user' => $request->nama_user,
        'password' => $request->password,
        'email' => $request->email,
        'tgl_lahir' => $request->tgl_lahir
    ]);
    return redirect('/user');
}

public function delete($id){
    date_default_timezone_set('Asia/Jakarta');
    DB::table('user')->where('id_user',$id)->update([
        'DELETED_AT' => date('Y-m-d H:i:s')
    ]);
    
    return redirect('/user');
}


}
