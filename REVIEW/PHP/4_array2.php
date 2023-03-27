<?php
// 연상배열
// key 를 가지고 배열의 값을 가져온다. 
// $arr_ass= array(
//                 "중식"=> "짜장면"
//                 ,"양식"=>"스테이크"
//                 ,"한식"=>"비빔밥"
//                 ,"일식"=>"초밥"
// );

//     echo $arr_ass["중식"];

// // 원소삭제
// // 키 값 자체가 사라짐

// unset($arr_ass["양식"]);
// var_dump($arr_ass);

// foreach 반복문

//array_diff 앞 배열과 뒤에 있는 배열을 비교했을 때 앞 배열 중 뒤 배열과 겹치지 않는 것을 반환

// asort(); : 알파벳 오름차순
// arsort(); : 알파벳 내림차순
// ksort(); : 한국어 오름차순
// krsort(); : 한국어 내림차순

// foreach($arr as $key => $value)


// foreach 문을 이용해서 키가 "삭제"해 주세요.
$food = array
(
    "bibimbap"=>"rice"
    ,"sandwich"=>"bread"
    , "삭제" => "값값"
    ,"chicken"=>"chicken"
    ,"latte"=>"milk"
);

foreach($food as $key =>$value)
        {
            if($key==="삭제")
            {
                unset($food[$key]);
            }
            else{
                echo $key." : ".$value."\n";
            }
        }

        var_dump($food);
?>
