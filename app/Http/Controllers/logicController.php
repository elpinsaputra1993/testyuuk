<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logicController extends Controller
{
    function index()
    {
        $pgr = [
            'view' => '',
            'nilai' => ''
        ];
        return view('logic.index', $pgr);
    }

    public function proses(Request $request)
    {

        $numb = $request->inputNumb;
        if (empty($numb)) {
            $pgr = [
                'view' => '',
                'nilai' => ''
            ];
        } else {

            $length = strlen($numb);
            $arr = str_split($numb);

            $view = [];

            $no = 0;

            for ($row = $no; $row < $length; $row++) {
                $temp = '';
                for ($cols = $row; $cols < $length; $cols++) {
                    if ($cols == $row) {
                        $temp .= $arr[$cols];
                    } else if ($row == $length - 1) {
                        $temp .= $arr[$cols];
                    } else {
                        $temp .= "0";
                    }
                    // echo $cols;
                }

                $no++;
                $view[] = $temp;
            }


            $pgr = [
                'view' => $view,
                'nilai' => $numb
            ];
        }
        return view('logic.index', $pgr);
    }
}
