<?php
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

function login(&$param_name,&$password){
    $sql = " SELECT "
            ." * "
            ." FROM "
            ." login "
            ." WHERE "
            ." user_name ="
            ."$user_name" 
            ." and "
            ." user_password ="
            ."$user_password" 
            ;
            
    // $arr_prepare = array
    //             (
    //                 ":limit_num"     => $param_arr["limit_num"] 
    //                 , ":offset"   => $param_arr["offset"]
    //             );
    
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
    return $result_cnt;
}



?>