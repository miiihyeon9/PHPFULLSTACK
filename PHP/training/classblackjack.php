<?php
class Blackjack
{
    private $deck;
    private $player;
    private $dealer;
    private $shapes;
    private $cards;
    private $dealer_score;
    private $player_score;

    public function __construct()
    {
        $this->shapes = array("spade","clover","dia","heart");
        $this->cards = array("A","2","3","4","5","6","7","8","9","10","K","J","Q");
        foreach ($this->shapes as $shape) 
        {
            foreach ($this->cards as $card) 
            {
                $this->deck[] = array("shape"=>$shape,"card"=>$card);            // $deck 배열에  추가 
            }
        }
    }

    // 기능 : 카드 뽑는 함수 
    public function pick_card()
    {
        $pick = array_shift($this->deck);     // 뽑은 카드
        $pick_push[] = $pick;           // pick_push : 뽑은 카드를 플레이어와 딜러에게 준다. 
        
    }

    // 기능뽑은 카드에 점수 부여
    public function decide_score(&$picked_card,&$score)       // 점수부여 함수 A면 11점 / K, Q, J, 10 이면 10점 / 2~9 는 각 숫자만큼 
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

    // 점수가 21점일 때 블랙잭
    public function blackjack(&$dealer_score,&$player_score)
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

    // 게임결과 
    public function game_result(&$dealer_score,&$player_score)
    {
        if($dealer_score < $player_score){
            echo "플레이어 승\n";
        }else if($dealer_score > $player_score){
            echo "딜러 승\n";
        }else if($dealer_score = $player_score){
            echo " 무승부\n";
        }
    }
    
    // 기능 : 21점 초과했을 때 패배 
    public function over_score(&$dealer_score,&$player_score)
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
    
    // 기능 : 딜러가 17점 이하면 1장 더 받는다. 
        public function dealer_seventeen(&$dealer_score)
        {
            if($dealer_score<17){
                pick_card($dealer,$deck);
            }
        }
}
















?>