
<?php
    // 1. GET method로 사용자가 입력한 데이터를 HTTP request를 한다.
    // 2. 입력한 데이터의 상세 내역은 아래와 같습니다. 
    // 2-1. key : id, pw, name, birth_date 
    // 3. echo를 이용해서 각각의 데이터를 출력해 주세요.


    //url 직접 입력
    // http://localhost/20_2_ex1_http_get_method.php?id=ff&pw=ff&name=ff&birth_date= 
?>


<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET Method</title>
</head>
<body>

    <form method="get" action="20_1_tng2_get_method.php">
        <label for="id">ID</label>
        <input type="text" name="id">
        <br>
        <label for="pw">PW</label>
        <input type="password" name="pw" >
        <br>
        <label for="name">NAME</label>
        <input type="text" name="name" >
        <br>
        <label for="birth_date">BIRTH_DATE</label>
        <input type="date" name="birth_date" >
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
