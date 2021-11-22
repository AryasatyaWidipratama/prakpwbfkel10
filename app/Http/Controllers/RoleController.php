<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    public function role(){
        $role = DB::table('role')->where('deleted_at',null)->get();

        return view('table.role',['role' => $role]);
    }

    public function edit($id){
     
        $role= DB::table('role')->where('id_role',$id)->get(); 
 
        return view('form edit.roleedit',['role' => $role]);
      
      
      }   

      public function update(Request $request){
        DB::table('role')->where('id_role',$request->id)->update([
            'role' => $request->role
        ]);

        return redirect('/role');
        }


        public function tambah(){

            return view('form tambah.roleadd');
        }
    
        public function store(Request $request)
        {
            DB::table('role')->insert([
                'role' => $request->role,
            ]);
            return redirect('role');
        }

        public function delete($id){
            date_default_timezone_set('Asia/Jakarta');
            DB::table('role')->where('id_role',$id)->update([
                'DELETED_AT' => date('Y-m-d H:i:s')
            ]);
            
            return redirect('/role');
        }
    }

