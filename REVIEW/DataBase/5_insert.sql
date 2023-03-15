-- INSERT 구조

-- insert는 데이터를 삽입하는 sql문
-- INSERT INTO 테이블명 
-- ( 속성명 1, 속성명2,...)
-- VALUES
-- (속성값 1, 속성값2,....);
-- 속성을 적어주지 않아도 되지만 그럴경우 
-- VALUES의 속성값은 해당 테이블의 컬럼의 순서대로 전부 입력하기 때문에
--	실수를 방지하기위해 모든 속성값을 다 적어서 INSERT문을 작성하는 것이 좋다.
INSERT INTO employees (
	emp_no
	,birth_date
	,first_name
	,last_name
	,gender
	,hire_date
)
VALUES
(
	500000
	,DATE(19980809)
	,'MiHyeon'
	,'Kim'
	,'F'
	,date(20230314)
);

