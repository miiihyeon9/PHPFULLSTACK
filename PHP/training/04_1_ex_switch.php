<?php
$score ="0";


$your_score = "당신의 점수는 ";
$is="점 입니다.";
$grade ="";
$wrong = "점수를 잘못 입력하셨습니다.";


switch($score){
    case !($score>=0 && $score<=100):
        echo $wrong;
        break;
    default:
    switch ($score) 
        {
        case 100:
            $grade = "<A+>";
        break;
        case 90 :
            $grade = "<A>";
        break;
        case 80 :
            $grade = "<B>";
        break;
        case 70 :
            $grade = "<C>";
        break;
        case 60 :
            $grade = "<D>";
        break;
        default :
            $grade = "<F>";
        break;
        }
        echo $your_score.$score.$is.$grade;
        break;
}


// 범위로 지정해준거에서 기준에서 기준, 경계값은 무조건 검사해 봐야함
?>


