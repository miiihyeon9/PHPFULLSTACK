
<?php

// $dan = 2;
// $num = 1;
// $max_dan = 9;


// while($dan <= $max_dan )
// {   
//     echo $dan."단\n";
//     $num=1;
//     while($num<10)
//     {
//         $result = $dan." * ".$num." = ".$dan*$num."\n";
//         echo $result;
//         ++$num;
//     }
//     ++$dan;
// }

//do while 문
// do
// {
// 반복할 처리
// }
// while (조건)

// while문은 조건을 먼저 체크하고 작동
// do while문은 먼저 코드를 실행하고, 조건을 만족하면 코드를 다시 실행하고, 만족하지 않으면 종료한다. 

// $i = 0;
// do{
//     echo $i."\n"."do while";
// }
// while( $i === 1);
// while ($i === 1);
// {
//     echo $i,"while";
// }


// for 문
// 언제 멈춰야할지 모를 때 for문 사용

for ($i=1; $i <= 10; $i++) { 
    // $i 가 1부터 10까지 1씩 증가
    echo $i;
}
// $i가 1부터 시작해서 $i가 10보다 작거나 같을 때 $i 가 출력되고,
// 코드가 한번 실행이 되었을 때 $i는 1씩 증가하고,
// $i가 11이 되었을 경우 $i <= 10 과 조건이 일치하지 않기 때문에
// 코드가 종료된다. 


// for($dan=2; $dan<=9; $dan++)
// // dan 변수가 2부터 9까지 1씩 증가.
// {
//     for($i=1;$i<=9;$i++)
//     {
//     $result =$dan." * ".$i." = ".$dan*$i."\n";
//     echo $result;
//     }
//     $i=1;
//     ++$dan;
// }

for($dan=2; $dan<=9; $dan++)
{   echo $dan."단\n";
    for( $num=1; $num<=9; $num++)
    {
        $result = $dan." * ".$num." = ".$dan*$num."\n";
        echo $result;
        
    }
}
// while은 어디서부터 시작할지 설정할 수가 없었음
// for은 처음 조건에 설정할 수 있음







?>