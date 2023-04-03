<?php
// PDO  이용해서 데이터베이스 가져오기
// PHP DATA OBJECT
// 확장성 용이, 쿼리만 조금 바꿔주면 다른곳에서도 쉽게 사용 가능

//php.ini 에서 extension=pdo_mysql 주석제거

$db_host = "localhost"; // 원래는 아이피가 들어감
$db_user = "root";      // user
$db_password = "root506";   //password
$db_name = "employees";     // DB name
$db_charset = "utf8mb4";    //charset
$db_dns = "mysql:host=".$db_host.";dbname=".$db_name.";charset=".$db_charset;
$db_option = array(
                PDO::ATTR_EMULATE_PREPARES      => false     
                //                      기본적으로 true로 설정되어 있음      false=>데이터 베이스에 있는 prepared statement기능을 사용하겠다고 설정.
                //                      보통 false로 설정 많이 함
                , PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION
                //PDO 클래스를 사용해서 에러가 발생했을 때 어떤 경우에 스로우 해줄지 설정
                // 여기서는 PDO Exception을 Throws 하도록 설정
                , PDO::ATTR_DEFAULT_FETCH_MODE  => PDO::FETCH_ASSOC  //  연상배열로 FETCH 하도록 설정 
                );  

// PDO class로 DB 연동
$obj_conn = new PDO( $db_dns, $db_user, $db_password, $db_option);


// 사번 10001, 10002의 현재 연봉과 사번, 생일을 가져오는 쿼리를 작성해 주세요
$sql =  
    // " SELECT emp.emp_no, sal.salary, emp.birth_date
    // FROM employees emp
    // INNER JOIN salaries sal
    //     ON emp.emp_no = sal.emp_no
    // WHERE ( emp.emp_no = 10001
    //     OR emp.emp_no = 10002 )
    //     AND sal.to_date>=NOW() ";

    " SELECT emp.emp_no, sal.salary, emp.birth_date
    FROM employees emp
    INNER JOIN salaries sal
        ON emp.emp_no = sal.emp_no
    WHERE ( emp.emp_no = :emp_no1
        OR emp.emp_no = :emp_no2 )
        AND sal.to_date>=NOW() ";

$arr_prepare = 
    array(
        ":emp_no1" => 10001
        ,":emp_no2"=> 10002
    );

//prepared statement
$stmt = $obj_conn->prepare( $sql );     // Prepare Statement를 생성
$stmt->execute( $arr_prepare );         // 쿼리 실행

$result = $stmt->fetchAll();            // 쿼리 결과를 fetch
// var_dump( $result );

// $result = array(
//             array("emp_no" => 10001
//                 ,"salary" => 88958
//                 ,"birth_date" => "1953-09-02"
//                 )
//             ,array("emp_no" => 10002
//             ,"salary" => 872527
//             ,"birth_date" => "1964-06-02"
//             )
// )

foreach($result as $val)
{
    echo $val["emp_no"]."\n";
}

// foreach($result as $val)
// {
//     echo "emp_no"." => ".$val["emp_no"]."\n"
//     ."salary"." => ".$val["salary"]."\n"
//     ."birth_date"." => ".$val["birth_date"]."\n";
// }



// for($i=0;$i<=1;$i++)
// {
//     print_r($result[$i]);
// }



// for($i=0;$i<=1;$i++)
// {
//     echo $result[$i]["emp_no"]."\n"
//     .$result[$i]["salary"]."\n"
//     .$result[$i]["birth_date"]."\n";
// }





// 종료
$obj_conn=null;


?>
