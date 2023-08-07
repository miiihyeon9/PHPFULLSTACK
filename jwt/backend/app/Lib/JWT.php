<?php

namespace App\Lib;

use Exception;
use Throwable;
use Illuminate\Support\Facades\Log;

class JWT{
    protected $alg = 'SHA256';
    protected $secret_key = 'php506';

    // 에러 메세지(보통은 설정 파일에 작성)
    protected $error_base =[
        "E01"   =>  "Not set Token"
        ,"E02"  =>  "Unknown form Token"
        ,"E03"  =>  "Unauthorization Token"
        ,"E04"  =>  "Expired Token"
        ,"E99"  =>  "System Error"
    ];
    /* 
        JWT 생성
    */
    public function createJWT(Array $data){
        Log::debug("------createJWT start---------");

        // header 작성
        $header_json = json_encode([
            'alg' => $this->alg,
            'typ' => 'JWT'
        ]);
        $header = base64_encode($header_json);
        Log::debug("-------header : ". $header);

        // payload 작성
        $iat = time();
        $exp = $iat + 60;
        $payload_json = json_encode([
            'id'    => $data['id']
            ,'iat'  => $iat
            ,'exp'  => $exp
        ]);
        $payload = base64_encode($payload_json);
        Log::debug("-------payload : ". $payload);

        //signature 작성
        $signature = hash($this->alg, $header.$payload.$this->secret_key);
        Log::debug("-------signature : ". $signature);

        Log::debug("------createJWT End---------");
        return base64_encode($header.".".$payload.".".$signature);
    }

    public function chkToken( $token ){
        Log::debug("------chkToken Start---------");
        Log::debug("token : ". $token);
        
        try {
            
            [
                "errflg"    =>  "1"
                ,"error_info"   =>  [
                    "code"  =>  "E01"
                    ,"msg"  =>  "Not set Token"
                    ]
            ];
                
                if( $token === ""){
                    throw new Exception("E01");
            }
            
            
            
            // 토큰 디코딩
            $de_token = base64_decode($token);
            
            // 토큰을 분리
            $arr_token = explode(".", $token);

            // 토큰 형태 체크
            if( count($arr_token) !== 3 ){
                throw new Exception("E02");
            }
            $header = $arr_token[0];
            $payload = $arr_token[1];
            $signature = $arr_token[2];


            // 토큰 유효기간 확인
            $arr_payload = json_decode(base64_decode($payload));
            if(time() > $arr_payload->exp){
                throw new Exception('E04');
            }

            // 검증용 signature 생성
            Log::debug("signature : ".$signature);
            $verify = hash($this->alg, $header.$payload.$this->secret_key);

            Log::debug("verify : ".$verify);
            if($signature !== $verify){
                throw new Exception('E03');
            }
        } catch (Throwable $th) { // Throwable : php 7버전 이상부터 사용 가능
            [
                "errflg"    =>  "1"
                ,"error_info"   =>  [
                    "code"  =>  "E01"
                    ,"msg"  =>  "Not set Token"
                    ]
            ];

            // 예외 코드 확인
            $code = array_key_exists($th->getMessage(), $this->error_base) ? $th->getMessage() : "E99";

            $error_info = [
                "code"  =>  $th->getMessage()
                ,"msg"  =>  $this->error_base[$th->getMessage()]
            ];

            Log::debug("Error : ". $th->getMessage());
            return false;
        }

        Log::debug("------chkToken End---------");
        return true;
    }

    /**
     * 메소드명     : create_error_info
     * 기능        : 에러정보 배열 작성
     * 파라미터
     * 리턴 : string ""  / "OK"
     */
    public function create_error_info($error_code){
        $code = array_key_exists($error_code, $this->error_base) ? $error_code : "E99";

        $error_info = [
            "code"  =>  $code
            ,"msg"  =>  $this->error_base[$code]
        ];
        Log::debug("Eroor : ".$code);
        return $error_info;
    }
}
?>