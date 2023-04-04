<?php



// 1~100 숫자 중 짝수의 합

// $sum=0;
// for($i=1;$i<=100;$i++)
// {
//     if($i%2 === 0)
//     {
//         $sum +=$i;
//     }
// }
// echo $sum;

// $sum=0;
// for($i=2;$i<=100;$i+=2)
// {
//         $sum +=$i;
// }
// echo $sum;

// $sum = 0;
// $i=1;
// while($i<=100)
// {
//     if($i%2 === 0)
//         {
//             $sum +=$i;
//         }
//     $i++;
// }
// echo $sum;

// $arr = array(
//     "a"=> 1
//     ,"b"=>2
//     ,"info"=>
//             array(
//                 "info_a"=>3
//                 ,"info_b"=>4
//                 ,"info_arr"=>
//                     array(
//                         "f_1"=>5
//                         ,"f_2"=>7
//                     )
//             )
//     );



//     echo $arr["info"]["info_a"]."\n";
//     echo $arr["info"]["info_arr"]["f_2"];


// $arr = array(
//      1
//     ,2
//     ,array(
//             "info_a"=>3
//             ,"info_b"=>4
//             ,"info_arr"=>
//                 array(
//                     "f_1"=>5
//                     ,"f_2"=>7
//                 )
//             )
//     );

// echo $arr[2]["info_arr"]["f_1"];

// function star($star)
// {
// for($i=1;$i<=$star;$i++)
// {
//     for($j=1;$j<=$i;$j++)
//     {
//         echo "*";
//     }
//     echo "\n";
// }
// }

// star(5);



function star($i)
{
    for($j=1;$j<=$i;$j++)
    {
        echo "*";
    }
    echo "\n";
}

function star_line($star)
{
    for($i=1;$i<=$star;$i++)
    {
    star($i);
    }
}

// star_line(5);

star(1);
star(2);
star(3);
star(4);
star(5);

?>
