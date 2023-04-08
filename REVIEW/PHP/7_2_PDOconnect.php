<?php

include_once("./99_PDOconnfnc.php");


$obj_conn=null;             // PDO class
my_db_conn($obj_conn);      // DB연동

// 쿼리 

// 현재 임금 젤 많은 순서 5위 까지 사번, 이름 , 임금 
// $sql = 
//     " SELECT emp.emp_no, CONCAT(emp.first_name,' ',emp.last_name) full_name, sal.salary
//     FROM employees emp
//     INNER JOIN salaries sal 
//         ON emp.emp_no = sal.emp_no
//     WHERE sal.to_date >= NOW()
//     ORDER BY sal.salary DESC LIMIT 5 ";
// $arr_prepare =
//         array(
            
//         );



$sql = 
    " SELECT emp.emp_no, CONCAT(emp.first_name,' ',emp.last_name) full_name, sal.salary
    FROM employees emp
    INNER JOIN salaries sal 
        ON emp.emp_no = sal.emp_no
    WHERE sal.to_date >= :to_date
// :다음에 _말고 .기호 사용x 
    ORDER BY sal.salary DESC LIMIT 5 ";
$arr_prepare =
        array( 
            ":to_date" => "9999-01-01"
            );

stmt($sql);


// $stmt = $obj_conn->prepare( $sql );
// $stmt->execute( $arr_prepare );
// $result = $stmt->fetchAll();



var_dump($result);



$obj_conn = null; 

?>