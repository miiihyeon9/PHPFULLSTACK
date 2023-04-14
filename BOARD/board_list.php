<?php
define("ROOT",$_SERVER["DOCUMENT_ROOT"]."/BOARD/");
define("URL_FNC",ROOT."function.php");
include_once(URL_FNC);

// board_del_flg = '0'인 데이터 가져오기
$bring_list = select_board();

// 페이징 
// $http_method = $_SERVER["REQUEST METHOD"];
// var_dump($http_method);


$limit_num = 3;
$offset = 0;
$param_arr = array( "limit_num" => $limit_num
        ,"offset"   => $offset );
print_r(select_board_info( $param_arr ));



// $bring_list = select_board_info($param_arr);
// print_r ($bring_list);

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
    <table>
        <tr>
            <th>게시물 번호</th>
            <th>게시물 제목</th>
            <th>작성 일자</th>
        </tr>
        <?php 
            foreach($bring_list as $val)
            {
                $date_cut=mb_substr($val["board_write_date"],0,10);
                ?>
        <tr>
            <td><?php echo $val["board_no"] ?></td>
            <td><a href="board_detail.php?board_no=<?php echo $val["board_no"] ?>"><?php echo $val["board_title"] ?></a></td>
            <td><?php echo $date_cut."<br>" ?></td>
        </tr>

        <?php
            }
        ?>
    </table>
</body>
</html>