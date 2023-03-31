<?php

$f_gugudan= fopen("../example/sam/gugudan.text","a");

// $title="";                      // null은 object로 담아내기 위해서 사용 
//                                 // 여기서는 데이터타입이 문자열이기 때문에 "" 사용해주어야함
//                                 // 숫자열은 0;
// for($dan=2; $dan<=9; $dan++)
// {   
//     $title.=$dan."단\n";
//     for( $num=1; $num<=9; $num++)
//     {
//         $title.= $dan." * ".$num." = ".$dan*$num."\n";
//     }
// }

// fputs($f_gugudan,$title);

// fclose($f_gugudan); //무조건 써줘야함 


// function fnc_gugumake($dan)
// {
//     $gugu_ans = $dan."단\n";
//     for($i=1;$i<=9;$i++)
//     {
//         $gugu_ans .= $dan*$i." = ".$dan*$i."\n";
//     }
// }

// fputs($f_gugudan,fnc_gugumake(2));


?>