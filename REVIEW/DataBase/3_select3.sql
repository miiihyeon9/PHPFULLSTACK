-- 서브쿼리 : 쿼리안에 또 다른 쿼리가 있는 상태



-- 	- 서브쿼리의 결과가 2개 이상이라 에러발생 
SELECT *
FROM dept_manager
WHERE dept_no = (
					SELECT dept_no 
					FROM dept_manager
					WHERE dept_no = 'd002'
				);
				
					SELECT dept_no 
					FROM dept_manager
					WHERE dept_no = 'd002';

-- - ANY를 사용할 경우, 2개 이상의 결과 중 하나라도 만족하는 데이터를 조회
SELECT *
FROM dept_manager
WHERE dept_no = ANY (
						SELECT dept_no 
						FROM dept_manager
						WHERE dept_no = 'd002'
					);

-- - ALL을 사용할 경우, 2개 이상의 결과 모두를 만족하는 데이터를 조회
SELECT *
FROM dept_manager
WHERE dept_no = ALL (
						SELECT dept_no 
						FROM dept_manager
						WHERE dept_no = 'd002'
					);

-- 다중열 서브쿼리
-- 여러 컬럼을 검색하는 서브 쿼리. 
-- 비교 대상 컬럼과 1:1 대응이 되어야 함. 

-- in 검색된 값중 하나만 일치하면 참
SELECT *
FROM employees
WHERE emp_no in (
		SELECT emp_no
		FROM titles
		WHERE title = 'Engineer'
		);
-- titles테이블에서 enginner라는 title을 가진 emp_no 들과 일치한 
-- employees테이블의 emp_no의 전체를 조회한다.



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

-- Senior Engineer이고 임금이 7만달러 이상인 사원의 정보 