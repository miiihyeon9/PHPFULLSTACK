<?php
$dbc = mysqli_connect( "localhost","root","root506","employees",3306);

$i1 = "F";
$i2 = 10010;
$i = 5;

$result = null;


//prepared statement
$stmt = $dbc->stmt_init(); // statement를 셋팅해준다. 
$stmt-> prepare(
        " SELECT emp_no, CONCAT(first_name,' ',last_name) fullname
        FROM employees
        WHERE gender = ? AND emp_no<= ?
        LIMIT ? ");
    
$stmt->bind_param("sii",$i1,$i2,$i);    // prepare 실행
$stmt->execute();                       // 쿼리 질의 실행

// 질의 결과를 지정한 변수에 저장하고 사용
// $stmt->bind_result( $col1,$col2 ); // 질의 결과를 아규먼트에 저장
// $stmt->fetch(); // bind_result 에 저장한 아규먼트를 저장

// var_dump($col1,$col2);

$result = $stmt->get_result();      //질의 결과를 저장




// var_dump($result);
while($row =$result->fetch_assoc())
// 연상배열로 나타냄
{
    echo $row["emp_no"]." => ".$row["fullname"]."\n";
}







?>