<?php
    // 1. 산술연산자
    echo "더하기 : 1 + 1 = ", 1 + 1;         // 더하기
    echo "\n빼기 : 1 - 1 = ",1 - 1;    // 빼기
    echo "\n곱하기 : 2 * 3 = ", 2 * 3;   // 곱하기
    echo "\n나누기 : 10 / 2 = ", 10 / 2;  // 나누기
    echo "\n나머지 : 9 % 7 = ", 9 % 7;   // 나머지
    echo "\n연산순서 : 10 - 5 * 8", 10 - 5*8; //기본적인 연산순서는 지켜줌

    // 2. 증가/감소연산자
    // $num1 = 1;
    // $num2 = 1;
    // echo "\n\n";
    // // echo ++$num1;
    
    // echo "\n\n";
    // echo --$num2;
    
    // echo "\n\n";
    // echo $num1++, "\n";
    // echo $num1;

// ++$num1;
// $num1 = $num1 + 1;

// $num1++

    // 3. 산술대입 연산자
    $num1 = 1;
    $num1 = $num1 +1;
    $num2 = 10;

    $num2 += 1;
    
    echo "\n\n";
    echo $num1," ",$num2;

    echo "\n\n";

    // 산술대입 연산자 이용해서 계산
    $tng_num = 10;
    // 산술 연산자를 이용해서 계산
    echo $tng_num + 10, "\n";
    echo $tng_num / 5, "\n";
    echo $tng_num - 4, "\n";
    echo $tng_num % 7, "\n";
    echo $tng_num * 3, "\n";

    
    echo "\n\n";
    // 산술대입 연산자 이용해서 계산
    echo $tng_num += 10,"\n";
    // 이 다음부터는 설정했던 tng_num = 10이 아니라 + $tng_num += 10이 $tng_num가 됨.
    echo $tng_num /= 5,"\n";
    // => 20/5
    echo $tng_num -= 4,"\n";
    // => 4-4
    echo $tng_num %= 7,"\n";
    // => 0 % 7
    echo $tng_num *= 3,"\n";
    // => 0 * 3 

    
$temp = 1;

// echo $temp++;
// echo "\n",$temp;

echo $temp++;
echo "\n";
echo $temp;
echo "\n";

echo ++$temp +1;

// 증가 감소를 변수 앞에다가 사용하면 사용한 즉시 증가/감소가 되고
// 증가 감소를 변수 뒤에 사용하면 그다음에 변수를 불러올 때 증가됨.

echo "\n";

$t1 = 0;
$t2 = $t1 + 1;
$t3 = $t1 + $t2;

$t1 = 3;

echo $t1, $t2, $t3;


// 4. 비교연산자
    var_dump(1>2);
    var_dump(1<2);
    var_dump(1>=2);
    var_dump(1<=2);

$t1 = 1;
$t2 = '1';
    var_dump($t1 == $t2);
    var_dump($t1 === $t2);
    // == : 데이터의 형식이 달라도 비교했을 때 생긴 모양이 같으면 true
    // === : 데이터 형식까지 같아야함.

    var_dump($t1 != $t2);
    var_dump($t1 !== $t2);
    // != : 데이터의 형식이 달라도 비교했을 때 생긴 모양이 다르면 true
    // !== : 데이터 형식까지 달라야함.

    
// 5. 논리연산자
    // && : AND 조건 모두 만족해야 true 
    // || : OR 조건 중 하나라도 만족하면 true 둘다 틀려야 false
    // !  : NOT 값이 틀리면 true 일치하면 false / true 와 false를 바꿔줌 (값이 true로 나오면 연산결과 false
    
    var_dump(1 == 1 && 2 == 2);
    var_dump(1 == 1 || 3 == 2);
    var_dump( !(1 == 1 && 2==2));
    







// 연습문제 
// 4
$t1 = 1024;
$t2 = 64;

echo ($t1 + $t2),"\n";
echo $t1 - $t2,"\n";
echo ($t1 * $t2),"\n";
echo $t1 /$t2,"\n";
// 5번
// 선행되는 연산이 진행한뒤에 1 증가

// 7번
$i = 21477483647;

echo $i++,"\n";


echo $i += 1;

// 13번
echo 1>2 ? '참' : '거짓';
// 조건 적어주고 ? 참일경우 : 거짓일경우 출력


echo "\n","\n";
$value = 999991;
echo $value,"\n";
$value++;
$value = $value*10;
echo $value,"\n";












?>
