<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeController extends Controller
{
    function index(){
        $arr = [
            'name'    => '김미현'
            ,'gender' => '여자'
            ,'birth'  => '19980809'
            ,'addr'   => '구미'
            ,'number' => '010-0000-0000'
        ];
        $arr2 = [];
        return view('blade')->with('data',$arr)
                            ->with('data2',$arr2);
    }
}
