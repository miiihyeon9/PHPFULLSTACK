<?php
define("SRC_ROOT", $_SERVER["DOCUMENT_ROOT"]."/login/");
define("URL_DB", SRC_ROOT."PHP/query.php");
include_once(URL_DB);

$http_method = $_SERVER["REQUEST_METHOD"];


if($http_method === "POST"){
    $arr_post = $_POST;

    $arr_log = 
    array(
        "user_id"        => $arr_post["user_id"]
        ,"user_password"    => $arr_post["user_password"]
    );

    $result = login($arr_log);

    if( ($arr_post["user_id"] === $result["user_id"] ) &&
        ($arr_post["user_password"] === $result["user_password"]) )
    {
        session_start();    // 세션 시작
        $session = $_SESSION;
        $session["user_id"] = $result["user_id"];
        // session_id();       // 세션 아이디 출력
            // var_dump($session);
        
    }
    // else{
    //     header("Location : join_member.php");
    // }
}

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
        <div class="log"> 반갑습니다. <?php echo $session['user_id'] ?> 님</div>
        <a href="logout.php">로그아웃</a>
</body>
</html>