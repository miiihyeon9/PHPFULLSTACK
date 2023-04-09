<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
// CRUD 
// C : insert
// R : select 
// U : update 
// D : delete


include_once("./99_PDOconnfnc.php");
$obj_conn = null;
my_db_conn( $obj_conn );

$sql_query = "SELECT * FROM php";

// stmt($sql);


$stmt = $obj_conn->query( $sql_query );
$stmt->execute(  );
$result = $stmt->fetchAll();
$i=0;


echo "<table border = 1>";
echo "<tr>";
echo "<th>NO</th>";
echo "<th>NAME</th>";
echo "<th>AGE</th>";
echo "<th>GENDER</th>";
echo "<th>REGDATE</th>";
while ($i<2)
{
    echo $result[$i]['idx'];
    echo $result[$i]['name'];
    echo $result[$i]['age'];
    echo $result[$i]['gender'];
    echo $result[$i]['regdate']."\n";
    $i++;

}


// var_dump($result);



$obj_conn = null;    // 종료
?>