<?php

// min, max, floor, round, ceil, rand
echo floor(4.9)."\n";
$arr= array(1,5,6,54,3,7);
echo min($arr)."\n";
echo max($arr)."\n";
// 모르면? 구글링이다
// 구체적인 정보 : php 사이트

// 날짜함수
echo time()."\n";        // 1970년 1월 1일부터 지금까지 몇초가 흘렀나~

echo date('Y-M-D H:i:s')."\n"; // =MariaDB  DATETIME() 형식

echo date('y-m-d h:i:s')."\n";

echo date('y-m-d h:i:s l')."\n";

echo mt_rand(0,10)."\n";

// var_dump($GLOBALS);      :여기에 나오는 거로 변수이름 설정안됨
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


// phpinfo(); php 정보 

// define() : 상수 정의 
// 상수 :변하지 않고, 항상 일정한 값을 갖는 수
define("INT_ONE",1) ; // 이름 지정할 때 반드시 대문자로 작성해야함
                      // 실수를 줄이기 위해 사용
echo INT_ONE;


// 문자열 합치기
$str_1= "aa";
$str_2 ="bb";
$str_sum = $str_1.$str_2;
echo $str_sum."\n";

// 대소문자 변환
$alpha= "ABCDEF";
echo strtolower($alpha)."\n"; // 소문자로 변환
$alpha_u ="abc def";
echo strtoupper($alpha_u)."\n"; // 대문자로 변환

echo ucfirst($alpha_u)."\n";// 앞 글자만 대문자로

echo ucwords($alpha_u)."\n"; // 각 단어의 앞글자

//URL : Uniform Resource Locator : World Wide Web

$url = "https://www.google.com/";
$arr_url = parse_url($url);

var_dump($arr_url);

// parse_str($arr_url["query"],$arr_parse);
//                         ,output -reference

// var_dump($arr_parse);



?>