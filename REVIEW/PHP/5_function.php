<?php
// 두 매개변수의 빼기, 나누기, 곱하기를 구하는 함수

// 빼기
// function fnc_min($min_a,$min_b)
// {
//     $min = $min_a - $min_b;
//     return $min;
// }
// $result_min = fnc_min(6,3);

// echo $result_min;

// 나누기
// function fnc_div($div_a,$div_b)
// {
//     $div = $div_a / $div_b;
//     return $div;
// }
// $result_div = fnc_div(10,5);

// echo $result_div;

//곱하기
// function fnc_mul($mul_a,$mul_b)
// {
//     $mul = $mul_a * $mul_b;
//     return $mul;
// }
// $result_mul = fnc_mul(5,4);
// echo $result_mul;

//가변 파라미터 함수로 빼기, 곱하기 , 나누기 구현 

// 빼기
// function fnc_args_min()
// {
//     $arr_min = func_get_args();
//     foreach ($arr_min as $key => $value) 
//     {
//         if($key === 0)
//         {
//             $min = $value;
//         }
//         else
//         {
//             $min -=$value;
//         }
//     }
//     return $min;
// }

// $result_min = fnc_args_min(10,2,5);
// echo $result_min;

// 곱하기
// function fnc_mul()
// {
//     $arr_mul = func_get_args();
//     foreach ($arr_mul as $key => $value) {
//         if($key === 0)
//         {
//             $mul = $value;
//         }
//         else
//         {
//             $mul *= $value;
//         }
//     }
//     return $mul;
// }
// $result_mul = fnc_mul(2,3,4);
// echo $result_mul;

// 나누기
// function fnc_div()
// {
//     $arr_div = func_get_args();
//     foreach ($arr_div as $key => $value) 
//     {
//         if($key === 0)
//         {
//             $div = $value;
//         }
//         else
//         {
//             $div/=$value;
//         }
//     }
//     return $div;
// }
// $result_div = fnc_div(20,5,4);
// echo $result_div;

// 배열의 길이를 반환하는 my_len()함수
// $arr_base = array(1,2,3,4,5);
// echo my_len($arr_base);
// function my_len($arr_base)
// {
//     $arr = 0;
//     foreach ($arr_base as $value)
//     {
//         $arr += 1;
//     }
//     return $arr;
// }




?>