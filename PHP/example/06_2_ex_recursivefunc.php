<?php
// 재귀함수

// 팩토리얼
function rcc($param_a)
{
    if($param_a ===1)
    {
        return 1;
    }
    return $param_a *rcc($param_a - 1);
}

echo rcc(6);
// 6 * rcc(5)
//      5 * rcc(4)
//            4 * rcc(3)
//                  3 * rcc(2)
//                        2 * rcc(1)
//                              $param_a === 1   -> return 1;





?>