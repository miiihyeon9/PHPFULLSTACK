<?php
// 1. 1부터 100까지 합 
$sum = 0;
for($i = 1; $i <=100; $i++)
{
    $sum = $sum+$i;
}
echo $sum;
// echo도 for문 안에 넣으면 반복된다... 잊지말자... for은 반복문이라구!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!


// 2. 구구단 2단 ~ 9단 출력 

// $num=2;

// for($num=2;$num<=9;$num++)
// {
//     echo $num."단"."\n";
//     for($i=1;$i<=9;$i++)
//     {
//         echo $num." * ".$i." = ".$num*$i."\n";
//     }
    
// }

// 3. 팩토리얼 
// 팩토리얼 : 1부터 자기자신 까지 곱한 값
// 10!
// $num = 1;
// for ($i=1;$i<=10;$i++)
// {
//     $num= $num*$i;
// }
// echo $num;

// 복리 이자 100만원10년간 5% 
// $num=1000000;
// $r=0.05;
// for($i=1;$i<=10;$i++)
//     {
//     $result = $num*(1+$r)*$i;
//     $result2 = $num;
//     for ($bok = 0; $bok<$i;$bok++)
//     {
//         $result2 *=(1+$r);
//     }
//     }
//     echo "단리 : ".$result."복리 : ".$result2;


// 1에서 100 중 소수만 뽑기 
//  소수 : 약수가 1과 자기자신만 있는 수


for($i=1;$i<=100;$i++)
{
    $remain=0;
    for($a=1;$a<=$i;$a++)
    {
        if($i%$a == 0)
        {
            $remain++;
        }
    }
    if($remain==2)
    {
        echo $i." ";
    }
    
}
//i 와 a를 나눴을 때 나머지가 0이다 => a는 i의 약수이다. 
// 만약 i가 2일때, 
// 처음에 remain 이 0 이고 
// i가 2이고 a가 1일 때 나머지는 0 이기 때문에 $remain이 1 증가해서 $remain =1 이됨
// 다시 for($a=1;$a<=$i;$a++)문이 반복해서 $a가 2 일때 $i와 $a를 나누면 0이됨 
// 그러면 다시 remain이 1 증가해서 2가 되고 $a는 $i보다 클 수 없기 때문에 for($a=1;$a<=$i;$a++)문은 종료가 되고 숫자 2가 출력된다. 
// $i가 4인경우 $a = 1일 때 나머지가 0 이기 때문에 remain이 증가하여 2가 되고 $a 는 1 증가하여 2가되는데,
// 4는 2로도 나눠지기 때문에 아직 for($a=1;$a<=$i;$a++)문이 종료가 된 상태가 아니기 때문에 if($remain==2)에 해당이 안됨


// listening to Xdebug on port 0.0.0.0:9003, ::: 9003...이게 몰까.../??? 왜 자꾸 뜨는걸까..?ㅜㅜㅜㅜㅜㅜ


?>