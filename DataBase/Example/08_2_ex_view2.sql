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

DROP VIEW test_view;


CREATE VIEW test_view1
AS
SELECT emp.emp_no, CONCAT(first_name,' ',last_name) fullname, dep.dept_name
FROM employees emp
		INNER JOIN dept_emp dept
			ON emp.emp_no = dept.emp_no
		INNER JOIN departments dep
			ON dept.dept_no = dep.dept_no
		WHERE dept.to_date>=NOW()
		ORDER BY emp.emp_no;