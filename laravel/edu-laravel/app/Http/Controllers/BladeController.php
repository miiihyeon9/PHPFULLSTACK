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
            ,'number' => '01065854076'
        ];
        $arr2 = [];
        return view('blade')->with('data',$arr)
                            ->with('data2',$arr2);
    }
}
