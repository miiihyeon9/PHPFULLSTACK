<?php
include_once("../example/12_2_ex3_DBfunction.php");



// 전체 월급의 평균
// $sql = 
// " SELECT "
// ." AVG(salary) "
// ." FROM "
// ." salaries ";

// $obj_conn = null;
// my_db_conn($obj_conn);
// // prepare method로 하는 방법
// //      1 
// $arr_prepare =array();
// $stmt = $obj_conn->prepare( $sql ); // prepare statement 생성
// $stmt->execute( $arr_prepare );     // 쿼리 실행
// $result = $stmt->fetchALL();        // 쿼리 실행결과 fetch

// //      2
// // $stmt = $obj_conn->prepare( $sql ); // prepare statement 생성
// // $stmt->execute();     // 쿼리 실행
// // $result = $stmt->fetchALL();        // 쿼리 실행결과 fetch


// //---teacher    prepare statement를 사용안해도 될 때 
// // $stmt = $obj_conn->query($sql);
// // $result = $stmt->fetchAll();
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
//         "emp_no"       => 500010
//         , "birth_date" => "1998-08-09"
//         , "first_name" => "Mihyeon"
//         , "last_name"  => "Kim"
//         , "gender"     => "F"
//         , "hire_date"  => "2023-04-01"
//         );
//                             //  mariadb/ mysql은 대쉬 안써도 됨
// $obj_conn = null; // 변수를 어떤 타입인지 지정해주기 (안해줘도 상관은 없음) - 실수 방지
                            
// my_db_conn($obj_conn);
// $stmt = $obj_conn->prepare( $sql );
// $result = $stmt->execute($arr_prepare);
// $obj_conn->commit();


//3. 2에서 등록한 사원의 이름을 "길동" 성은 "홍"으로 변경해 주세요
// $sql =
//     " UPDATE employees "
//     ." SET "
//     ." first_name = :first_name "
//     ." ,last_name = :last_name " 
//     ." WHERE "
//     ." emp_no = :emp_no "
//     ;   
    
// $arr_prepare = 
//     array(
//         ":first_name"  => "길동"
//         , ":last_name" => "홍"
//         , ":emp_no" => 500010
//     );
    
//     $obj_conn = null;
//     my_db_conn($obj_conn);
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
//         $obj_conn = null;
//     my_db_conn($obj_conn);
//     $stmt = $obj_conn->prepare( $sql ); //prepare statement 생성
//     $result = $stmt->execute($arr_prepare);     // 쿼리실행
    
//     $obj_conn->commit();
















$obj_conn = null;   // PDO 클래스 접속 종료하는 방법
?>