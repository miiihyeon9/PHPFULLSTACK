<?php
// http method 
// 클라이언트 -> 웹서버 연결에서 http method
//                              get방식, post 방식 
// 웹서버 -> application Server ( PHP )

//  *****주의사항*****
// $_GET는 원본 데이터 이므로
// 값이 수정되지 않게 조심해야함. 


// GET method 
//   1. Query String에 키와 값을 셋팅 해준다. 
//   http://localhost/src/board_update.php?board_no=27&&page_num=1
//                                                  값을 더 넣고 싶을 경우 &로 연결하면 됨





//   2. form태그를 이용하는 방법 
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- form tag이용하는 방법 -->
    <form method="get" action="20_1_ex_httpget.php">
        <!-- method는 어떻게 데이터를 보낼지  action은 어디로 데이터를 보낼지 -->
        <input type="text" name="test1" value="testValue1" >
        <input type="text" name="test2" value="testValue2" >
        <button type="submit">Submit</button>
    </form>
    <!-- form태그는 http://localhost/20_1_ex_httpget.php?test1=testValue1 쳐주는 것과 같음 -->
    
    <a href="http://localhost/20_1_ex_httpget.php?test1=testValue1&test2=testValue2"> a 태그</a>



</body>
</html>