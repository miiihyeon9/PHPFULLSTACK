<?php
//! cookie 작성
//  자동로그인 이용 


// string 형태로만 저장 
// 512MB or256MB만 저장 가능 (넘으면 짤림)

setcookie("name","Kim mihyeon", time()+ 300 );
setcookie("age","26", time()+ 300 );

//  쿠키 삭제
setcookie("age","",0);
// echo $_COOKIE["name"];

?>