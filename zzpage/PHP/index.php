<?php



session_start();
session_id();       // 세션 아이디 출력
// // var_dump($session);


// if(isset($_SESSION["user_id"])){
//     $_SESSION["user_id"]="";
// }

// var_dump($_SESSION["user_id"]);


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
    <div>반갑습니다. <?php echo $_SESSION["user_id"]."님" ?> </div>
    <a href="logout.php">로그아웃</a>
</body>
</html>