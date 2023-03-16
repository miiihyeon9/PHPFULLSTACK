-- 3번 

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
	500001
	,DATE(19930803)
	,'EunYoung'
	,'Sin'
	,'F'
	,DATE(20230315)
	);

SELECT *
FROM employees
WHERE emp_no = 500001;

INSERT salaries(
		emp_no
		,salary
		,from_date
		,to_date
		)
VALUES
	(
	500001
	,60117
	,DATE(20230315)
	,DATE(99990101)
	)
	;
	
SELECT *
FROM salaries
WHERE emp_no = 500001;

INSERT titles (
	emp_no
	,title
	,from_date
	,to_date
	)
VALUES 
	(
	500001
	,'Engineer'
	,DATE(20230315)
	,DATE(99990101)
	);

SELECT *
FROM titles
WHERE emp_no = 500001;
	
INSERT dept_emp (
	emp_no
	,dept_no
	,from_date
	,to_date
	)
VALUES 
	(
	500001
	,'d005'
	,DATE(20230315)
	,DATE(99990101)
	);

SELECT *
FROM dept_emp
WHERE emp_no = 500001;