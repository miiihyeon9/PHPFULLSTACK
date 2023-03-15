-- 8번
SELECT emp_no, first_name
FROM employees
WHERE emp_no IN (
			SELECT emp_no
			FROM salaries
			WHERE salary = (SELECT MAX(salary) FROM salaries)
			OR salary = (SELECT MIN(salary) FROM salaries)
			);


SELECT emp_no, first_name
FROM employees
WHERE emp_no = (
		SELECT emp_no
		FROM salaries
		ORDER BY salary LIMIT 1)
		OR 
		emp_no = (
		SELECT emp_no
		FROM salaries
		ORDER BY salary DESC LIMIT 1);
-- 같은 값을 가진 사람이 2명 이상이 나오면 값이 제대로 안나올 수 있음
