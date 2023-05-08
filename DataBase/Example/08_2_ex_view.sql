-- 1. VIEW란?
-- 	가상의 테이블로, 보안과 함께 사용자의 편의성을 높이기 위해 사용합니다.
-- 	여러테이블을 조인 할 시에 view를 생성하여, 
-- 	복잡한 SQL을 편리하게 조회 할 수 있는 장점이 있습니다.
보안성의 이
-- 	뷰를 

-- 2. VIEW 생성
-- 	CREATE [OR REPLACE] VIEW 뷰명
-- 	AS
-- 		SELECT 문
-- 	;

-- 	** [OR REPLACE] : 기존의 뷰가 있을 경우 덮어쓰기를 합니다. **

-- 뷰를 생성하는 데에도 용량이 들어가기 때문에 최소한만 사용 

-- 쿼리를 가져오는데 시간이 너무 많이 걸린다 하면 뷰를 사용.......

-- 3. VIEW 삭제
-- 	DROP VIEW 뷰명;


CREATE VIEW test_view
AS
	SELECT tit.title, COUNT(emp.emp_no) cnt, gender
	FROM employees emp
	INNER JOIN titles tit
	ON emp.emp_no = tit.emp_no 
	WHERE emp.gender = 'F'
	GROUP BY tit.title; 
	
	
SELECT *
FROM test_view;


SELECT * 
FROM test_view
WHERE title = 'Staff';