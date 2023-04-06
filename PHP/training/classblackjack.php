<?php
class Blackjack
{
    private $deck;
    private $player;
    private $dealer;
    private $dealer_score;
    private $player_score;
    private $shapes;
    private $cards;

    // -- 기능 : 덱 구성
    public function fnc_set_deck()
    {   $this->deck=array();
        $this->shapes = array("spade","clover","dia","heart");
        $this->cards = array("A","2","3","4","5","6","7","8","9","10","K","J","Q");
        foreach ($this->shapes as $shape) 
        {
            foreach ($this->cards as $card) 
            {
                $this->deck[] = array("shape"=>$shape,"card"=>$card);            
            }
        }
        shuffle($this->deck);
        return $this->deck;
    }

    // -- 기능 : 카드 뽑아서 딜러와 플레이어에게 주는 기능
    public function fnc_pick_card($picker)
    {
        $pick = array_shift($this->deck);     
        $picker[] = $pick;                          // 덱에서 뽑은 카드를 딜러와 플레이어 배열에 추가해줌
    }

    // --기능 : 뽑은 카드에 점수 부여
    public function fnc_decide_score($picker,$score)       // 점수부여 함수 A면 11점 / K, Q, J, 10 이면 10점 / 2~9 는 각 숫자만큼 
    {
        for($i=0;$i<count($picker);$i++)           
        {
            if($picker[$i]["card"] === "A")
            {
                $score += 1;
            }
            else if
                    ($picker[$i]["card"] === "K"||
                    $picker[$i]["card"] === "Q"||
                    $picker[$i]["card"] === "J"||
                    $picker[$i]["card"] === "10"
                    )
            {
                $score += 10;
            }
            if($picker[$i]["card"] === "A" && $score <= 10 )
            {
                $score += 10;
            }
            for($card_num =2;$card_num<=9;$card_num++)
            {
                if ($picker[$i]["card"] === (string)$card_num)
                {
                    $score += $card_num;
                }
            }
        }
        return $score;
    }

    // --기능 : 점수가 21점일 때 블랙잭
    public function fnc_blackjack($dealer_score,$player_score)
    {
            if( $this->dealer_score === 21 ){
                echo "Dealer win";
            }else if($this->player_score === 21){
                echo "Player win";
            }
        
    }

    // --기능 : 게임결과 
    public function fnc_show_game_result($dealer_score,$player_score)
    {
        if($this->dealer_score < $this->player_score){
            echo "플레이어 승\n";
        }else if($this->dealer_score > $this->player_score){
            echo "딜러 승\n";
        }else if($this->dealer_score = $this->player_score){
            echo " 무승부\n";
        }
    }
    
    // 기능 : 21점 초과했을 때 패배 
    public function fnc_lose_over_score($dealer_score,$player_score)
    {
        if($this->dealer_score > 21)
        {
            echo "딜러가 패배하였습니다.";
        }
        else if($this->player_score>21)
        {   
            echo "플레이어가 패배하였습니다.";
        }
    }
    
    // 기능 : 딜러가 17점 이하면 1장 더 받는다. 
        public function fnc_pick_card_dealer($dealer_score)
        {
            if($this->dealer_score < 17){
                fnc_pick_card($dealer,$deck);
            }
        }
}

$obj_blackjack = new Blackjack;
$obj_blackjack->fnc_set_deck();
var_dump($deck);













?>