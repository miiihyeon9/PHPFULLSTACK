1. 스토어드 프로시저(Stored Procedure) 시험x
	일련의 쿼리를 모아 마치 하나의 함수처럼 실행하기 위한 쿼리의 집합

2. 스토어드 프로시저의 장점
	- 하나의 요청으로 여러 SQL문을 실행하여, 네트워크에 대한 부하 감소

	- 미리 구문 분석 및 내부 중간 코드로 변환을 끝내야 하므로 처리 시간이 감소

	- 데이터베이스 트리거와 결합하여 복잡한 규칙에 의한 데이터의 참조무결성 유지가 가능
                    자동으로 설정해두는거  

3. 스토어드 프로시저의 단점
	- 사양 변경 시 외부 응용 프로그램과 함께 프로시저의 정의 변경이 필요
                                            프로시저가 길어질수록 디버깅이 어려워짐

	- 코드 자산으로서의 재사용성이 매우 비효율적
                        : 이전의 시스템을 새로운 시스템으로 만들려고 할때 프로시저는 데이터베이스 구조 자체가 달라지기 때문에 아예 다 바꿔줘야함


4. 프로시저 확인
	show procedure status;


5. 프로시저 생성
	5-1. DELIMITER
		DELIMITER를 이용하여 지정된 문자가 나타나기 전까지는 ;을 만나도 쿼리가 실행되지 않게 방지

	5-2. IN
		프로시저를 호출하기 위해 필요한 정보들로 함수의 매개변수
	
	5-3. OUT
		프로시저의 반환값
	
	5-4. DECLARE
		프로시저 내부에서 사용하는 지역 변수를 선언할 때 사용

	5-5. SET
		변수의 값을 설정할 때 사용

	5-6. 기본 구조
		DELIMITER $$
		CREATE PROCEDURE 프로시저명(
			IN 변수명 데이터타입
			, OUT 변수명 데이터타입
		) 
		BEGIN
			프로시저의 실행 내용 정의
            (다 가능  select, update ....)
		END $$
		DELIMITER ;

DELIMITER $$
		CREATE PROCEDURE test_proc(
			IN in_num INT 
			
		) 
		BEGIN
			SELECT *
			FROM employees
			LIMIT in_num;
		END $$
		DELIMITER ;
-- = delimiter : delimiter안에 세미콜론이 있어도 실행을 하지 않을거야

CALL test_proc(10);



6. 프로시저 호출
	CALL 프로시저명(매개변수);

7. 프로시저 삭제
	DROP PROCEDURE 프로시저명;
