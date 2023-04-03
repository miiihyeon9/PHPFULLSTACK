<?php
// 배열의 길이를 반환하는 my_len()함수를 작성하시오. 

// $arr_base = array(1,2,3,4,5);
// $arr_base = array(1,2,3,4,5);
// function my_len($arr_base)
// {
//     $arr=0;
//     foreach($arr_base as$val)
//     // value값이 늘어날 때마다 1씩 증가
//     {
//         $arr+=1;
//     }
//          배열에 5개가 들어 있으니까 5번 반복
//     return $arr;
// }

// echo my_len($arr_base);
// echo my_len($arr_base);






// 길이를 반환하는 함수

// $arr_base = array(1,2,3,4,5);

// echo my_len($arr_base);

// function my_len($arr_base)
// {
//     $arr = 0;
//     foreach($arr_base as $val)
//     {
//         $arr+=1;
//     }
//     return $arr;
// }



// $count = 6;



// 함수로 별찍기...
// 배열..?
// 1쓰면 1,

function print_star($i)
{
    for($num=1;$num<=$i;$num++)
    {
        echo "*";
    }
    echo "\n";
}

function print_star_rect($count)
{
    for($i=1;$i<=$count;$i++)
    {
        print_star($i);
    }
    
    
}

print_star_rect(6);


// function print_star_rect($count)
// {
//     for($i=1;$i<=$count;$i++)
//     {
//         for($num=1;$num<=$i;$num++)
//         {
//             echo "*";
//         }    
//     }
//     echo "\n";
// }





?>