CREATE TABLE employees1(
emp_no INT(11)
, birth_date DATE NOT null
, first_name VARCHAR(14) NOT null
, last_name VARCHAR(16) NOT null
, gender ENUM('남자','여자') NOT null
, hire_date DATE NOT NULL
, CONSTRAINT PK_EMPLOYEES1_EMP_NO PRIMARY KEY (emp_no));

SHOW FULL COLUMNS from employees1;

CREATE INDEX emp_no
ON employees1(emp_no);

DROP TABLE employees1;


CREATE VIEW maxmin
AS 
	SELECT emp.emp_no, emp.first_name
	FROM employees emp
	INNER JOIN (
			SELECT sal.emp_no
			FROM salaries sal
			WHERE salary = (SELECT MAX(salary) FROM salaries)
			OR salary = (SELECT MIN(salary) FROM salaries)
			) B
	ON emp.emp_no = B.emp_no;
	
	

SELECT *
FROM maxmin;

DROP VIEW maxmin;