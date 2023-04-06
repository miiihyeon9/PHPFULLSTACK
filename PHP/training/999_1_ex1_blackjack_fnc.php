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
function fnc_lose_over_picker_score(&$dealer_picker_score,&$player_picker_score)
{
    if($dealer_picker_score > 21)
{
    echo "딜러가 패배하였습니다.";
}
else if($player_picker_score>21)
{   
    echo "플레이어가 패배하였습니다.";
}
}


// -- 기능 : 딜러가 17점 미만 카드 더 가져감
function fnc_take_card(&$dealer_picker_score)
{
    if($dealer_picker_score<17){
        pick_card($dealer,$deck);
        fnc_decide_score($dealer,$dealer_score);
    }
}



// 카드 수 적은 쪽이 승리
function victory_count_card()
{
    if($dealer_picker_score = $player_picker_score)
    {
        if(count($dealer) < count($player))
        {
            echo "딜러 승리 ";
        }else if(count($dealer) > count($player)){
            echo "플레이어 승리 ";
        }else{
            echo "드로우";
        }
    }
}



// 기능 : 21점일 때 블랙잭 
function fnc_blackjack(&$dealer_picker_score,&$player_picker_score)
{
        if( $dealer_picker_score === 21 ){
            echo "Dealer win";
        }else if($player_picker_score === 21)
        {
            echo "Player win";
        }
        
}






function fnc_show_game_result(&$dealer_picker_score,&$player_picker_score)
{
    if($dealer_picker_score < $player_picker_score){
        echo "플레이어 승\n";
    }else if($dealer_picker_score > $player_picker_score){
        echo "딜러 승\n";
    }else if($dealer_picker_score = $player_picker_score){
        echo " 무승부\n";
    }
}




// <!-- 

// include_once("./999_1_ex1_blackjack_fnc.php");
// fscanf(STDIN, "%d\n", $input);     
// while(true) 
// {
// 	echo '시작';
// 	print "\n";
// 	if($input === 0) {                  //0입력시 종료
// 		break;
// 	}
//     $player = array();
//     $dealer = array();
//     $deck= array();
//     $shapes = array("spade","clover","dia","heart");
//     $cards = array("A","2","3","4","5","6","7","8","9","10","K","J","Q");
//     foreach ($shapes as $shape) 
//     {
//         foreach ($cards as $card) 
//         {
//             $deck[] = array("shape"=>$shape,"card"=>$card);            // $deck 배열에  추가 
//         }
//     }
//     shuffle($deck);
//         $dealer_picker_score = 0;
//         $player_picker_score = 0;
//         for($i=1;$i<=2;$i++)
//         {
//             pick_card($player,$deck); 
//             pick_card($dealer,$deck);
//         }
//         echo "플레이어 : ".decide_picker_score($player,$player_picker_score)." ";
//         echo "딜러 : ".decide_picker_score($dealer,$dealer_picker_score)."\n";
//         // 딜러가 17점 이하일 때 한장 더 받아
//         if($dealer_picker_score<17)
//         {
//         pick_card($dealer,$deck);
//         decide_picker_score($dealer,$dealer_picker_score);
//         }
//         // 두장 뽑아서 블랙잭일 때 승리 
//         blackjack($dealer_picker_score,$player_picker_score);
//         // 한장 더 뽑았는데 21점 넘으면 딜러 패배 
//         over_picker_score($dealer_picker_score,$player_picker_score);
//         game_result($dealer_picker_score,$player_picker_score);
//         break;
// } -->


?>