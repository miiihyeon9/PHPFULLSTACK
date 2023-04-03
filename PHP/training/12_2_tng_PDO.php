<?php
include_once("../example/12_2_ex3_DBfunction.php");

$obj_conn = null;

my_db_conn($obj_conn);
// 전체 월급의 평균
// $sql = 
//     " SELECT "
//     ." AVG(salary) "
//     ." FROM "
//     ." salaries ";

// $arr_prepare =array();

// $stmt = $obj_conn->prepare( $sql );
// $stmt->execute( $arr_prepare );

// $result = $stmt->fetchALL();

// var_dump($result);


//2. 새로운 사원 정보를 employees 테이블에 등록해 주세요
// $sql =
//     " INSERT INTO "
//     ." employees "
//     ." ( "
//     ." emp_no "
//     ." , birth_date "
//     ." , first_name "
//     ." , last_name "
//     ." , gender "
//     ." , hire_date "
//     ." ) "
//     ." VALUES "
//     ." ( "
//     ." :emp_no "
//     ." , :birth_date"
//     ." , :first_name "
//     ." , :last_name "
//     ." , :gender "
//     ." , :hire_date "
//     ." ) ";

// $arr_prepare = 
//     array(
//         "emp_no" => 500010
//         , "birth_date" => "1998-08-09"
//         , "first_name" => "Mihyeon"
//         , "last_name" => "Kim"
//         , "gender" => "F"
//         , "hire_date" => "2023-04-01"
//         );

// $stmt = $obj_conn->prepare( $sql );
// $result = $stmt->execute($arr_prepare);

// $obj_conn->commit();


//3. 2에서 등록한 사원의 이름을 "길동" 성은 "홍"으로 변경해 주세요
// $sql =
//     " UPDATE employees 
//     SET first_name = :first_name ,last_name = :last_name 
//     WHERE emp_no = 500010 ";   
    
// $arr_prepare = 
//     array(
//         "first_name" => "길동"
//         , "last_name" => "홍"
//     );

//     $stmt = $obj_conn->prepare( $sql ); //prepare statement 생성
//     $result = $stmt->execute( $arr_prepare );     // 쿼리실행
    
//     $obj_conn->commit();


// 4. 2에서 등록한 사원을 삭제해 주세요




// $sql =
//     " DELETE
//     FROM EMPLOYEES
//     WHERE emp_no = :emp_no ";

// $arr_prepare =
//     array(
//         "emp_no" => 500010
//     );

//     $stmt = $obj_conn->prepare( $sql ); //prepare statement 생성
//     $result = $stmt->execute( $arr_prepare );     // 쿼리실행
    
//     $obj_conn->commit();














$obj_conn = null;
?>