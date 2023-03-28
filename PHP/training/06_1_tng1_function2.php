<?php
// 빼기, 곱하기, 나누기를 가변 파라미터 함수로 구현해 주세요...????????????

// function fnc_args_min()
// {
//     $args=func_get_args();
//     $min =20;
//     foreach ($args as $val){ 
//         $min -= $val;
//     }
//     return $min;
// }

// $result_min = fnc_args_min(10,2,5);


// 1-1)
// function fnc_args_min()
// {
//     $args=func_get_args();
//     foreach($args as $val)
//     {
//         if($args[0]===$val)
//         {
//             $min = $val;
//         }else
//         {
//         $min -=$val;
//         }
//     }
//     return $min;
// }
// $result_min = fnc_args_min(10,10,5);
// echo $result_min;
// 중복 오류

// echo $result_min."\n";

// 1-2)
// function fnc_args_min()
// {
//     $args=func_get_args();
//     $min=$args[0]*2;
//     foreach($args as $val)
//     {
//         $min -=$val;
//     }
//     return $min;
// }
// $result_min = fnc_args_min(10,2,5);

// echo $result_min."\n";

// 1 -3)
// function fnc_args_min()
// {
//     $args=func_get_args();
//     foreach($args as $key=> $val)
//     {
//         if($key === 0)
//         {
//             $min = $val;
//         }else
//         {
//         $min -=$val;
//         }
//     }
//     return $min;
// }
// $result_min = fnc_args_min(10,2,5);

// echo $result_min."\n";


// 쌤

// function fnc_args_minus()
// {
//     $result_args = func_get_args();
//     $result_minus = null;
//     foreach ($result_args as $val) {
//         if(is_null($result_minus))
//         // is_null() :  파라미터가 null인지 아닌지 체크해주는 함수
//         {
//             $result_minus = $val;
//         }
//         else
//         {
//             $result_minus -= $val;
//         }
//     }
//     return $result_minus;
// }
// $result_minus = fnc_args_minus(10,2,5);
// echo $result_minus;



//-------------------------------------------------

// 2-1)
// function fnc_args_mul()
// {
//     $args=func_get_args();
//     foreach($args as $val)
//     {
//         if($args[0]===$val)
//         {
//             $mul = $val;
//         }else
//         {
//             $mul *= $val;
//         }
//     }
//     return $mul;
// }

// $result_mul = fnc_args_mul(2,3,4);

// echo $result_mul."\n";


//2-2)
// function fnc_args_mul()
// {
//     $args=func_get_args();
//     $mul =1;
//     foreach($args as $key=>$val)
//     {
//        $mul *= $val;
//     }
//     return $mul;
// }

// $result_mul = fnc_args_mul(2,3,4);

// echo $result_mul."\n";


// 2-3)
// function fnc_args_mul()
// {
//     $args=func_get_args();
//     foreach($args as $key=>$val)
//     {
//         if($key=== 0)
//         {
//             $mul = $val;
//         }else
//         {
//             $mul *= $val;
//         }
//     }
//     return $mul;
// }

// $result_mul = fnc_args_mul(2,3,4);

// echo $result_mul."\n";


//------------------------------------------------------
// 3-1)
// function fnc_args_div()
// {
//     $args=func_get_args();
//     foreach($args as $val)
//     {
//         if($args[0]===$val)
//         {
//             $div = $val;
//         }
//         else
//         {
//             $div /= $val;
//         }
//     }
//     return $div;
// }

// $result_div = fnc_args_div(10,2,5);
// echo $result_div;


//3-2)

// function fnc_args_div()
// {
//     $args=func_get_args();

//     foreach($args as $val)
//     {     
//             $div /= $val;
//     }
//     return $div;
// }

// $result_div = fnc_args_div(10,2,5);
// echo $result_div;


//3-3)
// function fnc_args_div()
// {
//     $args=func_get_args();
//     foreach($args as $key=> $val)
//     {
//         if($key === 0)
//         {
//             $div = $val;
//         }
//         else
//         {
//             $div /= $val;
//         }
//     }
//     return $div;
// }

// $result_div = fnc_args_div(10,2,5);
// echo $result_div;




?>