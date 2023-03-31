<?php


// 파일을 가져와서

$f_food = fopen("../example/sam/food.txt","a");

// // 배열로 정렬해서
// $food=file("../example/sam/food.txt","r+");      //file함수 : 파일을 한줄을 기준으로 배열로 나눔
// // print_r($food);


// // 추가하고


// array_splice($food,5,0,"스테이크\n");
// print_r($food);



// // 합쳐
// $food_impl=implode("",$food);

// echo $food_impl;

// fclose($f_food);



//------------------------------------------------------------------

// while(!feof($f_food))
// {
//     print fgets($f_food);
//     $find_fgets=fgets($f_food);
//     if($find_fgets==="국밥")
//     {
//         fputs($f_food,"스테이크");
//     }
// }
$f_food=fopen("../example/sam/food.txt","a");
$f_food2 = file("../example/sam/food.txt");
$print_food = "";

foreach($f_food2 as $val)
{
    if($val === "국밥")
    {
        $print_food.="스테이크\n";
    }
    else{
        $print_food.=$val;
    }
}

print $print_food;
fputs($f_food,$print_food);




fclose($f_food);

?>