<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class loginController extends Controller
{
    public function index()
    {

        return view('login');
    }

    public function auth(Request $request)
    {
        $this->validate(
            $request,

            ['username' => 'required'],

            ['password' => 'required']

        );

        $user = $request->input('username');
        $pass = md5($request->input('password'));

        $users = DB::table('users')->where(['username' => $user, 'password' => $pass])->get();

        if (count($users) > 0) {

            // Session::put('login', 'Selamat anda berhasil login');
            return redirect('/home')->with('login', 'Selamat anda berhasil login');
        } else {

            return redirect('/')->with('failed', 'Login gagal');
        }
    }


    public function logout()
    {
        return redirect('/');
    }
}
