<?php
include_once("./connect.php");

$obj_conn = null;
my_db_conn($obj_conn);


$sql = 
    " INSERT INTO "
    ." todolist"
    ." ( "
    ." list_no "
    ." , todo "
    ." , details "
    ." , create_date "
    ." , modify_date "
    ." , complete_todo "
    ." ) "
    ." VALUES "
    ." ( "
    ." :list_no "
    ." , :todo "
    ." , :details "
    ." , :create_date "
    ." , :modify_date "
    ." , :complete_todo "
    ." ) " ;
    
$arr_prepare = 
        array(
            ":list_no"=> 5
            ,":todo"=> "책읽기"
            ,":details"=>""
            ,":create_date"=>"20230404"
            ,":modify_date"=>"00000000"
            ,"complete_todo"=>"1"
        );

$stmt = $obj_conn->prepare( $sql );
$stmt->execute( $arr_prepare );

$result = $stmt->fetchAll();

var_dump($result);









            $obj_conn = null;       //DB Connection 파기

?>