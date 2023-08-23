<?php
    // rand(0,10);
    // rand (0,10) 숫자 0~10 까지 랜덤으로 숫자를 나타내줌

// 이기는 경우 지는경우 비기는 경우

$rock = "바위";
$scissors = "가위";
$paper = "보";
$rsp_com = rand(0,2);
$rsp_count = rand(0,2);
$win = "  이겼습니다";
$compare = "  비겼습니다";
$lose ="  졌습니다";
$vs = " vs ";
$computer ="COMPUTER : " ;
$counter ="COUNTER : " ;



//컴퓨터가 바위를 냈을 때
    if($rsp_com == 0)
    {
        if($rsp_count == 0)
        {
            echo $computer.$rock.$vs.$counter.$rock.$compare;
        } else if ($rsp_count == 1)
        {
            echo $computer.$rock.$vs.$counter.$scissors.$lose;
        } else 
        {
            echo $computer.$rock.$vs.$counter.$paper.$win;
        }
        
    } 
    
    //컴퓨터가 가위를 냈을 때
    
    else if ($rsp_com == 1)
    {
        if($rsp_count == 0)
        {
            echo $computer.$scissors.$vs.$counter.$rock.$win;
        } else if ($rsp_count == 1)
        {
            echo $computer.$scissors.$vs.$counter.$scissors.$compare;
        } else 
        {
            echo $computer.$scissors.$vs.$counter.$paper.$lose;
        }
    }
    //컴퓨터가 보를 냈을 때
    else
    {
        if ($rsp_com == 0){
            echo $computer.$paper.$vs.$counter.$rock.$lose;
        } else if ($rsp_com == 1){
            echo $computer.$paper.$vs.$counter.$scissors.$win;
        } else {
            echo $computer.$paper.$vs.$counter.$paper.$compare;
        }
    }
    
    
    


?>