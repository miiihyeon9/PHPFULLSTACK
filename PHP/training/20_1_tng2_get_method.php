<?php

$arr_get= $_GET;

// echo "ID : ".$arr_get["id"];
// echo "PW : ".$arr_get["pw"];
// echo "NAME : ".$arr_get["name"];
// echo "BIRTH_DATE : ".$arr_get["birth_date"];
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
    <?php
        echo "ID : ".$arr_get["id"];
    ?>
    <br>
    <?php 
        echo "PW : ".$arr_get["pw"];
    ?>
    <br>
    <?php
        echo "NAME : ".$arr_get["name"];
    ?>
    <br>
    <?php
        echo "BIRTH_DATE : ".$arr_get["birth_date"];
    ?>
</body>
</html>