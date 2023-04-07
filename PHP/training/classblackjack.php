<?php

class Blackjack
{
    private $deck;              //덱
    private $player;            // 플레이어 카드
    private $dealer;            // 딜러 카드
    private $dealer_score;      // 딜러 점수
    private $player_score;      // 플레이어 점수
    private $shapes;            // 카드 모양
    private $cards;
    private $picker;             // 카드 숫자

    public function __construct()
    {
        $this->deck;
        $this->player;
        $this->dealer;
        $this->picker;
        $this->dealer_score;
        $this->player_score;
        $this->shapes = array("spade","clover","dia","heart");
        $this->cards = array("A","2","3","4","5","6","7","8","9","10","K","J","Q");

    }
    // -- 기능 : 덱 구성
    public function fnc_set_deck()
    {   
        foreach ($this->shapes as $shape) 
        {
            foreach ($this->cards as $card) 
            {
                $this->deck[] = array("shape"=>$shape,"card"=>$card);            
            }
        }
        shuffle($this->deck);
        // var_dump($this->deck);
    }

    // -- 기능 : 카드 뽑아서 딜러와 플레이어에게 주는 기능
    public function fnc_pick_card(&$picker)
    {
        $pick = array_shift($this->deck);     
        $picker[] = $pick;                          // 덱에서 뽑은 카드를 딜러와 플레이어 배열에 추가해줌
    }

    // --기능 : 뽑은 카드에 점수 부여
    public function fnc_decide_score(&$picker,&$score)       // 점수부여 함수 A면 11점 / K, Q, J, 10 이면 10점 / 2~9 는 각 숫자만큼 
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
    public function fnc_blackjack(&$dealer_score,&$player_score)
    {
            if( $this->dealer_score === 21 ){
                echo "Dealer win";
            }else if($this->player_score === 21){
                echo "Player win";
            }
    }

    // --기능 : 게임결과 
    public function fnc_show_game_result(&$dealer_score,&$player_score)
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
    public function fnc_lose_over_score(&$dealer_score,&$player_score)
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
    
    // 기능 : 딜러가 17점보다 낮으면 1장 더 받는다. 
        public function fnc_pick_card_dealer(&$dealer_score)
        {
            if($this->dealer_score < 17){
                fnc_pick_card($this->dealer,$this->deck);
            }
        }
}
echo "게임을 시작합니다. 1번을 눌러주세요.";
fscanf(STDIN, "%d\n", $input); 
while(true)
{
    if($input === 0) {
        break;
    }
    if(!($input === 0 || $input === 1 || $input ===2))
    {
        echo "0번 1번 2번 중에 눌러주세요."."\n"."0번 : 종료"."\n"."1번 : 시작"."\n"."2번 : 비교하기";
    }  
    if($input === 1)
    {
        $obj_blackjack = new Blackjack();
        $obj_blackjack->fnc_set_deck();
        $obj_blackjack->fnc_pick_card($dealer);
        $obj_blackjack->fnc_pick_card($player);
        $obj_blackjack->fnc_pick_card($dealer);
        $obj_blackjack->fnc_pick_card($player);
        $obj_blackjack->fnc_lose_over_score($dealer_score,$player_score);
        $obj_blackjack->fnc_blackjack($dealer_score,$player_score);
        $obj_blackjack->fnc_show_game_result($dealer_score,$player_score);
        echo "게임을 계속 진행하시겠습니까?"."\n"."0번 : 종료"."\n"."1번 : 카드 더 받기"."\n"."2번 : 비교하기\n";
        break;
    }
}
while(true)
{
    fscanf(STDIN, "%d\n", $input); 
    if($input === 0) 
    {
        $obj_blackjack->fnc_show_game_result($dealer_score,$player_score);
        break;
    }
    if($input === 1)
    {
        $obj_blackjack->fnc_pick_card($player,$deck);
        $obj_blackjack->fnc_pick_card($dealer,$deck);
        $obj_blackjack->fnc_decide_score($player,$player_score)." ";
        $obj_blackjack->fnc_decide_score($dealer,$dealer_score)."\n";
        echo "비교하시겠습니까? 2번";
    }
    if($input === 2)
    {
        $obj_blackjack->fnc_lose_over_score($dealer_score,$player_score);
        $obj_blackjack->fnc_show_game_result($dealer_score,$player_score);
    break;
    }
}
echo "끝!\n";


















?>