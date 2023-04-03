<?php
//ㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡ
// 함수명   : my_db_conn
// 기능     : DB Connect
// 파라미터  : PDO   &$param_conn
// 리턴     : 없음 
//ㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡ

function my_db_conn( &$param_conn )
{
    $db_host = "localhost"; // 원래는 아이피가 들어감
    $db_user = "root";      // user
    $db_password = "root506";   //password
    $db_name = "employees";     // DB name
    $db_charset = "utf8mb4";    //charset
    $db_dns = "mysql:host=".$db_host.";dbname=".$db_name.";charset=".$db_charset;
    $db_option = array(
                PDO::ATTR_EMULATE_PREPARES      => false     
                , PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION
                , PDO::ATTR_DEFAULT_FETCH_MODE  => PDO::FETCH_ASSOC  //  연상배열로 FETCH 하도록 설정 
                );  

    // PDO class로 DB 연동
    $param_conn = new PDO( $db_dns, $db_user, $db_password, $db_option);
}

// $obj_conn = null;   // PDO Class

// // DB Connect
// my_db_conn($obj_conn);  

// //sql 쿼리 

// $sql = 
//     " SELECT "
//     ." * "
//     ." FROM employees "
//     ."LIMIT :limit_start ";

// $arr_prepare = 
//             array(
//                 ":limit_start"=>5
//             );


$stmt = $obj_conn->prepare( $sql );
$stmt->execute( $arr_prepare );

$result = $stmt->fetchAll();



// var_dump($result);











$obj_conn = null;       //DB Connection 파기
?>