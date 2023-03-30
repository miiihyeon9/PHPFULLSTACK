<?php

// min, max, floor, round, ceil, rand
// echo floor(4.9)."\n";
// $arr= array(1,5,6,54,3,7);
// echo min($arr)."\n";
// echo max($arr)."\n";
// 모르면? 구글링이다
// 구체적인 정보 : php 사이트

// 날짜함수
// echo time()."\n";        // 1970년 1월 1일부터 지금까지 몇초가 흘렀나~

// echo date('Y-M-D H:i:s')."\n"; // =MariaDB  DATETIME() 형식

// echo date('y-m-d h:i:s')."\n";

// echo date('y-m-d h:i:s l')."\n";

// echo mt_rand(0,10)."\n";

// var_dump($GLOBALS);      :여기에 나오는 거로 변수이름 설정안됨
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


// phpinfo(); php 정보 

// define() : 상수 정의 
// 상수 :변하지 않고, 항상 일정한 값을 갖는 수
// define("INT_ONE",1) ; // 이름 지정할 때 반드시 대문자로 작성해야함
//                       // 실수를 줄이기 위해 사용
// echo INT_ONE;


// 문자열 합치기
// $str_1= "aa";
// $str_2 ="bb";
// $str_sum = $str_1.$str_2;
// echo $str_sum."\n";

// 대소문자 변환
// $alpha= "ABCDEF";
// echo strtolower($alpha)."\n"; // 소문자로 변환
// $alpha_u ="abc def";
// echo strtoupper($alpha_u)."\n"; // 대문자로 변환

// echo ucfirst($alpha_u)."\n";// 앞 글자만 대문자로

// echo ucwords($alpha_u)."\n"; // 각 단어의 앞글자

//URL : Uniform Resource Locator : World Wide Web

// $url = "https://www.google.com/";
// $arr_url = parse_url($url);

// var_dump($arr_url);

// parse_str($arr_url["query"],$arr_parse);
//                         ,output -reference

// var_dump($arr_parse);

// 역순의 문자열 
// $str_abcd = "abcd";
// echo strrev($str_abcd);
// 어따써? 왜 써? 한글은 안됨

// 문자열 자르기
// substr() 1byte문자열에만 해당 
// $str_1 = "가나다라";
// $str_2 = "abcd";
// echo mb_substr($str_1,6); // 뒤에 있는 숫자는 바이트수만큼 한글이면 1글자당 3바이트씩 해서 계산해주어야함 -> mb_substr 사용 (멀티 바이트)
// echo mb_substr($str_2,2); substr(변수, 시작점, 얼마나 잘라낼건지);
// 음수를 설정하면 뒤에서부터 자름 

// //
// $str_tng = "안녕하세요. PHP입니다.";
// // "PHP입니다." 출력
// echo mb_substr($str_tng,7,7)."\n";
// echo mb_substr($str_tng,-7,7)."\n";
// echo mb_substr($str_tng,-7)."\n";

// // "세요.P" 출력
// echo mb_substr($str_tng,3,5)."\n";
// echo mb_substr($str_tng,-11,5)."\n";


// 문자열 빈공간 지우기

// $str_trim = "            abcd                ";

// echo trim($str_trim)."\n";
// echo rtrim($str_trim)."\n";
// echo ltrim($str_trim)."\n";



// 문자열의 길이 구하는 함수
// $str_len = "가나다라";
// echo mb_strlen($str_len);

// 문자열 포맷에 따라 출력하는 함수
// printf("안녕하세요. %s입니다. %d", "PHP",10);
//         %s:  문자열이 여기 들어갑니다.
//          %d : 숫자가 여기 들어갑니다
//          차례대로 작성해주어야하ㅏㅏㅁ

// define("WELCOME","안녕하세요. %s님");
// printf(WELCOME,"홍길동");

// 기본 포맷 : ERROR(숫자) : XXX ERROR가 발생했습니다. 
// 에러 번호 : 에러종류
// 1 : 시스템
// 2 : 로그인 오류
// 3 : 접속

// define("ERROR_MSG","ERROR(%d) : %s ERROR가 발생했습니다.");
// printf(ERROR_MSG, 1 ,"시스템");
// echo "\n";
// printf(ERROR_MSG, 2 ,"로그인 오류");
// echo "\n";
// printf(ERROR_MSG, 3 ,"접속");

// // 문자열을 분리하는 함수
// $str_sscanf = "가나다라 50 abcd";
// sscanf($str_sscanf, "%s %d %s", $str_ko, $int_d, $str_en);
// // 문자열을 지정한 포맷을 적어주고 각각에 변수명을 지정해줌 
// echo $str_ko, "\n", $int_d, "\n", $str_en, "\n";

// 문자열을 반복해서 찍어주는 함수
// echo str_repeat("*",2);

// 문자열을 특정 문자열로 분리하는 함수(현업에서 꽤 많이 사용함) explode()
$str_expl = "홍길동, 27세, 남자, 의적, 조선";
$arr_expl = explode(",",$str_expl);
// print_r ($arr_expl);

// 배열을 특정 문자열로 합치는 함수 : implode()
$str_impl = implode("123",$arr_expl);

echo $str_impl;



?>