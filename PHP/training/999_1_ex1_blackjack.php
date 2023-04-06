<?php
include_once("./999_1_ex1_blackjack_fnc.php");
while(true) {
    echo '시작';
    print "\n";
    fscanf(STDIN, "%d\n", $input); 
    if($input === 0) {
        break;
    }
    if(!($input === 0 || $input === 1 || $input ===2))
    {
        echo "0번 1번 2번 중에 눌러주세요.";
    }  
    if($input === 1)
    {
        $player = array();
        $dealer = array();
        $deck= array();
        $shapes = array("spade","clover","dia","heart");
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
            fnc_blackjack($dealer_picker_score,$player_picker_score);
            fnc_show_game_result($dealer_score,$player_score);
        }
        
        if($input === 2)
        {
            fnc_pick_card($player,$deck);
        }
	print "\n";
}
echo "끝!\n";















?>