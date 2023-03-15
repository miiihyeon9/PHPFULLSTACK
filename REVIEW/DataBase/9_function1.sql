-- 1. 데이터 형식 변환 함수	
-- CAST와 CONVERT는 데이터형식을 다른 데이터형식으로 변환하는 역할
-- CAST와 CONVERT는 동일한 역할을 하지만 사용방법이 다름.
-- 	CAST( 값 AS 데이터형식 )
-- 	CONVERT( 값, 데이터형식 )
--  차이없을...껄?

SELECT CAST('1234' AS INT );
-- 문자열을 숫자 데이터로 변환
SELECT CAST(1234 AS CHAR(4));
-- 숫자열을 문자 데이터로 변환 
SELECT CONVERT (1234, CHAR(4));

-- 2. 제어 흐름 함수

-- 	IF(수식, 참일 경우 결과, 거짓일 경우 결과) : 수식이 참 또는 거짓에 따라 결과를 분기합니다.

SELECT if(1>2,'참','거짓');

SELECT emp_no, if(emp_no <= 100001 , first_name, birth_date)
FROM employees;

SELECT emp_no, if(emp_no <= 100001 , first_name, birth_date)
FROM employees
ORDER BY emp_no desc;

-- 	IFNULL(수식1, 수식2) : 수식이 NULL일 경우 수식2를, NULL이 아닐 경우 수식1을 반환합니다.
SELECT IFNULL(Null,'a');
SELECT IFNULL(' ','a');
-- null : 값이 존재하지 않다. 

-- 	NULLIF(수식1, 수식2) : 수식1과 2가 같으면 NULL을 반환하고, 다르면 수식1을 반환합니다.
SELECT NULLIF(1,1);

-- 	CASE ~ WHEN ~ ELSE ~ END : 다중 분기를 위해 사용합니다.
-- 		예)
-- 			CASE 체크하려는 수식1
-- 			WHEN 분기수식1 THEN 결과1
-- 			WHEN 분기수식2 THEN 결과2
-- 			WHEN 분기수식3 THEN 결과3
-- 			ELSE 결과4
-- 			END

SELECT
			emp_no
			,gender
			,CASE gender
			WHEN 'M' THEN '남자'
			WHEN 'F' THEN '여자'
			
			ELSE ' '
			END
FROM employees LIMIT 10;

SELECT
			emp_no
			,gender
			,CASE gender
			WHEN 'M' THEN '남자'
			ELSE '여자 '
			END
FROM employees LIMIT 10;


SELECT 
		emp_no
		,title
		,case title
			when 'Senior Engineer' then '관리자'
			ELSE '팀원'
			END AS 'K_title'
FROM titles;


SELECT
		emp_no
		,salary
		,case salary
		when salary<=40000 then '낮음'
		when salary<=60000 then '보통'
		ELSE  '높음'
		END AS '소득수준'
FROM salaries;