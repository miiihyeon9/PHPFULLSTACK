-- UPDATE의 기본구조
-- UPDATE의 테이블명
-- SET ( 컬럼1 = 값1, 컬럼2= 값2)
-- WHERE 조건
-- ** 추가설명 : 조건이 적지않을 경우 모든 레코드가 수정된다.
-- 			실수를 방지하기 위해 WHERE절을 먼저 작성하고 SET절을 쓰는 것을 추천

UPDATE departments
SET dept_name = 'Marketing'
WHERE dept_no = 'd001';

SELECT *
FROM departments;

UPDATE employees
SET birth_date = 20230315
-- 					date(1997982)
, first_name = 'ByoungJu'
, last_name = 'Park'
WHERE  birth_date = 20230314
		AND first_name ='MiHyeon'
		AND last_name = 'Kim'
		;
-- where에 emp_no = 500000; 해도됨

SELECT *
FROM employees
WHERE emp_no =500000;

-- UPDATE departments
-- SET dept_name = '2000' 
-- WHERE dept_no = 'd001' OR dept_no = 'd002';

-- ROLLBACK;

-- delete from 테이블명
-- where 조건
-- ** 추가설명 : 조건이 적지않을 경우 모든 레코드가 수정된다.
-- 			실수를 방지하기 위해 WHERE절을 먼저 작성하고 SET절을 쓰는 것을 추천



SELECT * 
FROM departments;

-- rollback, delete 등 commit 지우는 습관 들이기

-- DELETE 
-- FROM employees
-- WHERE emp_no = 500000;

SELECT *
FROM employees
WHERE emp_no = 500000;