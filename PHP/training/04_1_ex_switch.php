<?php
$score ="70";


$your_score = "당신의 점수는 ";
$is="점 입니다.";
$grade ="";
$wrong = "점수를 잘못 입력하셨습니다.";
switch($score){
    case $score<0 || $score>100:
        echo $wrong;
        break;
    default:
    switch ($score) {
        case $score == 100:
            $grade = "<A+>";
        break;
        case $score  >=90 :
            $grade = "<A>";
        break;
        case $score  >=80 :
            $grade = "<B>";
        break;
        case $score  >=70 :
            $grade = "<C>";
        break;
        case $score  >=60 :
            $grade = "<D>";
        break;
        default :
            $grade = "<F>";
        break;
        }
        echo $your_score.$score.$is.$grade;
}

?>


