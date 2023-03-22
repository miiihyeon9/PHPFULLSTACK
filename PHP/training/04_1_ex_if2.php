<?php
$score = -1;
$your_score = "당신의 점수는 ";
$is="점 입니다.";
$grade ="";
// 범위 $score<0 || $score>100 도 가능
if(!($score>=0 && $score<=100)){
    echo "잘못된 값을 입력하셨습니다";
} else{
    if( $score === 100 )
    {
        $grade = "<A+>";
    }
    else if($score>=90)
    {
        $grade = "<A>";
    }
    else if($score>=80)
    {
        $grade = "<B>";
    }
    else if($score>=70)
    {
        $grade = "<C>";
    }
    else if($score>=60)
    {
        $grade = "<D>";
    }
    else
    {
        $grade = "<F>";
    }
    echo $your_score.$score.$is.$grade;
}




?>