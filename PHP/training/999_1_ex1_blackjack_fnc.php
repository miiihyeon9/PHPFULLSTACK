<?php
//-- 기능 : 카드 뽑기 함수
function fnc_pick_card(&$picker,&$deck)
{
    $pick = array_shift($deck);     // 뽑은 카드
    $picker[] = $pick;           // pick_push : 뽑은 카드를 플레이어와 딜러에게 준다. 
}

// -- 기능 : 뽑은 카드에 점수 부여 

function fnc_decide_score(&$picker,&$picker_score)       // 점수부여 함수 A면 11점 / K, Q, J, 10 이면 10점 / 2~9 는 각 숫자만큼 
{
    $picker_score = 0;
    for($i=0;$i<count($picker);$i++)           
    {
        if($picker[$i]["card"] === "A")
        {
            $picker_score += 1;
        }
        else if
                ($picker[$i]["card"] === "K"||
                $picker[$i]["card"] === "Q"||
                $picker[$i]["card"] === "J"||
                $picker[$i]["card"] === "10"
                )
        {
            $picker_score += 10;
        }

        if($picker[$i]["card"] === "A" && $picker_score <= 10 )
        {
            $picker_score += 10;
        }
        
        for($card_num =2;$card_num<=9;$card_num++)
        {
            if ($picker[$i]["card"] === (string)$card_num)
            {
                $picker_score += $card_num;
            }
        }
    }
    return $picker_score;
}

// -- 기능 21점이 초과했을 때 패배
function fnc_lose_over_score(&$dealer_score,&$player_score)
{
        $score = array("Dealer"=>$dealer_score,"Player"=>$player_score);
        foreach($score as $key=> $val)
        {
            if($val >21 )
            {
                echo $key."  ".$val."  Burst\n";
            }
        }
}



// 기능 : 21점일 때 블랙잭 
function fnc_blackjack(&$dealer_score,&$player_score)
{
    if( $dealer_score === 21|| $player_score ===21 ){
        echo "Blackjack!!";
    }
    
}


function fnc_show_game_result(&$dealer_score,&$player_score)
{
    if($dealer_score < $player_score && $player_score<=21)
    {
        echo "Player Win\n";
    }else if($dealer_score > $player_score && $dealer_score<=21)
    {
        echo "Dealer Win\n";
    }else if($dealer_score === $player_score )
    {
        echo "Draw\n";
    }
}

// -- 기능 : 딜러가 17점 미만 카드 더 가져감
function fnc_take_card(&$dealer_score)
{
    if($dealer_score<17){
        $dealer_score =0;
        fnc_pick_card($dealer,$deck);
        fnc_decide_score($dealer,$dealer_score);
    }
}


// 카드 수 적은 쪽이 승리
// function victory_count_card()
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
// 카드 결과 보여주기
function show_card(&$picker,&$picker_score)
{
    for($i=0;$i<count($picker);$i++)
    {
        echo implode("",$picker[$i])."   ";
    }
}
?>