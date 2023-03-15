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
