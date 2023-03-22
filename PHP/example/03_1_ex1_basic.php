<?php
    // print "안녕하세요.\n";
    
    // print("안녕하세요. 괄호입니다.\n");

    // echo "안녕하세요. 에코입니다.\n";
// print는 리턴값이 있고 (정수 0과 1), echo는 리턴값이 없음
// print보다 echo가 속도가 조금 더 빨라서 echo 많이 사용
// var_dump () : 출력하고자하는 것의 모든 데이터를 보여줌  
// \n : 개행


    // $test_num = "변수입니다";
    // 변수 앞에 $
    // 변수 첫 문자로 숫자 불가능
    // 영어, 숫자, '_' 로 이루어진다

   

    // 네이밍 기법
    // 1. 카멜 기법 : 낙타의 등처럼 단어의 첫글자를 대문자 나머지는 소문자로 작성하는 기법
    // ex) $testNum
    // 2. 스네이크 기법 : 뱀을 연상하고, 단어와 단어 사이를 언더바로 작성하고 전부 소문자로 작성하는 기법
    // ex) $test_num

    // echo "점심메뉴 \n";
    // echo "탕수육 8,000\n";
    // echo "짜장면 6,000\n";
    // echo "짬뽕 6,000\n";




    // $tang = "탕수육";
    // $zza = "짜장면";
    // $zzam = "짬뽕";
    // $blank =" ";
    // $line ="\n";
    // $price_8000 = "8,000";
    // $price_6000 = "6,000";


    // echo "점심메뉴 \n";
    // echo $tang.$blank.$price_8000.$line;
    // echo $zza.$blank.$price_6000.$line;
    // echo $zzam.$blank.$price_6000;

    $tang = "탕수육 8,000\n";
    $zza = "짜장면 6,000\n";
    $zzam = "짬뽕 6,000";

    echo "점심메뉴\n";
    echo $tang;
    echo $zza;
    echo $zzam;


    // echo ("점심메뉴\n탕수육 8,000\n짜장면6,000\n짬뽕 6,000");

    
?>