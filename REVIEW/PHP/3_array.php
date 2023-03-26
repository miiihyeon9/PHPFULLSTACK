<?php

// 배열은 0 부터 시작함
// $week = array("Mon","Tue","Wed","Thu","Fri","Sat","Sun");
//                0      1     2     3     4     5     6
// $result =$week[3];

// echo $result."\n";

// $weekend = array($week[5],$week[6]);

// $re_weekend = $weekend[0]." ".$weekend[1];

// echo $re_weekend;

// 연상배열

// $dept_manager = array(
//                     "Marketing"=>"gaga"
//                     ,"Customer Service"=>"nana"
//                     ,"Finance"=>"MiHyeon"
                            // key => value
//                     ,"Sales"=>"soso");

// var_dump($dept_manager);
// 다차원 배열
// $twod_array= array
//             (
//             array(1,2,3)
//             ,array(4,5,6)
//             ,array(7,8,9)
//             );

// echo $result = $twod_array[0][2]; 
                    // [0] : 1번째 array [2] : 첫번째 array 에서 3번째 있는 수

// $A = array
//     (
//     array(1,2,3)
//     , array(2,1,2)
//     , array(3,2,1)
//     );

// $B = array
//     (
//     array(3,2,1)
//     , array(2,1,2)
//     , array(1,2,3)
//     );

//     for($i=0; $i<3; $i++)
//     {
//         for ($j=0; $j<3; $j++)
//         {
//             $C[$i][$i]=$A[$i][$j]+$B[$i][$j];
//             echo $C[$i][$i]." ";
//         }
//         echo "\n";
//     }


    // 반복문 안에서 설정한 변수는 밖에서 사용 불가

// $fruit = array
//     (
//     "Apple"
//     , "Banana"
//     ,"Pear" =>array("Brown","Yellow")
//     ,"Grape" => array("purple","Green")
//     );
//     // unset($fruit["Pear"]);
//     // fruit 배열 중 Pear 제거
//     var_dump($fruit);


// foreach : 반복문의 일종 .
// 배열의 반복명령을 수행할 때 주로 사용

// $fruits = array
//     (   
//         "Apple" => "red"
//         ,"Banana" => "Yellow"
//         ,"Grape" => "Purple"
//     );

// foreach($fruits as $color)
// {
//     echo $color."\n";
// }

// array_diff : 둘 이상의 배열을 비교할 때 사용
// array1에는 있지만 array2에는 없는 배열의 값을 반환함

// $AtoF = array
//     (
//         "A"
//         ,"B"
//         ,"C"
//         ,"D"
//         ,"E"
//         ,"F"
//     );

// $AtoC = array
//     (
//         "A"
//         ,"B"
//         ,"C"
//     ) ;

// $EtoF = array
//     (
//         "E"
//         ,"F"
//     );

//     $result = array_diff($AtoF,$AtoC,$EtoF);
//     var_dump($result);

//     echo "result = ";
//     foreach($result as $value){
//         echo $value;
//     }


    $eat = array 
    (
        "veg"=>array("tomato","potato")
        , "fruit" => array("apple","banana")
        , "drink" => array("coke","alchol")
        , "junk"=>array("chicken","hamburger")
    );

    $instunt = array
    (
        "junk"=>array("chicken","hamburger")
    );

        $result = array_diff($eat,$instunt);
        var_dump($result);
        foreach($result as $value)
        {
            echo $value;
        }

?>