<?php


$score = 100;
$your_score = "당신의 점수는 ";
$is="점 입니다.";
$grade_a_plus = "<A+>";
$grade_a = "<A>";
$grade_b = "<B>";
$grade_c = "<C>";
$grade_d = "<D>";
$grade_f = "<F>";
$wrong = "점수를 잘못 입력하셨습니다.";




if( $score === 100 )
{
    echo $your_score.$score.$is.$grade_a_plus;
}else if($score>=90 && $score<100)
{
    echo $your_score.$score.$is.$grade_a;
}else if($score>=80 && $score<90)
{
    echo $your_score.$score.$is.$grade_b;
}else if($score>=70 && $score<80)
{
    echo $your_score.$score.$is.$grade_c;
}else if($score>=60 && $score<70)
{
    echo $your_score.$score.$is.$grade_d;
}else 
{
    echo $your_score.$score.$is.$grade_f;
};


?>