
-- UPDATE의 기본구조
UPDATE 테이블명
SET ( 컬럼1 = 값1, 컬럼2 = 값2 )
WHERE 조건
-- 조건을 적지않을 경우 모든 레코드가 수정되기 때문에 
--	실수를 방지하기위해 WHERE절을 먼저 작성하고 SET절을 작성하는 것이 좋음

-- UPDATE dept_manager
-- SET to_date = DATE(20230315)
-- WHERE emp_no =11939;
-- set에 변경할 내용을 적으면 됨. 


