CREATE TABLE departments1 (
	dept_no CHAR(4) 
	, dept_name VARCHAR(40) NOT NULL
	,CONSTRAINT PK_DEPARTMENTS1_DEPT_NO PRIMARY KEY (dept_no));
	
SHOW FULL COLUMNS from departments1;

CREATE TABLE dept_emp1 (
	emp_no INT(11) NOT null
	, dept_no CHAR(4) NOT NULL
	, from_date DATE 
	, to_date DATE  
	,CONSTRAINT PK_DEPT_EMP1_EMP_NO_DEPT_NO PRIMARY KEY (emp_no, dept_no)
	,CONSTRAINT FK_DEPT_EMP1_EMP_NO FOREIGN KEY (emp_no) REFERENCES employees1 (emp_no)
	,CONSTRAINT FK_DEPT_EMP1_DEPT_NO FOREIGN KEY (dept_no) REFERENCES departments1 (dept_no) 
	);
	
SHOW FULL COLUMNS from dept_emp1;


CREATE TABLE dept_manager1 (
	dept_no CHAR(4) NOT null
	, emp_no INT(11) NOT NULL
	, from_date DATE 
	, to_date DATE  
	,CONSTRAINT PK_DEPT_MANAGER1_EMP_NO_DEPT_NO PRIMARY KEY (emp_no, dept_no)
	,CONSTRAINT FK_DEPT_MANAGER1_EMP_NO FOREIGN KEY (emp_no) REFERENCES employees1 (emp_no)
	,CONSTRAINT FK_DEPT_MANAGER1_DEPT_NO FOREIGN KEY (dept_no) REFERENCES departments1 (dept_no) 
	);


DROP TABLE dept_manager1;
SHOW FULL COLUMNS from dept_manager1;

CREATE INDEX emp_no
ON dept_manager1 (emp_no);