<?php




session_name("kim");

session_start();
var_dump($_SESSION);
var_dump($_COOKIE);
var_dump(session_id());
// 쿠키에 세션 ID가 자동으로 저장됨. 
?>