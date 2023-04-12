<?php
//  *****주의사항*****
// $_GET는 원본 데이터 이므로
// 값이 수정되지 않게 조심해야함. 


// GET method 
// 주로 데이터를 조회할 때 사용되는 메소드 
//   1. Query String에 키와 값을 셋팅 해준다. 
//   http://localhost/src/board_update.php?board_no=27&&page_num=1
//                                                  값을 더 넣고 싶을 경우 &로 연결하면 됨


// Get mehod로 넘어온 데이터를 담음
var_dump($_GET);
$post_get = $_GET;
$post_get["test1"];


?>