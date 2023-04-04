<?php
include_once("./connect.php");
$obj_conn = null;
my_db_conn($obj_conn);


// 완료한 todo 가져오기
$complete_sql = 
    " SELECT "
    ." * "
    ." FROM "
    ." todolist "
    ." WHERE "
    ." complete_todo = "
    ."'1'"
    ." AND "
    ." create_date = "
    ." :create_date "
    ;

$complete_arr_prepare = 
                    array(
                        ":create_date"=>"20230404"
                    );
$complete_stmt = $obj_conn->prepare( $complete_sql );
$complete_result = $complete_stmt->execute($complete_arr_prepare);
$complete_result = $complete_stmt->fetchAll();


//하루 todo 목록 가져오기 
    $total_sql = 
    " SELECT "
    ." * "
    ." FROM "
    ." todolist "
    ." WHERE "
    ." create_date = "
    ." :create_date ";


$total_arr_prepare =
        array(
            ":create_date"=>"2023-04-04"
        );

$total_stmt = $obj_conn->prepare( $total_sql );
$total_result = $total_stmt->execute( $total_arr_prepare );
$total_result = $total_stmt->fetchAll();





var_dump($complete_result);
echo "ㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡ";
var_dump($total_result);


// 백분율
$percentage = (count($complete_result)/count($total_result))*100;
echo $percentage."%";



$obj_conn = null;       //DB Connection 파기

?>