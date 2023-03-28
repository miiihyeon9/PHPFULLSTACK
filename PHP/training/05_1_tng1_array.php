<?php
// 음식 종류 5개 이상을 배열로 만들어 주세요
// var_dump는 전체를 보여주기 때문에 유저에게 보여줄 때는 사용해서는 안됨

// $food = array("orange","apple","grape","pear","banana");
// echo $food[3];



// array $food 무작위
// echo $food[rand(0,4)]."\n";

// $rand_num= rand(0,4);

// echo $food[$rand_num];

// key 는 요리명 value는 주재료 하나로 이루어진 배열

// $food = array
// (
//     "bibimbap"=>"rice"
//     ,"sandwich"=>"bread"
//     ,"chicken"=>"chicken"
//     ,"latte"=>"milk"
// );

// $arr_ass_food = array
// (
//     "bibimbap"=>"rice"
//     ,"sandwich"=>"bread"
//     ,"chicken"=>"chicken"
//     ,"latte"=>"milk"
// );

// echo $arr_ass_food["sandwich"];





// $arr_ass_del = array(
//                 "된장찌개" => "파"
//                 ,"볶음밥" => "양파"
//                 ,"김치"=>"마늘"
//                 ,"비빔밥"=>"참기름"
//                 );


//     unset(
//         $arr_ass_del["김치"],$arr_ass_del["볶음밥"]
//         );


// print_r($arr_ass_del);  



$food = array
(
    "bibimbap"=>"rice"
    ,"sandwich"=>"bread"
    , "삭제" => "값값"
    ,"chicken"=>"chicken"
    ,"latte"=>"milk"
);

// foreach 문을 이용해서 키가 "삭제"해 주세요.

foreach($food as $delete =>$val)
    {
        if($delete === "삭제")
        {
            unset($food[$delete]);
        }
        else
        {
        echo $delete." : ".$val."\n";
        }
    }

print_r($food);
var_dump($food);




?>