-- insert : 기존에 없던 데이터를 넣어줌
-- 테이블에 맞춰서 작성할 것
INSERT INTO employees(
	emp_no
	,birth_date
	,first_name
	,last_name
	,gender
	,hire_date
)
VALUES 
(
	500001
	,NOW()
	,'MiHyeon'
	,'Kim'
	,'F'
	,NOW()
);

SELECT *
FROM employees
WHERE emp_no = 500000;

SELECT *
FROM employees
WHERE first_name LIKE 'MiHyeon';

SELECT *
FROM employees
WHERE emp_no IN (500000);

SELECT *
FROM employees
WHERE emp_no = 500000;


