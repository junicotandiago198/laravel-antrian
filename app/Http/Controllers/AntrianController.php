<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AntrianController extends Controller
{
    //
    public function index()
    {
        $data['antri_cs'] = 0;
        $data['antri_teller1'] = 0;
        $data['antri_teller2'] = 0;
        $data['antri'] = '-';
        return view('antrian',$data);
    }

    public function antri_cs($cs,$teller1,$teller2)
    {
        $data['antrian_cs'] = $cs+1;
        $data['antrian_teller1'] = $teller1;
        $data['antrian_teller2'] = $teller2;
        $data['antri'] = "cs";
        return view('antrian', $data);
    }
}