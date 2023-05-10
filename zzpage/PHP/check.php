<?php
// define("QUERY",$_SERVER["DOCUMENT_ROOT"]."/src/PHP/query.php");
// include_once(QUERY);
function db_conn( &$param_conn )
{
    $host = "localhost"; 
    $user = "root";      
    $password = "root506";   
    $name = "site";     
    $charset = "utf8mb4";   
    $dns = "mysql:host=".$host.";dbname=".$name.";charset=".$charset;
    $pdo_option = array(
                PDO::ATTR_EMULATE_PREPARES      => false     
                , PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION
                , PDO::ATTR_DEFAULT_FETCH_MODE  => PDO::FETCH_ASSOC  
                );  
    try
    {
        $param_conn = new PDO( $dns, $user, $password, $pdo_option);
    }
    catch( Execption $e)
    {
        $param_conn = null;
        throw new Exception( $e->getMessage() );

    }    
}

$http_method = $_SERVER["REQUEST_METHOD"];
$post = $_POST;

if($http_method===$post){
    $user_name = $post["user_name"];
    $user_password = $post["user_password"];
    
    $sql = " SELECT "
    ." * "
    ." FROM "
    ." login "
    ." WHERE "
    ." user_name ="
    .$user_name 
    ." and "
    ." user_password ="
    .$user_password 
    ;

        $conn = null;
        try 
        {
            db_conn( $conn );
            $stmt = $conn->query( $sql );
            // $stmt->execute( $arr_prepare);
            // $result = $stmt->fetchALL();
            $result_cnt = $stmt->rowCount();
        } 
        catch (Exception $e) 
        {
            return $e->getMessage();
        }
        finally
        {
            $conn = null;//     데이터베이스 종료
        }


    $savedID = 'mihyeon'; 
    $savedPW = '12345678';

    $id = $user_name;
    $pw = $user_password;


        session_start(); //세션 시작 

        if($id === $savedID && $pw === $savedPW){ //post로 받은 정보와 저장된 정보를 비교합니다.
            $_SESSION['id'] = $id; //세션에 key value 등록합니다.
            $_SESSION['nickname'] = '관리자';
            }
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
    
</body>
</html>