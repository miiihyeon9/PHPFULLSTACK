<?php
include_once("./999_1_ex1_blackjack_fnc.php");
//블랙잭 게임
//-카드 숫자를 합쳐 가능한 21에 가깝게 만들면 이기는 게임



// array_merge 배열 합병
// array_rand 배열 중 랜덤으로 하나 추출
// array_shift 이동하다 요소가 어래이 시작점?
// range 어레이 만든다. 요소의 범위가 포함된
// shuffle 배열 섞음
// array_splice 배열 원소값 제거해주고 인덱스 값도 자동으로 줄여줌 



// $card = array("spade" =>
// array("A","2","3","4","5","6","7","8","9","10","K","Q","J")
// , "clover" =>
// array("A","2","3","4","5","6","7","8","9","10","K","Q","J")
// , "dia" =>
// array("A","2","3","4","5","6","7","8","9","10","K","Q","J")
// ,"heart" =>
// array("A","2","3","4","5","6","7","8","9","10","K","Q","J")
// );
$player = array();
$dealer = array();

$shapes = array("spade","clover","dia","heart");
$cards = array("A","2","3","4","5","6","7","8","9","10","K","J","Q");
foreach ($shapes as $shape) 
{
    foreach ($cards as $card) 
    {
    $deck[] = array("shape"=>$shape,"card"=>$card);            // $deck 배열에  추가 
    }
}


//1. 게임 시작시 유저와 딜러는 카드를 2개 받는다.
// 카드를 섞어서 딜러와 플레이어 한테 두 장씩 부여 
// array_shift 함수는 배열의 원소를 이동시키고 인덱스값을 정렬해줌
shuffle($deck);

$dealer_score = 0;
$player_score = 0;


pick_card($player,$deck);
pick_card($player,$deck);

pick_card($dealer,$deck);
pick_card($dealer,$deck);
decide_score($player,$player_score);
decide_score($dealer,$dealer_score);




// 1-1. 이때 유저 또는 딜러의 카드 합이 21이면 결과 출력
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
//2. 카드 합이 21을 초과하면 패배

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

// 4-3. A는 1점 또는 11점 둘 중의 하나로 계산

//5. 카드의 합이 같으면 다음의 규칙에 따름
// 5-1. 카드수가 적은 쪽이 승리
// 5-2. 카드수가 같을경우 드로우                                                  (스페이드>크로버>다이아>하트 순)
//6. 유저가 카드를 받을 때 딜러는 아래의 규칙을 따른다.
// 6-1. 딜러는 카드의 합이 17보다 낮을 경우 카드를 더 받음
// 6-2. 17 이상일 경우는 받지 않는다.
//7. 1입력 : 카드 더받기, 2입력 : 카드비교, 0입력 : 게임종료
// 2를 입력하면 비교하고 다시 
// 0을 입력하거나 카드가 없는 경우 게임 종류 



// while(true) {
// 	echo '시작';
// 	print "\n";
// 	fscanf(STDIN, "%d\n", $input);        
// 	if($input === 0) {
// 		break;
// 	}
// 	echo $input;
// 	print "\n";
// }
// echo "끝!\n";



?>