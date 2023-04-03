<?php


$dbc = mysqli_connect( "localhost","root","root506","employees",3306);


$i1 = "F";
$i2 = 10010;
$i=5;

$result = null;
// Prepared Statement : 
$stmt = $dbc->stmt_init();          // statement 셋팅asdf
$stmt->prepare("SELECT emp_no,first_name FROM employees WHERE gender = ? AND emp_no <= ? LIMIT ? "); // db에 질의할 쿼리 작성
$stmt->bind_param( "sii",$i1,$i2,$i3);   // Prepare 실행   
//                  i : int 
//                  s : str
//                  ?가 어떤 데이터 타입인지적는 곳 
$stmt->execute();           // DB의 쿼리 질의 실행 


//질의 결과를 우리가 지정한 변수에 담아 사용하는 방법
// $stmt->bind_result( $col1,$col2 );  //질의 결과를 각 아규먼트에 저장
                                                    // :$col1,$col2
// $stmt->fetch();         // bind_result에서 셋팅한 아규먼트에 값을 저장(한번 실행될때마다 한 레코드씩 저장)
// var_dump($col1,$col2);  


// 패치를 루프로 돌려서 모든 질의 결과를 가져오는 방법

// 질의 결과를 우리가 지정한 변수에 담아 사용하는 방법 ㅡㅡㅡㅡㅡ 

// while($stmt->fetch())
// {
//     echo "$col1 $col2\n";
// }

// 연상배열로 가져오는 방법

$result = $stmt->get_result();      // 질의 결과를 저장


//연상 배열
while($row = $result->fetch_assoc())
{
    echo $row["emp_no"]." => ".$row["first_name"]."\n";
}










mysqli_close($dbc);     
?>