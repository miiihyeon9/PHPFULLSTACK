<?php
define("QUERY",$_SERVER["DOCUMENT_ROOT"]."/src/PHP/query.php");
include_once(QUERY);


?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
    <form action="loginCheck.php" method="post" >
        <fieldset>
        <legend>로그인</legend>
        <p>
            <label for="user_name" class="txt">아이디</label>
            <input type="text" name="user_name" id="user_name" class="u_id" autofocus>
            <br>
            <span class="err_id"></span>
        </p>

        <p>
            <label for="user_password" class="txt">비밀번호</label>
            <input type="password" name="user_password" id="user_password" class="user_password">
            <br>
            <span class="err_pwd"></span>
        </p>

        <p class="btn_wrap">
            <button type="button" class="btn" onclick="history.back()">이전으로</button>
            <button type="submit" class="btn">로그인</button>
        </p>
        </fieldset>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>