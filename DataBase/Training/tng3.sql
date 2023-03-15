-- 4번
INSERT INTO dept_emp(
		emp_no
		,dept_no
		,from_date
		,to_date
		)
VALUES
	(
	500000
	,'d009'
	,NOW()
	,DATE(99990101)
	);


SELECT *
FROM dept_emp
WHERE emp_no = 500000;




-- 5번
DELETE 
FROM dept_emp 
WHERE emp_no = 500001;

SELECT *
FROM dept_emp
WHERE  emp_no = 500001;


DELETE 
FROM employees 
WHERE emp_no = 500001;

SELECT *
FROM employees
WHERE  emp_no = 500001;

DELETE 
FROM salaries 
WHERE emp_no = 500001;

SELECT *
FROM salaries
WHERE  emp_no = 500001;

DELETE 
FROM titles 
WHERE emp_no = 500001;

SELECT *
FROM titles
WHERE  emp_no = 500001;




