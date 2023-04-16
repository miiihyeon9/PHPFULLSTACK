<?php
// ㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡ
// 함수명 : db_conn
// 기능 : MariaDB연결
// 파라미터 : &$obj_con
// 리턴값 : 
//ㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡ
function db_conn(&$obj_con)
{
    $db_host = "localhost"; // 호스트 주소
    $db_name = "board";     // 데이터베이스 이름 
    $db_user = "root";      // 데이터베이스 아이디
    $db_password = "root506";   // 데이터베이스 비밀번호
    $db_charset = "utf8mb4";
    $db_con = "mysql:host=".$db_host.";dbname=".$db_name.";charset=".$db_charset;
    $pdo_option = 
                array(
                    PDO::ATTR_EMULATE_PREPARES      =>false
                    ,PDO::ATTR_ERRMODE              => PDO::ERRMODE_EXCEPTION
                    ,PDO::ATTR_DEFAULT_FETCH_MODE   => PDO::FETCH_ASSOC
                );

    try
    {
        $obj_con = new PDO($db_con,$db_user,$db_password,$pdo_option);
    }
    catch(Exception $e)
    {
        $obj_con = null;
        throw new Exception( $e->getMessage() );
    }
}


//ㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡ
// 함수명 : select_board_info
// 기능 : board_info정보 가져오기 
// 파라미터 Array &$param_arr
// 리턴값   Array $result
//ㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡ
function select_board_info( &$param_arr)
{
    $sql = " SELECT board_no,board_title, board_write_date
            FROM board_info
            WHERE board_del_flg = '0'
            ORDER BY board_no DESC
            LIMIT :limit_num
            OFFSET :offset  ";
            
    $arr_prepare = array
                (
                    ":limit_num"     => $param_arr["limit_num"]
                    ,":offset"   => $param_arr["offset"]
                );
            
    $obj_con = null;
        try 
        {
            db_conn( $obj_con );
            $stmt = $obj_con->prepare( $sql );
            $stmt->execute($arr_prepare);
            $result = $stmt->fetchALL();
        } 
        catch (Exception $e) 
        {
            return $e->getMessage();
        }
        finally
        {
            $obj_con = null;//     데이터베이스 종료
        }
    return $result;
}


//ㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡ
// 함수명 : select_board
// 기능 : board_info의 모든 정보 가져오기
// 파라미터 X
// 리턴값   Array $result
//ㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡ

function select_board()
{
    $sql = " SELECT board_no,board_title, board_write_date
            FROM board_info
            WHERE board_del_flg = '0'
            ORDER BY board_no DESC ";
            

            
    $obj_con = null;
        try 
        {
            db_conn( $obj_con );
            $stmt = $obj_con->query( $sql );
            $stmt->execute();
            $result = $stmt->fetchALL();
        } 
        catch (Exception $e) 
        {
            return $e->getMessage();
        }
        finally
        {
            $obj_con = null;//     데이터베이스 종료
        }
    return $result;
}

//ㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡ
// 함수명 select_board_no
// 기능 : 상세내용 
// 파라미터 &$param_arr
// 리턴값
// ㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡ
function select_board_no(&$param_arr)
{
    $sql = "SELECT board_no, board_write_date, board_title, board_contents
            FROM board_info
            WHERE board_no = :board_no ;";

    $arr_prepare = array(
            ":board_no" => $param_arr["board_no"]
    );

    $obj_con = null;
    try
    {
        db_conn($obj_con);
        $stmt = $obj_con->prepare($sql);
        $stmt->execute($arr_prepare);
        $result = $stmt->fetchAll();
    }catch (Exception $e) 
    {
        return $e->getMessage();
    }
    finally
    {
        $obj_con = null;//     데이터베이스 종료
    }
    return $result[0];
}

// $arr =array("board_no"=>20);
// select_board_no($arr);
// var_dump(select_board_no($arr));

?>