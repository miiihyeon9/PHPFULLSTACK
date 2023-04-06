<?php




$card_num = array();
for($j=0;$j<4;$j++){
    for ($i=1; $i < 14; $i++) { 
        if($i === 1){
            $card_num[$j][$i] = 'a';
        }else if($i === 11){
            $card_num[$j][$i] ='K';
        }else if($i === 12){
            $card_num[$j][$i] ='J';
        }
        else if($i === 13){
            $card_num[$j][$i] ='Q';
        }else{
            $card_num[$j][$i] = $i;
        }
        // echo $card_num[$i];
    }
    // echo "\n";
}

$arr = array_merge(...$card_num); // 다차원 배열 1차원으로 병합
shuffle($arr); //카드 섞음
$player = array();//플레이어 저장공간
$dealer = array();//딜러 저장공간

print_r($arr);

$player = array_rand($arr,2);//player 카드 2장 나눠줌
$dealer = array_rand($arr,2);
print_r($player);

unset($arr[$player[0]]);
unset($arr[$player[1]]);
unset($arr[$dealer[0]]);
unset($arr[$dealer[1]]);

print_r($arr);




// if($player_str1 === 'K' || $player_str1 === 'Q' ||$player_str1 ==='J')
// {
//     $player_str1 = 10;
// } if($player_str2 === 'K' || $player_str2 === 'Q' ||$player_str2 ==='J')
// {
//     $player_str2 = 10;
// } if($dealer_str1 === 'K' || $dealer_str1 === 'Q' ||$dealer_str1 ==='J')
// {
//     $dealer_str1 = 10;
// } if($dealer_str2 === 'K' || $dealer_str2 === 'Q' ||$dealer_str2 ==='J')
// {
//     $dealer_str2 = 10;
// } 

// if($player_str1 === 'a'){
//     $player_str1 = 1;
// } 
// if($player_str2 === 'a'){
//     $player_str2 = 1;
// } 
// if($dealer_str1 === 'a'){
//     $dealer_str1 = 1;
// } 
// if($dealer_str2 === 'a'){
//     $dealer_str2 = 1;
// }

?>