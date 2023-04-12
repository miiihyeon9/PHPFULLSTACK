<?php


// POST Method      form태그로 보내는 방법밖에 없음
// - 주로 새로운 데이터를 생성할 때 사용되는 메소드
// - 멱등성(idempotent)을 가지지 않습니다.

// request할 때의 데이터를 외부에서 볼 수 없음 
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
    <!-- form Tag로 request -->
    <form method="post" action="20_2_ex1_httppost.php" >
        <input type="text" name="p_test1">
        <br>
        <input type="text" name="p_test2">
        <br>
        <input type="text" name="p_test3">
        <br>
        <input type="hidden" name="p_hidden1" value="aaa" >

        <button type="submit" >Submit</button>
    </form>
</body>
</html>