<?php

// function ~!!~!~!

// $a = 2;
// $b = 5;

// $sum = $a + $b;
// echo $sum;

// function fnc_add(매개변수)
//                      함수를 정의할 때 사용하는 함수

// function fnc_add($int_a,$int_b)
// {
//     $sum = $int_a + $int_b;

//     return $sum;

// }
// return 해당 함수에서의 탈출. 
//      : 현재 실행 중인 메소드를 종료하고 결과값을 되돌려주라는 명령어

// fnc_add함수 호출
// $result_add = fnc_add(10,2);

// echo $result_add;


// 가변 파라미터 함수 func_get_args();
//  : 파라미터의 개수를 모를때 사용
function fnc_args_add()
{
    $args = func_get_args(); // 가변 파라미터 습득
    $sum = 0;               // 더하기 결과 저장 변수
    foreach ($args as $value) {         // 더하기 실행 loop
        $sum += $value;
    }
    return $sum;
}
$result = fnc_args_add(1,2,3,4);

echo $result;


?>