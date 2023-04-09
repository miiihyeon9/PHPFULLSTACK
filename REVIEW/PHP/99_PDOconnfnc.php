<?php

function my_db_conn( &$param_conn )
{
    $db_host = "localhost"; // 원래는 아이피가 들어감
    $db_user = "root";      // user
    $db_password = "0809";   //password
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


?>