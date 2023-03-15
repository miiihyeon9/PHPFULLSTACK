-- 1. 숫자 데이터 형식
-- 	INT : 4byte 정수 (가장 많이 사용)
-- 	FLOAT : 4byte 실수
-- 	DOUBLE : 8byte 실수
-- 	DECIMAL(전체 자릿수, 소수점이하 자릿수) : 5~17byte 실수, DECIMAL(5, 2)일 경우 XXX.XX 의 형태

SELECT CAST(1 AS INT) - CAST(0.1 AS DOUBLE) * CAST(7 AS INT)
FROM DUAL;
-- 부동소수점의 오류 

SELECT CAST (12345 AS DECIMAL(5,0))
FROM DUAL;

-- 2. 문자 데이터 형식
-- 	CHAR(n) : 1~255byte, 고정길이 문자형, 설정한 길이만큼 사용
--  				0 또는 1의 값을 줄때, 짧은 글자
--  				varchar보다 속도가 빠름
-- 	VARCHAR(n) : 1~65535byte, 가변길이 문자형, 데이터의 길이만큼만 사용

-- 	LONGTEXT : 최대 4GB크기의 TEXT 데이터 값을 저장
-- 	LONGBLOB : 최대 4GB크기의 BLOB 데이터 값을 저장
-- 				(Binary Large Object의 약자, 주로 이미지, 비디오, 사운드 등과 같은 멀티미디어 객체들을 바이너리 형태로 저장할 때 사용 )

-- 	ENUM(값1, 값2) : 정해진 값들만 입력 가능하도록 하는 데이터 형식 / 최대 65535개의 열거형 데이터 값


-- 3. 날짜 및 시간 데이터 형식
-- 	DATE : 3byte 'YYYY-MM-DD'형식
--		DATE(20230315)

-- 	DATETIME : 8byte 'YYYY-MM-DD HH:MM:SS'형식