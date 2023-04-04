<?php
// 함수명 : fnc_sum
// 기능 : 파라미터를 더한 값을 리턴
// 파라미터 : int $param_a
//         : int $param_b
// 리턴값   : int $sum

// function fnc_sum($param_a,$param_b)
// {
//     $sum = $param_a + $param_b;
//     return $sum;
// }

// echo fnc_sum(1,2);




// 가변 파라미터 
// function fnc_sum2($param_am,$param_b)
// {
//     $sum = $param_a + $param_b;
//     return $sum;
// }


// function fnc_sum3( ...$param_numbers )
// {
//     return array_sum($param_numbers);
// }
// echo fnc_sum3(3,4,5,6);


// function fnc_global()
// {
//     global $global_i;
//     $global_i = 0;
// }

// $global_i = 5;
// fnc_global();

// echo $global_i;



// 함수내에서만 사용할 수 있는데 메모리 상에 올라가서 함수가 종료되도 메모리가 남아있음 ;


// function fnc_static()
// {
//     static $static_i = 0;
//     echo $static_i;
//     $static_i++;
// }


// fnc_static();
// fnc_static();
// echo $static_i;

function fnc_reference( &$param_str)
{
    $param_str = "fnc_reference";
}

$str = "aaa";
fnc_reference($str);
echo $str;













?>