<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user()
    {
        $usr = DB::table('user')->get();

        return view('table.user',['user' => $usr]);
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

    public function useredit($id_user){

        $user = DB::table('user')->where('id_user',$id_user)->get(); 

        return view('form edit.useredit',['user' => $user]);
    }

    public function userupdate(Request $request)
{
    DB::table('user')->where('id_user',$request->id_user)->update([
        'nama_user' => $request->nama_user,
        'password' => $request->password,
        'email' => $request->email,
        'tgl_lahir' => $request->tgl_lahir,
    ]);
    return redirect('user');
}


}
