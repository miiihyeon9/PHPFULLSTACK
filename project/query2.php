<?php
include_once("./connect.php");
$obj_conn = null;
my_db_conn($obj_conn);

$complete_sql = 
    " SELECT "
    ." *"
    ." FROM "
    ." todolist "
    ." WHERE "
    ." complete_todo = "
    ."'1'"
    ;
$complete_stmt = $obj_conn->query( $complete_sql );
$complete_stmt->execute();
$complete_result = $complete_stmt->fetchAll();

//total
$total_sql = 
    " SELECT "
    ." *"
    ." FROM "
    ." todolist "
    ;

$total_stmt = $obj_conn->query( $total_sql );
$total_stmt->execute();
$total_result = $total_stmt->fetchAll();


$percentage = (count($complete_result)/count($total_result))*100;

echo $percentage."%";


$obj_conn = null;       //DB Connection 파기
?>