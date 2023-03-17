CREATE TABLE employees1 (
	emp_no INT(11) 
	, birth_date DATE NOT NULL
	, first_name VARCHAR(14) NOT NULL
	, last_name VARCHAR(16) NOT null
	, gender ENUM('F','M') NOT NULL
	, hire_date DATE NOT NULL
	,CONSTRAINT PK_EMPLOYEES1_EMP_NO PRIMARY KEY (emp_no));
	
SHOW FULL COLUMNS from employees1;



CREATE TABLE titles1 (
	emp_no INT(11) 
	, title VARCHAR(50) NOT NULL
	, from_date DATE NOT NULL
	, to_date DATE 
	,CONSTRAINT PK_EMPLOYEES1_EMP_NO_TITLE_FROM_DATE PRIMARY KEY (emp_no, title, from_date)
	,CONSTRAINT FK_EMPLOYEES1_EMP_NO FOREIGN KEY (emp_no) REFERENCES employees1 (emp_no) 
	);

SHOW FULL COLUMNS from titles1;

CREATE TABLE salaries1 (
	emp_no INT(11) 
	, salary INT(11) NOT NULL
	, from_date DATE NOT NULL
	, to_date DATE NOT null
	,CONSTRAINT PK_EMPLOYEES1_EMP_NO_FROM_DATE PRIMARY KEY (emp_no, from_date)
	,CONSTRAINT FK_SALARIES1_EMP_NO FOREIGN KEY (emp_no) REFERENCES employees1 (emp_no)
	);
	
SHOW FULL COLUMNS from salaries1;
SHOW INDEX FROM employees;

SELECT * 
FROM salaries1;

CREATE INDEX emp_no
ON salaries1 (emp_no);



