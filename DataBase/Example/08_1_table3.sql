CREATE table student(
stu_no INT
, stu_name VARCHAR(20) NOT NULL
, stu_birth DATE NOT NULL
, stu_addr VARCHAR(50) NOT NULL
, stu_tel CHAR(11) NOT NULL
, stu_gen ENUM('남자','여자') NOT NULL
, stu_sta ENUM('재학','휴학','졸업','퇴학') NOT NULL
, stu_ent DATE NOT NULL
, stu_gra DATE
,CONSTRAINT STUDENT_STU_NO PRIMARY KEY(stu_no)
);



CREATE table student(
stu_no INT PRIMARY KEY
, stu_name VARCHAR(20) NOT NULL
, stu_birth DATE NOT NULL
, stu_addr VARCHAR(50) NOT NULL
, stu_tel CHAR(11) NOT NULL
, stu_gen ENUM('F','M') NOT NULL
, stu_sta ENUM('0','1','2','3') NOT NULL
, stu_ent DATE NOT NULL
, stu_gra DATE
);

-- mariaDB의 경우 PK에 이름 지정 따로 안됨 그냥 PK컬럼 옆에 PRIMARY KEY 써주면 됨
-- enum 을 쓸 경우 한글로 하면 제대로 못 불러올 수도 있고, 데이터 차지 많이 함  
-- 한글로 적어야만 하는게 아니라면 영어나 숫자로 쓰는게 좋음 

CREATE TABLE grade(
sub_no INT 
, stu_no INT 
, sub_scor INT NOT NULL
, sub_rank INT NOT NULL
, com_date DATE NOT NULL
, PRIMARY KEY(sub_no, stu_no)
);


CREATE TABLE subject(
sub_no INT
, sub_name VARCHAR(30) NOT NULL
, sub_capacity INT NOT NULL
, sub_office VARCHAR(30) NOT NULL
, lec_start_time DATETIME NOT NULL
, lec_end_time DATETIME NOT NULL
, required_com ENUM('Y','N') NOT NULL
, lecture_term VARCHAR(20) NOT NULL 
, pro_no INT UNIQUE NOT null
, tb_no INT UNIQUE NOT null
, CONSTRAINT SUBJECT_SUB_NO PRIMARY KEY(sub_no)
);



CREATE TABLE textbook(
tb_no INT
, th_name VARCHAR(50) NOT NULL
, CONSTRAINT TEXTBOOK_TB_NO PRIMARY KEY(tb_no)
);

CREATE TABLE professor(
pro_no INT
, pro_name VARCHAR(20) NOT NULL
, pro_birth DATE NOT NULL
, pro_degree_no INT NOT NULL
, pro_email VARCHAR(50) NOT NULL
, pro_position VARCHAR(30) NOT NULL
, pro_office VARCHAR(30) NOT NULL
, pro_gen ENUM('M','F') NOT NULL
, pro_entry_date DATE NOT NULL
, CONSTRAINT PROFESSOR_PRO_NO PRIMARY KEY(pro_no)
);

