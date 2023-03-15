-- 서브쿼리 : 쿼리안에 또 다른 쿼리가 있는 상태

-- ANY / ALL
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


SELECT *
FROM employees
WHERE emp_no in (
		SELECT emp_no
		FROM titles
		WHERE title = 'Engineer'
		);
-- titles테이블에서 enginner라는 title을 가진 emp_no 들과 일치한 
-- employees테이블의 emp_no의 전체를 조회한다.

-- 다중열 서브쿼리
SELECT *
FROM dept_emp
WHERE (emp_no, dept_no) IN  (
								SELECT emp_no, dept_no
								FROM dept_manager
								WHERE to_date >= NOW()
							);


-- FROM절에 사용하는 서브쿼리
SELECT e.*
FROM (
		SELECT emp_no, gender
		FROM employees
		WHERE gender = 'F'
	 ) e;

-- SELECT절에 사용하는 서브쿼리
SELECT
	sal.emp_no
	,sal.from_date
	,(	SELECT CONCAT(emp.last_name, ' ', emp.first_name)
		FROM employees emp
		WHERE emp.emp_no = sal.emp_no
	) f_name
FROM salaries sal
WHERE sal.to_date >= now();

-- date 타입의 속성 비교 방법
-- NOW() : 현재시각
SELECT *
FROM titles
WHERE emp_no = 10009
  AND to_date >= NOW();
-- => 현재 일 하고 있는 emp_no가 10009인 사람의 데이터를 조회