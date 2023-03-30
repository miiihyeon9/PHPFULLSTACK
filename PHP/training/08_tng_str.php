<?php
// // "I am always hello." 에서 hello를 Happy로 바꾸어 출력하는 프로그램을 구현해 주세요

    // $str = "I am always Hello.";
    // $arr_expl = explode(" ",$str);

// print_r($arr_expl);
    // $cnt =count($arr_expl)-1;
    // if($arr_expl[$cnt]==="Hello."){
    //     $arr_expl[$cnt]="Happy.";
    // }

    // $str_all = "I am always Hello.";
    // $str_expl = explode("Hello",$str_all);
    // $str_impl = implode("Happy",$str_expl);

// $result_str = 

// function my_str_replace($pram_str,$result_str){
//     $str_all = "I am always Hello.";
//     $str_expl = explode($pram_str,$str_all);
//     $result_str= implode($result_str,$str_expl);
//     echo $result_str;
//     return $result_str;
// }
// my_str_replace("Hello","Happy");

$str_all = "I am always Hello.";
function my_str_replace($pram_str,$param_separator,$param_ch){
    
    $arr_expl = explode($param_separator,$pram_str);
    $result_str= implode($param_ch,$arr_expl);
    echo $result_str;
    return $result_str;
}
// my_str_replace($str_all,"Hello","Happy");


// PHP함수 자리바꿈

echo str_replace("Hello","Happy",$str_all);



// // print_r($arr_expl);
    // $str_impl = implode(" ",$arr_expl);
    // echo $str_impl;





?>
