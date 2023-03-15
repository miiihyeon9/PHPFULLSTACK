SELECT *
FROM employees
WHERE emp_no IN(10001,10005)
;


SELECT *
FROM employees
WHERE first_name LIKE('m___');

SELECT emp_no, title
FROM titles
WHERE title LIKE('%Engineer%');

SELECT DISTINCT *
FROM dept_emp;

SELECT *
FROM employees
LIMIT 10 OFFSET 19;

SELECT *
FROM employees
ORDER BY emp_no DESC ;

SELECT *
FROM employees
ORDER BY first_name, last_name ASC;

SELECT *
FROM employees
ORDER BY first_name ASC, last_name DESC;

SELECT emp_no, birth_date, first_name, gender
FROM employees
ORDER BY first_name;


SELECT count(emp_no)
FROM employees
WHERE emp_no =10001;

SELECT avg(salary)
FROM salaries;

SELECT max(salary)
FROM salaries;

SELECT min(salary)
FROM salaries;

-- 그룹으로 묶어서 조회
-- GROUP BY 컬럼명 [HAVING] 직계함수 조건
-- GROUP BY 명령은 하위 쿼리에서 ORDER BY와 동일한 기능을 수행하는 데 사용할 수 있습니다. 
-- 둘 이상의 행을 반환하는 하위 쿼리는 IN 연산자와 같은 여러 값 연산자와 함께만 사용할 수 있습니다.

SELECT title, COUNT(title)
FROM titles
GROUP BY title;
-- 100000명 이상인 직급만 표시 
SELECT title, COUNT(title)
FROM titles
GROUP BY title HAVING COUNT(title)>=100000;

-- 사원별 급여의 평균 조회
SELECT emp_no, AVG(salary)
FROM salaries
GROUP BY emp_no;

-- 사원별 급여의 평균 조회
SELECT emp_no, AVG(salary)
FROM salaries
GROUP BY emp_no 
HAVING AVG(salary) >=30000
	AND AVG(salary)<=50000;

-- between도 가능 
SELECT emp_no, AVG(salary) AS avg_s
FROM salaries
GROUP BY emp_no 
HAVING avg_s BETWEEN 30000 AND 50000;
-- as 사용하면 별칭사용가능 

-- 문자열 합치기 concat()
SELECT CONCAT(last_name,' ',first_name) AS full_name
FROM employees;



--서브쿼리 : 쿼리 안에 또 다른 쿼리가 있는 형태



SELECT *
FROM dept_manager
WHERE dept_no = (
					SELECT dept_no
					FROM dept_manager
					WHERE emp_no = 110344
				);
				
SELECT *
FROM dept_manager
WHERE dept_no = (
					SELECT dept_no
					FROM dept_manager
					WHERE emp_no = 110344
				);

-- 밑에가 d004이고, 이 사원의 부서를 나타내는게 위에함수   
SELECT dept_no
					FROM dept_manager
					WHERE emp_no in 110344;

-- 레코드가 1개가 와야하는데 2개 이상이옴 / =은 결과값이 1개 일 때 사용하기 때문에 in, any
SELECT *
FROM dept_manager
WHERE emp_no IN (
					SELECT emp_no
					FROM dept_manager
					WHERE dept_no = 'd009'
					);
					
SELECT *
FROM dept_manager
WHERE emp_no = ANY(
					SELECT emp_no
					FROM dept_manager
					WHERE dept_no = 'd009'
					);

-- 서브쿼리의 모든 것을 만족해야 
SELECT *
FROM dept_manager
WHERE emp_no = All(
					SELECT emp_no
					FROM dept_manager
					WHERE dept_no = 'd009'
					);
					

-- 사원별 급여 평균이 70000이상인 사원의
-- 사번, 이름, 성, 성별을 조회해 주세요

SELECT emp_no, first_name, last_name,gender
FROM employees
WHERE emp_no = ANY (
					SELECT emp_no
					FROM salaries
					GROUP BY emp_no
					HAVING AVG(salary) >= 70000
					);

SELECT emp_no, first_name, last_name,gender
FROM employees
WHERE emp_no IN  (
					SELECT emp_no
					FROM salaries
					GROUP BY emp_no
					HAVING AVG(salary) >= 70000
					);


-- int 라서 '' 사용하면 안됨.
-- 자동형변환 조심해야함

-- 날짜함수
-- date 타입의 속성 비교 방법
SELECT *, NOW()
FROM titles
WHERE emp_no = 10009
	AND to_date >= NOW();


-- 현재 직책이 "senior engineer"인 
-- 사원의 사원번호와 성을 조회해 주세요

SELECT emp_no, last_name
FROM employees
WHERE emp_no = ANY (
				SELECT emp_no
				FROM titles
				WHERE title = 'Senior Engineer'
				AND to_date >= NOW());

				
SELECT emp_no, last_name
FROM employees
WHERE emp_no IN (
				SELECT emp_no
				FROM titles
				WHERE title = 'Senior Engineer'
				AND to_date >= NOW());
				

-- 뽑고 싶은 데이터를 먼저 생각해서 적어놓고 
-- 만들어보기 

-- 현재 월급이 70000이상 직급이 Senior Engineer
-- 인 사원의 이름, 생일, 성별을 구하시오

SELECT first_name, birth_date,gender
FROM employees
WHERE emp_no IN (
			SELECT emp_no
			FROM salaries
			WHERE NOW( salary>= 70000)
			AND 
			(
			SELECT title
			FROM titles
			WHERE title ='Senior Engineer');
			