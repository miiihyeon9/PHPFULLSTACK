<?php
$db_host = "localhost"; 
$db_user = "root";      
$db_password = "root506";   
$db_name = "employees";     
$db_charset = "utf8mb4";    
$db_dns = "mysql:host=".$db_host.";dbname=".$db_name.";charset=".$db_charset;
$db_option = array(
                PDO::ATTR_EMULATE_PREPARES      => false     
                , PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION
                , PDO::ATTR_DEFAULT_FETCH_MODE  => PDO::FETCH_ASSOC  
                );  

$obj_conn = new PDO( $db_dns, $db_user, $db_password, $db_option);


// insert 

$sql = " INSERT INTO departments
    ( dept_no, dept_name )
    VALUES
    ( :dept_no, :dept_name ) ";

$arr_prepare = 
    array(
        "dept_no" => "d011"
        , "dept_name" => "PHPfullstack"
    );



// var_dump($result);

$obj_conn=null;         //DB파기






//mariadb 쿼리 이력 확인

?>



<!-- FLUSH PRIVILEGES ;;
-- 현재 사용중인 MySQL의 캐시를 지우고 새로운 설정을 적용하기 위해 사용합니다.
-- 이 명령어를 사용하려는 사용자는 reload권한을 가지고 있어야 합니다. 
컨트롤 스페이스 : 자동완성-->