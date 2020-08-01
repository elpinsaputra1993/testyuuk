<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
// use Yajra\DataTables\DataTables;

class studentController extends Controller
{
    //
    public function index()
    {

        $std = DB::table('bio')->where('flag_del', '0')->get();

        foreach ($std as $val) {
            $val->serial = Crypt::encrypt($val->id);
        }

        // echo "<pre>";

        // print_r($std);


        // echo "</pre>";
        // die();

        $data = [
            'list' => $std,
            'sch' => DB::table('bio')->get(),

        ];
        return view('students.index', $data);
    }

    public function store(Request $request)
    {

        $idx = $request->id;

        if (empty($idx)) {


            DB::table('bio')->insert([
                'name' => $request->name,
                'ktp' => $request->ktp,
                'address' => $request->address,
                'email' => $request->email,
                'phone' => $request->phone
            ]);
        } else {

            $idx = Crypt::decrypt($idx);
            DB::table('bio')->where('id', $idx)->update([
                'name' => $request->name,
                'ktp' => $request->ktp,
                'address' => $request->address,
                'email' => $request->email,
                'phone' => $request->phone
            ]);
        }

        return redirect('/student');
    }

    public function hapus($id)
    {
        // DB::table('students')->where('id', $id)->delete();
        $idx = Crypt::decrypt($id);
        DB::table('bio')->where('id', $idx)->update([
            'flag_del' => '1'

        ]);

        return redirect('/student');
    }

    public function edit($id)
    {
        $id = Crypt::decrypt($id);
        $student = DB::table('bio')->where('id', $id)->get();

        foreach ($student as $val) {
            $val->serial = Crypt::encrypt($val->id);
            // $val->serial = Crypt::encrypt($val->id);
        }

        return $student;
    }
    // public function alldata()
    // {
    //     $data = DB::table('students')->get();
    //     return Datatables::of($data)
    //         ->addColumn('action', function ($data) {
    //             return '<a onclick="showData(' . $data->id . ')" class="btn btn-sm btn-success">Detail</a>' . ' ' .
    //                 '<a onclick="editForm(' . $data->id . ')" class="btn btn-sm btn-info">Ubah</a>' . ' ' .
    //                 '<a onclick="deleteData(' . $data->id . ')" class="btn btn-sm btn-danger">Hapus</a>';
    //         })->make(true);
    // }
}
