<?php


// $test = ['name' => '김미현',
//         'age'   => 25];

// var_dump($test);


// $two_gugudan = '2단';

// echo $two_gugudan."\n";

// for($i = 1; $i < 10 ; $i++){
//     echo '2 * '.$i .' = '. 2*$i."\n"; 
// }



// for($i = 2; $i < 10 ; $i++){
//     echo $i.'단'."\n";
//     for($j = 1; $j < 10; $j++){
//         echo $i.' * '.$j.' = '. $i * $j."\n";
//     }
// }

// for($i = 2; $i <= 9; $i++){
//     echo $i."단"."\n";
//     for($j = 1; $j <=9; $j++){
//         echo $i ." * ".$j.' = '.$i*$j."\n";
//     }
// }




// for($num=2;$num<=9;$num++)
// {
//     echo $num."단"."\n";
//     for($i=1;$i<=9;$i++)
//     {
//         echo $num." * ".$i." = ".$num*$i."\n";
//     }
    
// }

$count = 5;

for($i = 1; $i<= $count; $i++){
    for($j = 1; $j <= $i ; $j++){
        echo "*";
    }
    echo "\n";
}
?>