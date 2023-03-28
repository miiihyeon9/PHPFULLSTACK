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



// 함수로 별 찍기

// 1. 한줄 별 만들기
// print_star 
function print_star($count)
{
    for($i=1;$i<=$count;$i++)
    {
        echo "*";
// $i 1부터 시작해서 $count보다 작거나 같을 때까지 $i가 1씩 증가하면서* 출력하고 
    }
    echo "\n";
// for문이 종료하고 개행한다. 
}


// function print_star_rect($line)
// {
//     for($j=1;$j<=$line;$j++)
//     {
//         print_star(6);
//          $j는 1부터 시작해서 $line보다 작거나 같을 때 까지 $j가 1씩 증가하면서
//              함수 print_star(6)를 출력한다
//              이미 함수 print_star에 매개변수를 지정해줌
//     }
// }
// print_star_rect(6);
// 별6개 짜리가 6번 반복해서 나타남




function print_star_rect($line)
{
    for($j=1;$j<=$line;$j++)
    {
        print_star($j);
    }
}
print_star_rect(6);

// 함수를 왜 사용하는가ㅏㅏㅏㅏㅏ 
// 식을 재사용하기 위해서
?>