<?php
// 파일

// 파일을 여는 방법 : fopen(파일위치, 파일여는방식)
//          ./ : 현재 디렉토리에서 이동
//          ../ : 상위 디렉토리에서 이동

// $f_food = fopen("./sam/food.txt","r");
                                    //  "r" : 읽기 전용
                                    // "w" : 쓰기 전용으로 파일 열기 (포인터가 파일 시작부분,파일이 존재하면 내용을 삭제, 파일이 존재하지 않으면 파일을 생성)
                                    // "a" : 쓰기전용(포인터가 파일 끝 부분, 파일이 존재하지 않으면 파일 생성)



// var_dump($f_food);

//파일을 한 줄씩 읽어오는 방법 : fgets(open한 파일)

// print fgets($f_food);
// print fgets($f_food);
// print fgets($f_food);
// print fgets($f_food);
// print fgets($f_food);
// print fgets($f_food);


//루프ㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡ
// $f_food = fopen("./sam/food.txt","r");


// if($f_food){
//     while(($line = fgets($f_food)) !== false){
//         echo $line;
//     }
//     fclose($f_food);
// }


// while (!feof($f_food))              
// {
//     print fgets($f_food);
// }
// fclose($f_food);
// feof 함수는 파일의 끝에 도달했는지 여부를 확인하는 함수입니다. 
// 파일 포인터가 파일 끝에 도달하면 feof 함수는 true를 반환하고, 그렇지 않으면 false를 반환합니다.


// while($line = fgets($f_food))
// {
//     print $line;
// }
// fclose($f_food);



// 파일을 닫는 방법 : fclose (open한 파일)
// fclose($f_food);

//------------------------------------------------------------------------------


// 파일의 내용추가 : fputs( open한 파일, 추가할 내용fo )


$f_food = fopen("./sam/food.txt","a");


fputs( $f_food, "\n돈까스1" );        // 파일안에 추가할 때 앞부분에 개행을 넣어줌
fputs( $f_food, "\n돈까스2" );
fputs( $f_food, "\n돈까스3" );


fclose($f_food);


?>