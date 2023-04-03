<?php

// 아래 쿼리로 결과를 출력하는 프로그램을 만들어 주세요.

$dbc = mysqli_connect( "localhost","root","root506","employees",3306);

//--------------------------------------------------------
// to_date : "9999 -01 -01"
//salary : 50000
//limit :5

// $date = 99990101;
// $salary = 50000;
// $limit=5;
// $result = null;
// $stmt = $dbc->stmt_init();
// $stmt->prepare("SELECT emp_no, salary FROM salaries WHERE to_date = date(?) AND salary>= ? ORDER BY salary DESC LIMIT ?");
// $stmt->bind_param("iii",$date,$salary,$limit);
// $stmt->execute();


$date = "9999-01-01";
$salary = 50000;
$limit=5;
$stmt = $dbc->stmt_init();  // statement 셋팅     statement : 쿼리를 나타내는 객체
//              : mysql_stmt_prepare를 사용하기 위한 객체를 초기화 하고 리턴해 준다.
//                                                  객체 : 컴퓨터 프로그래밍에서 특정한 형태를 가진 데이터와 그 데이터를 처리하는 동작들을 하나로 묶어 놓은 것
$stmt->prepare(" SELECT emp_no, salary FROM salaries WHERE to_date = ? AND salary>= ? ORDER BY salary DESC LIMIT ? ");// db에 질의할 쿼리 작성
$stmt->bind_param("sii",$date,$salary,$limit);  // prepared statement 값을 실행 
// bind_param에 올 수 있는 데이터 타입
//       i : 정수형(integer)
//       d : 부동 소수점형(double)   (실수를 표현하는 방법)
//       s : 문자열(string)
//       b : BLOB(binary data)(0과 1의 비트로 이루어진 데이터 보통 비디오, 이미지 등에 사용)

$stmt->execute();       // DB 쿼리 질의 실행



$result=$stmt->get_result();    //  DB 쿼리를 질의한 결과를 저장

while($row = $result->fetch_assoc())
// fetch_assoc() : PDOStatement 객체에서 한 행(row)을 연관 배열(associative array) 형태로 반환
// fetch_assoc() 함수 대신 fetch() 함수를 사용하면, 기본적으로 인덱스 배열 형태로 반환됩니다.
// 따라서, 필드 이름으로 데이터를 접근하기 위해서는 fetch_assoc() 함수를 사용해야 합니다.
{
    echo $row["emp_no"]." : ".$row["salary"]."\n";
}






mysqli_close($dbc);     
//  $dbc->close();


?>