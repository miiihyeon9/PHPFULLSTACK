<?php
// 로또
$arr = array();
for($i=0; $i<6; $i++){
    $arr[$i]=mt_rand(1,45);
    for($j=0;$j<$i;$j++){
        if($arr[$i] === $arr[$j]){
            $i--;
        }
    }
}
sort($arr);
print_r($arr);


?>
