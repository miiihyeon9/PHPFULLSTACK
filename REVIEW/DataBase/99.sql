SELECT *
from employees
where emp_no in (
				select emp_no
				from titles
				where title = 'Senior Engineer')
			AND emp_no in (
				SELECT emp_no
				FROM salaries
				where salary >= 70000);
				
				
SELECT emp_no, first_name
FROM employees
WHERE emp_no IN (
			SELECT emp_no
			FROM salaries
			WHERE salary = (SELECT MAX(salary) FROM salaries)
			OR salary = (SELECT MIN(salary) FROM salaries)
			);
			
SELECT COUNT(title)
FROM titles
WHERE title = 'Senior Engineer';

SELECT COUNT(title)
FROM titles
WHERE title = 'Engineer';

SELECT COUNT(title)
FROM titles
WHERE title = 'staff';

SELECT COUNT(title)
FROM titles;


