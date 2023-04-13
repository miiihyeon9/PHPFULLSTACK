<?php
// ㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡ
// 함수명 : db_conn
// 기능 : MariaDB연결
// 파라미터 : 
// 리턴값 : 
//ㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡ
function db_conn()
{
    $db_host = "localhost"; // 호스트 주소
    $db_name = "board";     // 데이터베이스 이름 
    $db_user = "root";      // 데이터베이스 아이디
    $db_password = "root506";   // 데이터베이스 비밀번호
    $db_charset = "utf8mb4";
    $db_con_ser = "mysql:host=".$db_host.";dbname=".$db_name.";charset=".$db_charset;
    $pdo_option = 
                array(
                    PDO::ATTR_EMULATE_PREPARES      =>false
                    ,PDO::ATTR_ERRMODE              => PDO::ERRMODE_EXCEPTION
                    ,PDO::ATTR_DEFAULT_FETCH_MODE   => PDO::FETCH_ASSOC
                );

                
    $obj_con = null;
    try{
        $obj_con = new PDO($db_con_ser.$db_user.$db_password.$pdo_option);
        $obj_con->setAtrribute();
        echo "연결 성공";
    }
    catch(Exception $e)
    {
        $e->getMessage();
    }
    finally
    {
    $obj_con = null;
    }
}


//ㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡ
// 함수명 : select_board_info
// 기능 : board_info정보 가져오기 
// 파라미터
// 리턴값   Array $result
//ㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡ
function select_board_info()
{
    $sql = " SELECT "
        ." board_no, board_title, board_write_date "
        ." FROM "
        ." board_info "
        ." WHERE "
        ." board_del_flg = '0' "
        ." ; "
        ;

    try
    {
        $obj_con = null;
        $arr_prepare = array();
        $stmt = $obj_conn->prepare( $sql );
        $stmt->execute( $arr_prepare );
        $result = $stmt->fetchAll();
        return $result;
    }
    catch( Exception $e)
    {
        $e->getMessage();
    }
    finally
    {
        $obj_con=null;
    }
}

db_conn();




?>