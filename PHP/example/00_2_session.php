<?php
//! SESSION
// 괴이이이잉장히 많이 사용
$user_id = "php506";
$user_pw = "506";

//session명 지정, 지정하지 않으면 "PHPSESSID"로 지정
session_name("kim");

session_start();
//----유저 인증 ----
// 생략 
// 아이디만 저장, 패스워드 저장 절대 x
//-----------------

// session에 데이터 저장 

$_SESSION["id"] = $user_id;
$_SESSION["del"] = "delete";




?>