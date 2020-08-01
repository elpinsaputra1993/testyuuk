<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class schoolfromController extends Controller
{
    public function index()
    {


        return view('students.schoolfrom');
    }

    public function store(Request $request)
    {

        DB::table('school')->insert([
            'name' => $request->name,
            'address' => $request->address,

        ]);

        return redirect('/student');
    }

    public function test()
    {


        $txt = "Ini dari function /// method test class schoolfromController";

        return $txt;
    }

    public function stringTest()
    {

        $catch = $this->test();

        return $catch;
    }
}
