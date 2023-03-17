INSERT INTO test_tbl(
  MEM_NO
 , MEM_NAME
 , MEM_AGE
 , MEM_SEX
 , MEM_SIGNIN_DATE
 , MEM_SIGNOUT_DATE
 )
 VALUES (
 4
 , '김미현'
 , 26
 , 'F'
 , NOW()
 , NUll
 );
 
SELECT *
FROM test_tbl;

-- 지금은 pk제약조건으로 하나만 설정되어 있기 때문에 MEM_NO만 바꿔도 저장됨....



-- DELETE dml
-- 데이터가 모두 사라진다고 해도 다시 복구할 수 있음


-- TRUNCATE 는 ddl
-- 사용하면 모든 데이터 이력이 사라지고 롤백을 해도 데이터를 가져오지 못함

-- 테이블 삭제 DDL
-- DROP TABLE 테이블1 [, 테이블2, 테이블3 ...];





