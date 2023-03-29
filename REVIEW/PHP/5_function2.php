<?php

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


// function print_star_rect($count)
// {
//     for($i=1;$i<=$count;$i++)
//     {
//         print_star($count);
// //         //  $j는 1부터 시작해서 $line보다 작거나 같을 때 까지 $j가 1씩 증가하면서
// //         //      함수 print_star($count)를 출력한다
// //         //      이미 함수 print_star에 매개변수를 지정해줌
//     }
// }
// print_star_rect(6);
// // // 별6개 짜리가 6번 반복해서 나타남




function print_star_rect($count)
{
    for($j=1;$j<=$count;$j++)
    {
        print_star($j);
    }
}
print_star_rect(6);

// 함수를 왜 사용하는가ㅏㅏㅏㅏㅏ 
// 식을 재사용하기 위해서



// 배열로 별찍기
// $count = array(1,2,3,4,5);
// function print_star($count)
// {   
//     foreach($count as $key=> $value) 
//     {
//         $num=$value;
//         echo "*";
//     }   
    
//     echo "\n";
// }
// print_star($count);


// 일렬로 별 5줄 

// function line_star($count)
// {
//     foreach($count as $key => $value)
//     {
//         print_star($count);
//     }
// }
// line_star($count);




// function print_star()
// {   
//     $count =func_get_args();
//     foreach($count as $key=> $value) 
//     {
//         if(is_null($key))
//         {
//             $key++;
//         }
//         else
//         {
//             for($i=0;$i<=$key;$i++)
//             {
//                 echo "*";
//             }
//             echo "\n";
//         }
//     }   
    
// }

// print_star(1,2,3,4,5,6,7);



?>