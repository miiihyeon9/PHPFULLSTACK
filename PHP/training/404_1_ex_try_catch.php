<?php
include_once("../example/12_2_ex3_DBfunction.php");

// 아래 쿼리를 이용해서 DB접속 > DATA 획득 후 출력해 주세요
// $sql1 = " SELECET * FROM department ";
// $sql2 = " SELECET * FROM dept_manager ";

// try-catch로 에러 처리를 해 주세요
// 에러가 날 경우의 해당 에러메세지를 출력해 주세요.


// try
// {
//     $obj_conn = null;
//     my_db_conn( $obj_conn);
//     $sql1= " SELECET * FROM department ";
//     $stmt = $obj_conn->query( $sql1 );
//     $result = $stmt->fetchAll();
    
// }
// catch   ( Exception $e)
// {
//     echo "-------------------------\n";
    
//         echo "에러 발생\n";
//         echo $e->getMessage()."\n";
    
//     echo "-------------------------\n";
// }
// finally
// {
//     $obj_conn=null;
// }

// try
// {
//     $obj_conn = null;
//     my_db_conn( $obj_conn);
//     $sql2 = " SELECT * FROM dept_manager ";
//     $stmt = $obj_conn->query( $sql2 );
//     $result = $stmt->fetchAll();
// }
// catch   ( Exception $e)
// {
//     echo "-------------------------\n";
//         echo "에러 발생\n";
//         echo $e->getMessage()."\n";
//     echo "-------------------------\n";
    
// }
// finally
// {
//     echo "정상 종료";
//     $obj_conn=null;
    
// }






try

{
    $obj_conn = null;
    my_db_conn( $obj_conn);
    $sql1= " SELECT * FROM department ";
    $stmt1 = $obj_conn->query( $sql1 );
    $result1 = $stmt1->fetchAll();
    $sql2 = " SELECT * FROM dept_manager ";
    $stmt2 = $obj_conn->query( $sql2 );
    $result2 = $stmt2->fetchAll();
    echo "정상 종료\n";
}
catch   ( Exception $e )
{
    echo "-------------------------\n";
        echo "에러 발생\n";
        echo $e->getMessage()."\n";
    echo "-------------------------\n";
}
finally
{
    $obj_conn=null;
}








?>