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

}
