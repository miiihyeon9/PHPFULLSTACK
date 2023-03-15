-- 6번 ~
INSERT INTO dept_manager(
	dept_no
	,emp_no
	,from_date
	,to_date
	)
VALUES(
 	'd009'
 	,500000
 	,date(20230315)
 	,date(99990101)
);

UPDATE dept_manager
SET to_date = DATE(20230315)
WHERE emp_no = 111939;

SELECT *
FROM dept_manager
WHERE dept_no = 'd009';

-- 7번 

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
	,date(20230314)
	,DATE(20230315)
	);

SELECT *
FROM titles
WHERE emp_no = 500000;

UPDATE titles
SET title = 'Senior Engineer'
WHERE emp_no = 500000 AND title = 'Engineer';


SELECT *
FROM titles
WHERE emp_no = 500000;




-- 8번

SELECT emp_no, first_name
FROM employees
WHERE emp_no IN (
			SELECT emp_no
			FROM salaries
			WHERE salary = (SELECT MAX(salary) FROM salaries)
			OR salary = (SELECT MIN(salary)FROM salaries)
			);
			
			

-- 9번

SELECT AVG(salary)
FROM salaries;

-- 10번

SELECT AVG(salary)
FROM salaries
WHERE emp_no = 499975;



