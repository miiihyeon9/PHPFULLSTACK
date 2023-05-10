
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="check.php" method="post" >
        <fieldset>
        <label for="user_id" class="txt">아이디</label>
            <input type="text" name="user_id" id="user_id" autofocus required >
            <br>
            <label for="user_password" class="txt">비밀번호</label>
            <input type="password" name="user_password" id="user_password" class="user_password" required>
            <br>
            <button type="submit" class="btn">로그인</button>
        </fieldset>
    </form>
</body>
</html>