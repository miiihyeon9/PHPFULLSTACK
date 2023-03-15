-- 집계함수
-- 		sum(컬럼명) : 합계를 구한다
SELECT SUM(salary)
FROM salaries;

-- 		avg(컬럼명) : 평균을 구한다
SELECT AVG(salary)
FROM salaries;

-- 		max(컬럼명) : 최대값을 구한다.
SELECT MAX(salary)
FROM salaries;

-- 		min(컬럼명) : 최소값을 구한다.
SELECT MIN(salary)
FROM salaries;

-- 		count(컬럼명) : 개수를 구한다. 
SELECT count(emp_no)
FROM employees
WHERE emp_no <= 10010;

-- 그룹조회 : Group by 컬럼명 having 집계함수조건
SELECT title,COUNT(title)
FROM titles 
GROUP BY title HAVING COUNT(title)>=100000;
-- titles테이블에서, title컬럼에서 title의 개수를 모두 구했을 때 합계가 10만개 이상인 title 을 조회

-- as 별칭 
-- 속성명에 as를 사용하여 별칭을 줄 수 있음. 
SELECT dept_no, COUNT(emp_no)AS emp
FROM dept_manager
GROUP BY dept_no
HAVING emp <= 2;
-- dept_manager 테이블에서 dept_no의 emp_no 개수가 2개이하인 데이터의 dept_no와 count를 조회 

-- concat 문자열을 합치는 함수
SELECT CONCAT(last_name,' ',first_name) AS fullname
FROM employees;
-- employees 테이블에서 성과 이름을 fullname으로 합쳐준다.

 
