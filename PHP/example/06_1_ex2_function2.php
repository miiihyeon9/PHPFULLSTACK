<?php

// return 함수 : 리턴값이 있는
// 리턴이있다고 모두 리턴함수가 아님

function sum2($n1,$n2){
    return $n1+$n2;
}

sum2(3,4);
// echo sum2(3,4);



// void함수 : 리턴값이 없는 
// void함수는 함수만 작성해야함 앞에 echo 같은거 쓰면 안됨
// 값을 가져가는게 아님

function sum($n1, $n2){
    echo $n1 + $n2;
//  return을 쓸거면 return 뒤에 아무것도 들어오면 안됨

}                   // 함수를 선언했다. / 함수를 정의했다. 

sum(1,2);






?>
