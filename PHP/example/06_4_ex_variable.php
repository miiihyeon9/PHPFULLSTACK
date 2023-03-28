<?php


// function fnc_add()
// {
//     global $global_int_a;
//     //  global - 전역변수 : function외에 어디에서나 변수로 사용할 수 있음.........
//     $global_int_a = $global_int_a +10;
//     return $global_int_a;
// }

// //function 독립되어있음 
// // function 에 있는 $int_a와 function 밖에 있는 $int_a는 다르다ㅏㅏㅏㅏㅏㅏㅏㅏㅏㅏㅏㅏㅏㅏㅏㅏㅏㅏㅏㅏㅏㅏㅏㅏㅏㅏㅏㅏ

// //--------------------

// $global_int_a =5; // 전역변수 값 대입 (초기화)

// echo fnc_add();




//정적변수
// function fnc_add_1()
// {
//     $i=1;
//     echo $i."\n";
//     $i++;
// }

// for($i=0;$i<3;$i++)
// {
//     fnc_add_1();
// }
// 1 1 1


// function fnc_add_1()
// {
//     static$i=1;
//     echo $i."\n";
//     $i++;
// }

// for($i=0;$i<3;$i++)
// {
//     fnc_add_1();
// }
// 1 2 3
// garbage? collection



// call by value
// function fnc_val($int_a,$int_b)
// {
//     $int_a = 3;
//     $int_b = 4;
// }

// $int_a =1;
// $int_b =2;

// fnc_val(5,6);

// echo $int_a," ",$int_b;   // 1  2


// call by reference

function fnc_val(&$a,&$b)
//              & : 주소를 참조하겠다. 
{
    $a = 3;
    $b = 4;
}

$int_a =1;
$int_b =2;

fnc_val($int_a,$int_b);         // $int_a는 $a의 주소를 참조하고, $int_b는 $b의 주소를 참조하겠다. 


echo $int_a," ",$int_b;   

?>