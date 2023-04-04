<?php
include_once("./12_2_ex3_DBfunction.php");


// try-catch    : 에러처리를 하기위한 문법
// try                         
// {
// // code...                      //  우리가 실행하고 싶은 소스코드를 작성            
// } 
// catch ( Exception $e )    
// {
//     //throw $th;            //  에러가 발생했을 때 실행되는 소스코드를 작성
// }
// finally                 
// {
//                          //      정상처리 또는 에러처리 시에 무조건 실행되는 소스코드를 작성
// }


try
{
    $obj_conn = null;
    my_db_conn( $obj_conn );
    $sql = " SELEC * FROM employees WHERE emp_no = 100000 ";
    $stmt = $obj_conn->query( $sql );
    $result = $stmt->fetchALL();   
    
    if( count($result) === 0)
    {
        throw new Exception("E99");   //throw Exception : 에러를 강제로 일으키는 구문    
    }

    var_dump($result);
}
catch( Exception $e )
{
    echo "---------------------\n";
    if($e->getMessage() === "E99")
    {
        echo "데이터 0건\n";
    }
    else
    {
    echo "에러 발생\n";
    echo $e->getMessage()."\n"; 
    }
    echo "---------------------\n";
    // echo $e->getMessage();  //: 에러가 발생했을 때 어떤 에러가 나왔는지 개발자에게 보여줌

}
finally
{
    echo "Finally\n";
    $obj_conn = null;               // DB종료
}



echo "종료";

















?>