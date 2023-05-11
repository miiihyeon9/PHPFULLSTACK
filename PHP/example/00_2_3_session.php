<?php

// 세션의 아이디를 쿠키의 키로 설정 
session_name("kim");
session_start();

// session 파기 
// session_destroy();// 접속 자체가 안됨

//session 정보 삭제
// 세션이 파기되는것은 아님
// session_unset();    // session의 전체 정보 삭제
unset($_SESSION["del"]); // session의 특정 요소 삭제



?>