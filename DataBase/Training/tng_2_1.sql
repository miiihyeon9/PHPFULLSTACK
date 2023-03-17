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

SELECT *
FROM (
	SELECT emp.emp_no, CONCAT(emp.first_name,' ',emp.last_name) fullname, RANK() over(ORDER BY sal.salary DESC ) rn
	FROM employees emp
		INNER JOIN salaries sal
		ON emp.emp_no = sal.emp_no
	WHERE sal.to_date >= NOW())RNK
WHERE RNK.rn <=10;
-- 순위 10위 이내인 사람들을 출력 limit을 사용할 경우에는 10개의 데이터만 뽑기 때문에 중복될 경우에 안나올 수 
-- 있는데 위에 코드를 사용하면 좀 더 정확성이 좋아짐.

-- 6. 각 부서의 부서장의 부서명, 풀네임, 입사일을 출력해 주세요.
SELECT dep.dept_name, CONCAT(first_name,' ',last_name) fullname, emp.hire_date
FROM dept_manager dept
	INNER JOIN departments dep
	ON dept.dept_no = dep.dept_no
	INNER JOIN employees emp 
	ON dept.emp_no = emp.emp_no
WHERE dept.to_date >= NOW();
-- 기준이 되는 테이블이 적을 수록 데이터 로딩 속도가 빠르기 때문에 처음 적는 테이블엔 데이터가 적은 테이블을 작성하는게 좋음.
-- 여기서는 departments가 데이터가 가장 적기 때문에 from 다음 departments 테이블을 가장 먼저 사용해 주는 것이 좋다.

-- 7. 현재 직책이 "staff"인 사원의 현재 평균 월급을 출력해 주세요.  
SELECT tit.title, AVG(sal. salary)
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


-- 9. 현재 각 직급별     평균월급 중 60000이상인 직급의 직급명, 평균월급( 정수)를 내림차순으로 출력해 주세요.
SELECT tit.title, TRUNCATE(avg(sal.salary), 0) avg_sal
FROM titles tit
	INNER JOIN salaries sal 
		ON tit.emp_no = sal.emp_no
WHERE sal.to_date >= NOW() AND tit.to_date >= NOW()
GROUP BY tit.title  
	having avg_sal >= 60000 
ORDER BY  avg_sal DESC; 
	
SELECT tit.title, CAST(sal.salary AS float) avg_sal
FROM titles tit
	INNER JOIN salaries sal 
		ON tit.emp_no = sal.emp_no
WHERE sal.to_date >= NOW() AND tit.to_date >= NOW()
GROUP BY tit.title  
	having avg_sal >= 60000 
ORDER BY  avg_sal DESC; 

-- 10. 성별이 여자인 사원들의 직급별 사원수를 출력 
SELECT tit.title, COUNT(emp.emp_no), gender
FROM employees emp
	INNER JOIN titles tit
	ON emp.emp_no = tit.emp_no 
WHERE emp.gender = 'F'
GROUP BY tit.title;
	
	-- having 은 selector에 있는 것만 쓸 수 있음




























