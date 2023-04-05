<?php
// 카드 뽑기 함수
function pick_card(&$pick_push,&$deck)
{
    $pick = array_shift($deck);     // 뽑은 카드
    $pick_push[] = $pick;           // pick_push : 뽑은 카드를 플레이어와 딜러에게 준다. 
}



// 점수 부여해주고 

function decide_score(&$picked_card,&$score){       // 점수부여 함수 A면 11점 / K, Q, J, 10 이면 10점 / 2~9 는 각 숫자만큼 
    for($i=0;$i<count($picked_card);$i++)           
    {
        if($picked_card[$i]["card"] === "A")
        {
            $score += 1;
        }else if($picked_card[$i]["card"] === ("K"||"Q"||"J"||"10"))
        {
            $score += 10;
        }else if($picked_card[$i]["card"] === "2")
        {
            $score += 2;
        }else if($picked_card[$i]["card"] === "3")
        {
            $score += 3;
        }else if($picked_card[$i]["card"] === "4")
        {
            $score += 4;
        }else if($picked_card[$i]["card"] === "5")
        {
            $score += 5;
        }else if($picked_card[$i]["card"] === "6")
        {
            $score += 6;
        }else if($picked_card[$i]["card"] === "7")
        {
            $score += 7;
        }else if($picked_card[$i]["card"] === "8")
        {
            $score += 8;
        }else if($picked_card[$i]["card"] === "9")
        {
            $score += 9;
        }else if($picked_card[$i]["card"] === "A" && $score <= 11 )
        {
            $score += 10;
        }
    }
    return $score;
}

?>