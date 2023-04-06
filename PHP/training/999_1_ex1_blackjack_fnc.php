<?php
// 카드 뽑기 함수
function pick_card(&$pick_push,&$deck)
{
    $pick = array_shift($deck);     // 뽑은 카드
    $pick_push[] = $pick;           // pick_push : 뽑은 카드를 플레이어와 딜러에게 준다. 
}

// 점수 부여해주고 

function decide_score(&$picked_card,&$score)       // 점수부여 함수 A면 11점 / K, Q, J, 10 이면 10점 / 2~9 는 각 숫자만큼 
{
    for($i=0;$i<count($picked_card);$i++)           
    {
        if($picked_card[$i]["card"] === "A")
        {
            $score += 1;
        }
        else if
                ($picked_card[$i]["card"] === "K"||
                $picked_card[$i]["card"] === "Q"||
                $picked_card[$i]["card"] === "J"||
                $picked_card[$i]["card"] === "10"
                )
        {
            $score += 10;
        }

        if($picked_card[$i]["card"] === "A" && $score <= 10 )
        {
            $score += 10;
        }
        
        for($card_num =2;$card_num<=9;$card_num++)
        {
            if ($picked_card[$i]["card"] === (string)$card_num)
            {
                $score += $card_num;
            }
        }
    }
    return $score;
}
        

// 21점이 초과했을 때
function over_score(&$dealer_score,&$player_score)
{
    if($dealer_score > 21)
{
    echo "딜러 : ".$dealer_score."\n"."플레이어 : ".$player_score;
    echo "딜러가 패배하였습니다.";
}
else if($player_score>21)
{   
    echo "딜러 : ".$dealer_score."\n"."플레이어 : ".$player_score;
    echo "플레이어가 패배하였습니다.";
}
}



// 딜러가 17점 이하면 1장 더 받는다. 
function dealer_seventeen(&$dealer_score)
{
    if($dealer_score<17){
        pick_card($dealer,$deck);
    }
}



// 카드 수 적은 쪽이 승리
// function count_card()
// {
//     if($dealer_score = $player_score)
//     {
//         if(count($dealer) < count($player))
//         {
//             echo "딜러 승리 ";
//         }else if(count($dealer) > count($player)){
//             echo "플레이어 승리 ";
//         }else{
//             echo "드로우";
//         }
//     }
// }



// 21점일 때 블랙잭 
function blackjack(&$dealer_score,&$player_score)
{
    if($dealer_score === 21 || $player_score === 21)
    {
        echo "Dealer : ".$dealer_score."\n";
        echo "Player : ".$player_score."\n";
        if( $dealer_score === 21 ){
            echo "Dealer win";
        }else{
            echo "Player win";
        }
    }
}






function game_result(&$dealer_score,&$player_score)
{
    if($dealer_score < $player_score){
        // echo "플레이어 승\n";
    }else if($dealer_score > $player_score){
        // echo "딜러 승\n";
    }else if($dealer_score = $player_score){
        // echo " 무승부\n";
    }
}


?>