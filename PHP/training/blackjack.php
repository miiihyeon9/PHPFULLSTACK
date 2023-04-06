<?php
include_once("./999_1_ex1_blackjack_fnc.php");
fscanf(STDIN, "%d\n", $input);     
while(true) 
{
	echo '시작';
	print "\n";
	if($input === 0) {                  //0입력시 종료
		break;
	}
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
        $dealer_score = 0;
        $player_score = 0;
        for($i=1;$i<=2;$i++)
        {
            pick_card($player,$deck); 
            pick_card($dealer,$deck);
        }
        echo "플레이어 : ".decide_score($player,$player_score)." ";
        echo "딜러 : ".decide_score($dealer,$dealer_score)."\n";
        // 딜러가 17점 이하일 때 한장 더 받아
        if($dealer_score<17)
        {
        pick_card($dealer,$deck);
        decide_score($dealer,$dealer_score);
        }
        // 두장 뽑아서 블랙잭일 때 승리 
        blackjack($dealer_score,$player_score);
        // 한장 더 뽑았는데 21점 넘으면 딜러 패배 
        over_score($dealer_score,$player_score);
        
        game_result($dealer_score,$player_score);
        echo "한장 더 뽑으시겠습니까? 0번 :종료, 1번 : 한번더 , 2번 :비교하기\n";
    }
        while( $input === 1 ){
            pick_card($player,$deck);
            decide_score($player,$player_score);
            over_score($dealer_score,$player_score);
            game_result($dealer_score,$player_score);
            break;
        }
        while( $input === 2 )
        {
            game_result($dealer_score,$player_score);
            break;
        }

    // if( $input === 1 )
// {
//     pick_card($player,$deck);
//     decide_score($player,$player_score);
// }
//     // 한장 더 받고 21장이 넘었을 때 패배
//     over_score($dealer_score,$player_score);
//     if($input === 2 )
//     {
//         game_result($dealer_score,$player_score);
//     }
//     break;
// }

// // 그게 아니면 점수를 비교해서 한장을 더 뽑을 껀지 





// while($input === 1) 
// {
//     fscanf(STDIN, "%d\n", $input);
 
//     echo "플레이어 : ".decide_score($player,$player_score)." ";
//     echo "딜러 : ".decide_score($dealer,$dealer_score)."\n";
//         game_result($dealer_score,$player_score);
// // 딜러가 17점보다 낮으면 1장 더 받는다. 
//     if($dealer_score<17)
//     {
//         pick_card($dealer,$deck);
//         decide_score($dealer,$dealer_score);
//     }

// over_score($dealer_score,$player_score);


// while(true) 
// {
// 	print "\n";
// 	fscanf(STDIN, "%d\n", $input);   
// }


    // if($dealer_score<17){
    //     pick_card($dealer,$deck);
    //     decide_score($dealer,$dealer_score);
    // }


    
    

    
//     blackjack($dealer_score,$player_score);
//     game_result($deal_score,$player_score);
    
//     // 21점이 초과했을 때

// //     카드 더받기
//     echo "카드를 한장 더 받으시겠습니까? 1번\n";







//     if($input === 1){
//         pick_card($player,$deck);
//         decide_score($player,$player_score);
//     }
// // 카드 한장 더 받고 나서 21점 초과 시 
// over_score($dealer_score,$player_score);

// //     //카드 비교
// echo "카드를 비교하시겠습니까? 2번";
//     if($input ===2){
//     echo "플레이어 : ".decide_score($player,$player_score)." ";
//     echo "딜러 : ".decide_score($dealer,$dealer_score)."\n";
//     }
// 	echo $input;
// 	print "\n";

//     if($dealer_score < $player_score){
//         echo "플레이어 승";
//     }else if($dealer_score > $player_score){
//         echo "딜러 승";
//     }else if($dealer_score = $player_score){
//         echo " 무승부";
//     }  
// echo "끝!\n";






