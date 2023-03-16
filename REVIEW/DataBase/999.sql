-- 현재 월급이 70000이상 직급이 Senior Engineer
-- 인 사원의 이름, 생일, 성별을 구하시오
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

SELECT
FROM 
WHERE
GROUP BY  HAVING 
ORDER BY
	
	SELECT 
	FROM 
	INNER JOIN 
		
	