-- DML : 데이터를 조작하는데 사용되는 언어 
--      select, insert, update, delete가 있음 


-- select문

-- SELECT 컬럼명
-- FROM 테이블명
-- WHERE 쿼리 조건

-- 전체 조회 
SELECT *
FROM departments;
-- departments테이블에 있는 모든 정보를 조회

-- 특정 조건으로 조회
SELECT *
FROM departments
WHERE dept_no = 'd009';
--  departments 테이블 중 dept_no 가 'd009'인 데이터를 조회한다. 

-- 관계 연산자
SELECT *
FROM employees
WHERE emp_no <= 10010;
-- employees 테이블에서 emp_no가 10010보다 작거나 같은 데이터를 조회한다.

-- AND
SELECT *
FROM employees
WHERE emp_no  >= 10010 AND emp_no<=10020;
-- employee 테이블에서 emp_no가 10010 보다 크고 10020보다 작은 데이터를 조회한다
-- 교집합느낌, 조건들을 모두 만족하는 데이터를 가져온다. 

-- OR
SELECT *
FROM employees
WHERE emp_no <= 10010 OR emp_no >= 499990;  
-- employee 테이블에서 emp_no가 10010보다 작은 데이터와 emp_no가  499990보다 작은 데이터를 조회힌다
-- 합집합느낌, 조건들 중 하나라도 만족하면 데이터를 가져온다. 

-- and와 or 대신 between A and B 사용 가능
SELECT *
FROM employees
WHERE emp_no BETWEEN 10010 AND 10020 ;
-- employees 테이블에서 emp_no가 10010 와 10020 사이인 데이터를 조회한다. 

-- in
SELECT*
FROM employees
WHERE emp_no IN (10010,10020);
-- emp_no가 10010, 10020인 데이터를 조회한다. 

-- like 문자열 조회
-- %
SELECT *
FROM titles
WHERE title LIKE('%Engineer');
-- %는 무엇이든 허용한다는 의미로 여기서는 Engineer 앞에 무엇이든 와도 데이터가 조회된다. 
-- Engineer 앞뒤로 단어가 오는 데이터를 조회하고 싶으면 %Engineer%하면 됨. 

-- _
SELECT*
FROM titles
WHERE title LIKE('S______________');
-- _은 _의 개수만큼 단어를 허용하는데 __ 일경우 2글자만 허용 여기에 공백도 포함해야함. 

-- distinct 중복레코드 없이 조회
SELECT distinct emp_no
FROM dept_emp;

-- LIMIT 출력개수 제한하여 조회
SELECT*
FROM employees
LIMIT 20 OFFSET 30;
-- 31부터 시작해서 20개만 출력

-- order by로 정렬해서 조회하기
SELECT *
FROM employees
ORDER BY emp_no ASC;

SELECT *
FROM employees
ORDER BY emp_no DESC;
-- ASC는 오름차순, DESC는 내림차순으로 정렬해주고, 기본값은 ASC이다. 


