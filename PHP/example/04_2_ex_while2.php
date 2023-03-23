
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
// do while문은 먼저 처리를 하고 조건을 처리한 뒤 조건이 안맞으면 다시 실행하고 


// $i = 0;
// do{
//     echo $i,"do while";
// }
// while( $i === 1);
// while ($i === 1);
// {
//     echo $i,"while";
// }


// for 문

// for ($i=2; $i <= 9; $i++) { 
//     //  $i를 2번부터 i가 2보다 작거나 같을 때까지
//     echo $i."단"."\n";
// }



// for($dan=2; $dan<=9; $dan++)
// // dan 변수가 1부터 10까지 1씩 증가.
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