<?php
define("ROOT",$_SERVER["DOCUMENT_ROOT"]."/BOARD/");
define("URL_FNC",ROOT."function.php");
include_once(URL_FNC);
$arr_get = $_GET;

$detail = select_board_no($arr_get);

// print_r($detail);
var_dump($_SERVER);
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>detail</title>
</head>
<body>
    <div class="container">
        <div>게시물 번호</div>
        <div><?php echo $detail["board_no"] ?></div>
        <div>게시물 작성일</div>
        <div><?php echo $detail["board_write_date"] ?></div>
        <div>게시물 제목</div>
        <div><?php echo $detail["board_title"] ?></div>
        <div>게시물 내용</div>
        <div><?php echo $detail["board_contents"] ?></div>
    </div>
</body>
</html>