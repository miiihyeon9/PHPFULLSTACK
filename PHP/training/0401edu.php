<?php
// $i_ten = 10;
// $i_five = 5;
// $i_eight = 8;
// $i_three = 3; 


// $result = ($i_ten - $i_five + $i_eight) % $i_three;


// echo $result;
//----------------------------------------------------------------------------

// 삼항 연산자를 이용해서 짝수일 때는 "짝수"를 출력 
// 홀수 일때는 "홀수"를 출력하는 프로그램을 만들어 주세요.


// $i= 4;
// $i%2 === 0 ? $result= "짝수" : $result= "홀수" ;
// echo $result;

//----------------------------------------------------------------------------

// if문 

// if($i%2 === 0)
// {
//     echo "짝수";
// }else 
// {
//     echo "홀수";
// }


// $i =1;
// if($i==="1")
// {
//     echo "문자열 1 입니다.";
// }
// else if($i== 1)
// {
//     echo "숫자 1 입니다.";
// }
// else
// {
//     echo "1이 아닙니다. ";
// }


// 과목의 종류는 국어, 영어, 수학, 과학 
// 평균 점수가 60점 이상이고, 각 과목별 점수가 40점 이상일 때  "합격" 출력 
// 그 외는 "불합격" 출력하는 프로그램을 만들어 주세요

// $kor = 50;
// $eng = 100;
// $math = 30;
// $scien = 70;
// $avg = ($kor + $eng + $math +$scien)/4;

// if($avg>=60 && $kor>=40 && $eng>=40 && $math>=40 && $scien>=40)
// {
//     echo "합격";
// }
// else
// {
//     echo "불합격";
// }


// $subject = array("korean"=>50 , "english"=>100 , "math"=>80 , "scientist"=>70);
// $avg = ($subject["korean"] + $subject["english"] + $subject["math"] +$subject["scientist"])/count($subject);

// if(
//      $avg>=60 && $subject["korean"]>=40 && $subject["english"]>=40 
//      && $subject["math"]>=40 && $subject["scientist"]>=40)
// {
//     echo "합격";
// }
// else 
// {
//     echo "불합격";
// }

// 평균 점수가 60점 이상이거나 각 과목별 점수가 40점 이상일 때  "합격" 출력 
// 그 외는 "불합격" 출력하는 프로그램을 만들어 주세요


// if(
//     $avg>=60 || 
//     (
//         $kor>=40 && $eng>=40 && $math>=40 && $scien>=40
//     )
// )
// {
//     echo "합격";
// }
// else
// {
//     echo "불합격";
// }

// switch

// $str_loc에 지역명을 저장하고 , 서울은 "서울사람", 대구는 "대구사람", 부산은 "부산사람", 그 외는 "타지역 사람" 출력하는 프로그램을 switch문으로 작성해 주세요

// $str_loc = "부산";

// function location ($str_loc){
// switch ($str_loc) {
//     case "서울":
//         echo "서울 사람";
//         break;

//     case "대구":
//         echo "대구 사람";
//         break;
    
//     case "부산":
//         echo "부산 사람";
//         break;

//     default:
//         echo "타지역 사람";
//         break;
// }
// }


// location("부산");

//----------------------------------------------------------------------------
//  반복문 : for / while / do while / foreach

// while은 조건을 실행하고 그 값이 "참"일경우 실행한다. 
// $i = 1;
// while(false)
// {
//     echo $i;
//     break;      // break를 만나면 루프를 그 즉시 종료하게 됨. 
// }


// do while : 연산을 실행하고 조건을 체크하는 루프 
// do {
// echo $i;
// $i++;
// }
// while($i<10);


// for문
// 시작과 끝을 지정해주는 루프 (루프의 횟수를 지정 가능)

// 숫자 1부터 50까지 반복문을 이용해서 더하는 프로그램 

// $sum=0;
// for($i=1;$i<=50;$i++)
// {
//     $sum +=$i;
// }
// echo $sum;

// $sum=0;
// $i =1;

// while($i<=50)
// {
//     $sum+= $i;
//     $i++;
// }

// echo $sum;

//----------------------------------------------------------------------------
// 연상배열 std_no, std_name, std_age, std_gender


// $arr_acc= array("std_no" => 3
//                 , "std_name" => "김미현"
//                 , "std_age" => 26
//                 , "std_gender" => "F"
//                 // , "std_secret_info" =>
//                 //     array("std_city__no" => 0716
//                 //         , "std_addr" => "대구 중구 중앙로"
//                 //         , "std_top_secret" => array("std_top" => "??"))
//                 );

// print_r($arr_acc);

// echo $arr_acc["std_name"];

// 다차원 배열
// echo $arr_acc["std_secret_info"]["std_addr"];
// echo $arr_acc["std_age"];

// echo $arr_acc["std_secret_info"]["std_top_secret"]["std_top"];

// foreach문 : 배열을 루프해서 연산을 하고 싶을 때

// foreach($arr_acc as $key=>$val)
// {
//     echo $key." : ".$val."\n";
// }

// var_dump($arr_acc);



// 
// $arr_acc= array("std_no" => 3
//                 , "std_name" => "김미현"
//                 , "std_age" => 26
//                 , "std_gender" => "F");


// foreach($arr_acc as $key => $val)
// {
//     if($key === "std_age")
//     {
//         // echo $arr_acc["std_age"];
//         // echo $val;

//         // $arr_acc["std_age"] -=10;
//         $arr_acc[$key] -=10;
//         // $val -=10;           : $key와 $val 은 독립적임 if문이 종료되도 
//                                     // foreach가 돌아가기 때문에 $val -= 10해도 변하지 않음
//     }
// }

// echo $result;
// print_r($arr_acc);
// echo $arr_acc["std_age"];



//--------------------------------------------------------
//  함수 : 재사용성 증가, 가독성 증가


//-------------------------------------------------------- 팀플할 때 사용해보쇼
// 함수명   : clean_class_room
// 기능     : 이름과 구역을 받아 청소지정 문자열을 반환
// 파라미터 : $param_name   string
//           $param_loc     string
// 리턴     : $result_str   string
//--------------------------------------------------------

function clean_class_room( $param_name, $param_loc )
{
    $result_str = $param_name."씨, ".$param_loc."을(를) 청소해주세요.\n";
    // echo $result_str;
    return $result_str;
}

// $result =clean_class_room("봉정","책상");
// echo $result;


// clean_class_room("동호","책상");

// clean_class_room("미현","책상");

// clean_class_room("수지","창문");

// clean_class_room("수연","창문");

// clean_class_room("성엽","창문");

// clean_class_room("진아","바닥");



//-------------------------------------------------------- 
// 함수명   : my_sum_all
// 기능     : 1부터 지정숫자까지의 합을 구해서 리턴
// 파라미터 : $param_int   int
// 리턴     : $result_int   int
//--------------------------------------------------------

function my_sum_all($param_int)
{
    $result_int = 0;
    for($i=1;$i<=$param_int;$i++)
    {
        $result_int+=$i;
    }
    return $result_int;
}

echo my_sum_all(1000);




























?>