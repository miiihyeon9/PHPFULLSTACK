<?php
// array는 for문이랑 궁합이 좋음
// 일반적인 변수 설정은 값을 하나만 넣어줄 수 있는데
// array를 사용하면 한 변수에 여러 값을 넣어줄 수 있음.
// 배열은 인덱스값 0부터 시작
//          index : 배열이 원소가 저장된 위치 값
// $week = array("Sun","Mon","Tue","Wed","Thu","Fri","Sat");
// //              0    1      2     3     4     5     6

// echo $week[0];

//  array안에도 변수로 설정할 수 있음

// $mon = "Mon";
// $sun = "Sun";
// $tue = "Tue";
// $wed = "Wed";

// $week2 = array($sun,$mon,$tue,$wed);
// $week3 = array($week[0],$week[1],$week[2],$week[3]);




// $week2 = array ($mon,$wed,$sun,$tue);

// $week2 = array ($week3[1],$week3[3],$week3[0],$week3[2]);

// echo $week2[0];


// print_r($week2);
// print_r($week3);


// 멀티타입 배열
// 배열 안에 여러가지 값들이 들어갈 수 있다
// 정수형(20) , 실수형(3.14), 문자형('A'),문자열("aaa")

// str 문자 / int 숫자

// $arr_mult_type = array("aaa",1,3.14,'bbb'); 
// var_dump($arr_mult_type);


// 연상 배열★★★
// 배열 -> key를 가지고 배열의 값을 가져온다..
// 연상 배열은 key값을 지정해줬기 때문에 인덱스값으로 출력 못함

// $arr_ass = array( "key1" => "val1"
//                 , "key2" => "val2"
//                 , "key3" => "val3"
//                 , "key4" => "val4"
//                 );

// echo $arr_ass[5];
// key값이 컬럼명이 되고 val가 데이터값
// echo $arr_ass["key1"].$arr_ass["key2"];


// 다차원 배열 
// 기본 2차열 배열
// $arr_temp = array
//             (
//                 array(1,2,3,4)
//                 ,array(5,6,7,8)
//             );

// echo $arr_temp[1][3]; 


$arr_temp = array(
                array(1,2,3,4)
                ,array(5,6,7,8)
                ,array(
                    array(9,10,11)
                )
            );


// echo $arr_temp[2][0][1];

// echo $arr_temp[0][0][1]   // 3번째 방이 없기 때문에 에러 뜸



    // $arr_temp_3= $arr_temp[2][0];
    // $arr_temp_3= array(9,10,11);

    // $arr_temp_3=$arr_temp[2];
    // $arr_temp_3_c=array(
    //                     array(9,10,11)
    //                 );

// 배열의 원소 삭제
// : unset()

// $week = array("Sun","Mon","Tue","Wed","delete","Thu","Fri","Sat");

// unset($week[4]);
// // 키값 자체가 사라짐 주의!!!!!!
// print_r($week);


unset($arr_temp[2][0][1]);
print_r($arr_temp);

// $chinese ="중식";
// $western = "양식";
// $korean = "한식";

// $food = array (
//             $chinese => array(
//                             "짜장면", "짬뽕","탕수육"
//             )
//             ,$western => array(
//                             "스파게티","스테이크"
//             )
//             ,$korean => array(
//                             "비빔밥", "미역국","국밥"
//             )
//             );

// $food = array(
//         "chinese" => "중식"
//         ,"western" => "양식"
//         ,"korean" => "한식"
// );

$food = array(
    "chinese" => array("짜장면","짬뽕","탕수육")
    ,"western" => array("스파게티","스테이크")
    ,"korean" => array("비빔밥","김치")
);

foreach($food as $key=>$value)
{
    print $key." : ".$value."\n";
}


?>