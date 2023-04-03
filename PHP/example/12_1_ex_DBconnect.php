<?php
// DB연결

$dbc = mysqli_connect( "localhost","root","root506","employees",3306);
// var_dump($dbc);


//  쿼리 요청
$result_query = mysqli_query($dbc,"SELECT emp_no,first_name FROM employees LIMIT 5;"); // public $num_rows => int(300025)



// mysqli_fetch_row : 키값이 인덱스 값
$result_row = mysqli_fetch_row($result_query);
// var_dump($result_row);

// foreach($result_query as $value)
// {
// print_r($value);
// }

// while($temp_row = mysqli_fetch_row($result_query))
// {
//     var_dump($temp_row);
// }


// associative : 키값을 연상배열로 가져오고 데이터베이스의 컬럼명이다. 
// while( $temp_row = mysqli_fetch_assoc($result_query))
// {
//     var_dump($temp_row["first_name"]);
// }

//  php8.2.4 php.ini파일에서  extension=mysqli 주석제거
// //  employees랑 3306안적혀 있으면 어떤 데이터베이스에 접속하는지 잡아주지 못함 


mysqli_close($dbc);                 // 이것도 무조건 닫아줘야함
?>

