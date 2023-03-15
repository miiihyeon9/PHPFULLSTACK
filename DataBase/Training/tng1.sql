-- tng99

-- 1. 사원정보 테이블에 각자의 정보를 적절하게 넣어주세요.
-- 2. 월급, 직책, 소속부서 테이블에 각자의 정보를 적절하게 넣어주세요. 
-- 3. 짝꿍의 정보도 넣어주세요
-- 4. 짝꿍과 나의 소속 부서를 d009로 변경해 주세요. 


-- 1번 ~2번

INSERT employees(
		emp_no
		,birth_date
		,first_name
		,last_name
		,gender
		,hire_date
		)
VALUES
	(
	500000
	,DATE(19980809)
	,'MiHyeon'
	,'Kim'
	,'F'
	,DATE(20230314)
	);

SELECT *
FROM employees
WHERE emp_no = 500000;

INSERT salaries(
		emp_no
		,salary
		,from_date
		,to_date
		)
VALUES
	(
	500000
	,30000
	,NOW()
	,DATE(99991231)
	)
	;
	
SELECT *
FROM salaries
WHERE emp_no = 500000;

INSERT titles (
	emp_no
	,title
	,from_date
	,to_date
	)
VALUES 
	(
	500000
	,'Engineer'
	,NOW()
	,DATE(99991231)
	);

SELECT *
FROM titles
WHERE emp_no = 500000;
	
INSERT dept_emp (
	emp_no
	,dept_no
	,from_date
	,to_date
	)
VALUES 
	(
	500000
	,'d001'
	,date(20230314)
	,DATE(20230315)
	);

SELECT *
FROM dept_emp
WHERE emp_no = 500000;

