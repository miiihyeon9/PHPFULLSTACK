<?php

$dbc = mysqli_connect( "localhost","root","root506","employees",3306);
// 사번이 10005 이하의 사원의 사번, 이름 (성이름), 성별, 생일

$result_query = mysqli_query($dbc
                                ,"SELECT emp_no,CONCAT(first_name,' ',last_name) name,gender,birth_date 
                                FROM employees 
                                WHERE emp_no<=1000;");



// while($temp_row=mysqli_fetch_assoc($result_query))
// {
//     echo $str_temp = implode(" ",$temp_row)."\n";
// }

// while($temp_row=mysqli_fetch_assoc($result_query))
// {
//     var_dump($temp_row);
// }

// if($temp_row==null){
//     echo "데이터가 없습니다.";
// }else
//     {
//         while($temp_row=mysqli_fetch_assoc($result_query))
//         {
//         echo $str_temp = implode(" ",$temp_row)."\n";
//         }
//     }    

//  mysqli_num_rows : SELECT 문에 대한 결과 집합에서 행(row)의 수(레코드)를 반환하는 함수
// if(mysqli_num_rows($result_query)===0)
// {
//     echo "데이터가 0건 입니다.";
//     while($temp_row=mysqli_fetch_assoc($result_query))
//         {
//         echo $str_temp = implode(" ",$temp_row)."\n";
//         }
// }




//
// $flg_cnt = false;
// $temp_row=mysqli_fetch_assoc($result_query);
// // var_dump($temp_row);                            // null

// while($temp_row=mysqli_fetch_assoc($result_query))
// {
//     echo $str_temp = implode(" ",$temp_row)."\n";
//     $flg_cnt = true;
// }
// // 변수 앞에 !사용하면 해당 변수의 bool값을 반대로 뒤집는다. 
// // true를 false로 false는 true로
// if(!$flg_cnt ){                                 // $flg_cnt == 0 이랑 같음
//     echo "데이터가 0건 입니다.";
// } 


// mysqli_fetch_assoc($result_query);
// foreach($result_query as $key =>$value)
// {
//     print_r($value);
// }


// $temp_row=mysqli_fetch_row($result_query);

// echo $temp_row[$i];
// if()

// print_r($temp_row);
// while($temp_row=mysqli_fetch_row($result_query)){
    
//     for($i=0;$i<count($temp_row);$i++){
//         echo $temp_row[$i]." \n ";
//     }
// }


// while($temp_row=mysqli_fetch_row($result_query))
// {
//     for($i=0;$i<count($temp_row);$i++){
//                 echo $temp_row[$i]." \n ";
//     }
// }


// ----------------------------------------------------------------------------
// 사번이 10005 이하의 사원의 사번, 이름 (성이름), 성별, 생일

// $dbc = mysqli_connect( "localhost","root","root506","employees",3306);
// $sql = "SELECT emp_no,CONCAT(first_name,' ',last_name) name,gender,birth_date 
//         FROM employees 
//         WHERE emp_no<=10005;";   

// $result_query = mysqli_query($dbc ,$sql);

// while($temp_row = mysqli_fetch_assoc($result_query))
// {
//     echo $str_temp = implode(" ",$temp_row)."\n";
// }











mysqli_close($dbc);     


?>