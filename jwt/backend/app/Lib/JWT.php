<?php

namespace App\Lib;

use Exception;
use Illuminate\Support\Facades\Log;
use Throwable;

class JWT {
    
    protected $alg="SHA256";
    protected $secret_key = 'php506';
    
    
    /*
        json
    
    */
    public function createJWT( array $data ){
        Log::debug('------------------- create JWT -------------------');

        // header
        $header_json = json_encode([
            'alt'   => $this->alg,
            'TYP'   => 'JWT'
        ]);
        $header = base64_encode($header_json);
        Log::debug("header : ".$header);


        //payload
        $iat = time();
        $exp = $iat + 60;
        $payload_json = json_encode([
            'id'     => $data['id'],
            'iat'    => $iat,
            'exp'    => $exp
        ]);
        $payload = base64_encode($payload_json);
        Log::debug("payload : ".$payload);

        // signature 작성
        $signature = hash($this->alg, $header.$payload.$this->secret_key);
        Log::debug("signature : ".$signature);

        Log::debug('------------------- create JWT end -------------------');
        return $header.".".$payload.".".$signature;
    }

    public function chkToken ($token){
        // aaa.bbb.ccc

        // $arr_token = explode(".", $token);

        // $header = $arr_token[0];
        // $payload = $arr_token[1];
        // $signature = $arr_token[2];

        // $verify = hash($this->alg, $header.$payload.$this->secret_key);

        // if($signature !== $verify){
        //     return false;
        // }

        // Log::debug('------------------- chkToken end -------------------');
        // return true;
        try{
            Log::debug('------------------- try start -------------------');
            $arr_token = explode(".", $token);

            $header = $arr_token[0];
            $payload = $arr_token[1];
            $signature = $arr_token[2];

            // 토큰 유효기간 확인
            $arr_payload = json_decode(base64_decode($payload));
            if( time() > $arr_payload->exp ){
                throw new Exception('exp is over');
            }

            // 검증용 signature 생성
            Log::debug('signature : '.$signature);
            $verify = hash($this->alg, $header.$payload.$this->secret_key);

            Log::debug('verify : '.$verify);

            if($signature !== $verify){
                throw new Exception('signiture error');
            }
            // if($signature !== $verify){
            //     throw new Throwable('signiture is different');
            // }
        // Exception은 크리티컬한 에러
        // }catch(Exception $e){
        // Throwable 에러가 발생하더라도 처리를 계속 할 수 있는 
        }catch(Throwable $th){
            // Log::debug('------------------- Error -------------------');
            // Log::debug('signiture Error',[$e->getMessage()]);
            Log::debug('ERROR : '.$th->getMessage());
            return false;
        }
        finally{
            Log::debug('------------------- chkToken end -------------------');
            
        }
        return true;





    }

    

}