<?php

namespace App\Http\Controllers;

use App\Lib\JWT;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    protected $obj_jwt;

    public function __construct()
    {
        $this->obj_jwt = new JWT();
    }
    /*
        JWT토큰 생성
    */
    public function issueToken( Request $req ){
        Log::debug('------------------- issueToken Start -------------------');
        Log::debug('id',$req->only('id'));
        // 유효성 체크

        // DB에서 유저 검색 

        // JWT 생성
        $token = $this->obj_jwt->createJWT($req->only('id'));

        Log::debug('token : '.$token);
        Log::debug('------------------- issueToken End -------------------');

        $response = [
            'errflg'    => '0',
            'token'     => $token 
        ];

        return response(json_encode($response),200);
        // return response()->status(200);
    }


    /*
        토큰 검증용
    */
    public function chk( Request $req ){
        $token = $req->header('Authorization');
        $response = [
            'errflg'    => '0',
            'msg'     => 'OK'
        ];
        $status = 200;
        
        // $this->obj_jwt->chkToken($token); // true or false
        if( !($this->obj_jwt->chkToken($token)) ){
            $response = [
                'errflg'    => '1',
                'msg'     => 'token is invalid'
            ];
            $status = 401;
        }
        return response(json_encode($response),$status);
    }

}
