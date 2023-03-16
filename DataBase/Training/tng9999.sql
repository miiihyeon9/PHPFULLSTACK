-- 1. 사원의 사원번호, 사원 풀네임, 직책명을 출력해 주세요. 
SELECT emp.emp_no, CONCAT(first_name,' ',last_name) fullname, tit.title
FROM employees emp
INNER JOIN titles tit
	ON emp.emp_no = tit.emp_no
	WHERE tit.to_date>=NOW();

-- 2. 사원의 사원번호, 성별, 현재 월급 을 출력해 주세요.
SELECT emp.emp_no, emp.gender, sal.salary
FROM employees emp
	INNER JOIN salaries sal
	 	ON emp.emp_no = sal.emp_no
WHERE sal.to_date >= NOW();
	 	
-- 3. 10010 사원의 풀네임, 과거부터 현재까지 월급 이력을 출력해 주세요. 
SELECT CONCAT(first_name,' ',last_name) fullname, sal.salary, sal.from_date, sal.to_date
FROM employees emp
	INNER JOIN salaries sal
		ON emp.emp_no = sal.emp_no
WHERE sal.emp_no =10010;
	
-- 4. 사원의 사원번호, 풀네임, 소속부서영을 출력해 주세요.    
SELECT emp.emp_no, CONCAT(first_name,' ',last_name) fullname, dep.dept_name
FROM employees emp
		INNER JOIN dept_emp dept
			ON emp.emp_no = dept.emp_no
		INNER JOIN departments dep
			ON dept.dept_no = dep.dept_no
		WHERE dept.to_date>=NOW()
		ORDER BY emp.emp_no;

-- 5. 현재 월급의 상위 10위까지 사원의 사번, 풀네임, 월급을 출력해 주세요 
SELECT emp.emp_no, CONCAT(first_name,' ',last_name) fullname, salary
FROM employees emp
		INNER JOIN salaries sal
			ON emp.emp_no = sal.emp_no
			WHERE sal.to_date >= NOW()
			ORDER BY salary DESC LIMIT 10;
			
			
-- 6. 각 부서의 부서장의 부서명, 풀네임, 입사일을 출력해 주세요.
SELECT dep.dept_name, CONCAT(first_name,' ',last_name) fullname, emp.hire_date
FROM dept_manager dept
	INNER JOIN departments dep
	ON dept.dept_no = dep.dept_no
	INNER JOIN employees emp 
		ON dept.emp_no = emp.emp_no
		WHERE dept.to_date >= NOW();


-- 7. 현재 직책이 "staff"인 사원의 현재 평균 월급을 출력해 주세요.  
SELECT tit.title, AVG(salary)
FROM titles tit
	INNER JOIN salaries sal
		ON tit.emp_no = sal.emp_no
		WHERE tit.to_date >= NOW() AND sal.to_date>= NOW()
		GROUP BY title HAVING title = 'staff';
		
		

			
-- 8.부서장직을 역임했던 모든 사원의 풀네임과 입사일, 사번, 부서번호를 출력해 주세요.
SELECT CONCAT(first_name,' ',last_name) fullname, emp.hire_date, dept.dept_no, emp.emp_no
FROM dept_manager dept
	INNER JOIN employees emp
	ON dept.emp_no = emp.emp_no;


-- 9. 현재 각 직급별     평균월급 중 60000이상인 직급의 직급명, 평균월급(정수)를 내림차순으로 출력해 주세요.
SELECT tit.title, TRUNCATE(avg(sal.salary), 0) avg_sal
FROM titles tit
	INNER JOIN salaries sal 
		ON tit.emp_no = sal.emp_no
		WHERE sal.to_date >= NOW() AND tit.to_date >= NOW()
		GROUP BY tit.title  
		having avg_sal >= 60000 
		ORDER BY  avg_sal DESC
		; 
	

-- 10. 성별이 여자인 사원들의 직급별 사원수를 출력 
SELECT tit.title, COUNT(emp.emp_no), gender
FROM employees emp
	INNER JOIN titles tit
	ON emp.emp_no = tit.emp_no 
	WHERE emp.gender = 'F'
	GROUP BY tit.title;
	
	-- having 은 selector에 있는 것만 쓸 수 있음




























