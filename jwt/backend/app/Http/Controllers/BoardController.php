<?php

namespace App\Http\Controllers;

use App\Lib\JWT;
use Illuminate\Http\Request;

class BoardController extends Controller
{
    protected $obj_jwt;

    public function __construct()
    {
        $this->obj_jwt = new JWT();
    }

    function getList(Request $req) {
        $token = $req->header('Authorization');

        $res = [
            'errflg' => '0'
            ,'msg'   => 'OK'
        ];
        // $status = 200;

        if( !($this->obj_jwt->chkToken($token)) ){
            $res = [
                'errflg' => '1',
                'msg'    => 'fail'
            ];
            // $status = 401;
        }

        $data = ["data"=>"데이터"];

        return response()->json($data, 200);
    }
}
