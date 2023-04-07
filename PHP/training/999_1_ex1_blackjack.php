<?php
include_once("./999_1_ex1_blackjack_fnc.php");
echo "게임을 시작합니다. 1번을 눌러주세요.";
// fscanf(STDIN, "%d\n", $input); 
while(true)
{
    fscanf(STDIN, "%d\n", $input); 
    // echo "0번 1번 2번 중에 눌러주세요."."\n"."0번 : 종료"."\n"."1번 : 시작"."\n";
    if($input === 0) {
        break;
    }
    if(!($input === 0 || $input === 1 || $input ===2))
    {
        echo "0번 1번 2번 중에 눌러주세요."."\n"."0번 : 종료"."\n"."1번 : 시작"."\n"."2번 : 비교하기";
    }  
    if($input === 1)
    {
        $player = array();
        $dealer = array();
        $deck= array();
        $shapes = array("♠","♣","◆","♥");
        $cards = array("A","2","3","4","5","6","7","8","9","10","K","J","Q");
            foreach ($shapes as $shape) 
            {
                foreach ($cards as $card) 
                {
                    $deck[] = array("shape"=>$shape,"card"=>$card);            // $deck 배열에  추가 
                }
            }
            shuffle($deck);
            for($i=1;$i<=2;$i++)
            {
                fnc_pick_card($player,$deck);
                fnc_pick_card($dealer,$deck);
            }
            $dealer_score = 0;
            $player_score = 0;
            fnc_decide_score($player,$player_score)." ";
            fnc_decide_score($dealer,$dealer_score)."\n";
            echo "딜러 : ".$dealer_score."\n";
            echo "플레이어 : ".$player_score."\n";
            fnc_blackjack($dealer_score,$player_score);
            fnc_show_game_result($dealer_score,$player_score);
            echo "게임을 계속 진행하시겠습니까?"."\n"."0번 : 종료"."\n"."1번 : 카드 더 받기"."\n";
            $input = null;
        }
while(true)
{        
    fscanf(STDIN, "%d\n", $input); 
        if($input === 0) 
        {
            echo "Player\n";
            echo implode("",$player[0])."  ";
            echo implode("",$player[1])."\n";
            echo "Dealer\n";
            echo implode("",$dealer[0])."  ";
            echo implode("",$dealer[1])."\n";
            echo "딜러 : ".$dealer_score."\n"."플레이어 : ".$player_score."\n";
            fnc_show_game_result($dealer_score,$player_score);
            break;
        }
        else if($input === 1)
        {
            $player_score = 0;
            $dealer_score = 0;
            fnc_pick_card($player,$deck);
            fnc_pick_card($dealer,$deck);
            fnc_decide_score($player,$player_score)." ";
            fnc_decide_score($dealer,$dealer_score)."\n";

            echo "Player\n";
            echo implode("",$player[0])."  ";
            echo implode("",$player[1])."  ";
            echo implode("",$player[2])."  "."$player_score"."\n";

            echo "Dealer\n";
            echo implode("",$dealer[0])."  ";
            echo implode("",$dealer[1])."  ";
            echo implode("",$dealer[2])."  "."$dealer_score"."\n";

            fnc_lose_over_score($dealer_score,$player_score);
            fnc_blackjack($dealer_score,$player_score);
            fnc_show_game_result($dealer_score,$player_score);
        break;
        }
        else if($input === 2)
        {
            echo "Player\n";
            echo implode("",$player[0])."  ";
            echo implode("",$player[1])."\n";
            echo "Dealer\n";
            echo implode("",$dealer[0])."  ";
            echo implode("",$dealer[1])."\n";
        fnc_lose_over_score($dealer_score,$player_score);
        fnc_blackjack($dealer_score,$player_score);
        fnc_show_game_result($dealer_score,$player_score);
        break;
        }
    }
}

?>