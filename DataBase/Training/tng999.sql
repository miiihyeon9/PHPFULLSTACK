직급별 퇴사자 

SELECT A.gender, COUNT(A.gender)
FROM employees A
INNER JOIN
(
	SELECT A.emp_no
	FROM (
	SELECT emp_no
	FROM titles
	GROUP BY emp_no
	HAVING COUNT(emp_no)>1
	) A
	WHERE A.emp_no NOT IN(
	SELECT A.emp_no FROM titles A
	INNER JOIN (
		SELECT emp_no 
		FROM titles 
		GROUP BY emp_no
		HAVING COUNT(emp_no)>1
		)B
		ON A.emp_no = B.emp_no
		WHERE to_date = DATE (99990101)
		)
		
	UNION 
	
	SELECT A.emp_no
	FROM titles A
	INNER JOIN (
		SELECT emp_no
		FROM titles
		GROUP BY emp_no
		HAVING COUNT(emp_no)=1
	) B
	ON A.emp_no = B.emp_no
	WHERE A.to_date !=DATE(99990101)
)B
ON A.emp_no = B.emp_no
GROUP BY A.gender
;



SELECT A.gender, COUNT(A.gender) cnt
FROM employees A
INNER JOIN (
	SELECT emp_no
	FROM titles
	WHERE to_date < NOW()
	AND (emp_no, to_date) in
	(
		SELECT emp_no, MAX(to_date)
		FROM titles
		GROUP BY emp_no
	)
)B
ON A.emp_no = B.emp_no
GROUP BY A.gender;




SELECT A.gender, COUNT(A.gender) cnt
FROM employees A
INNER JOIN(
	SELECT emp_no
	FROM titles 
	GROUP BY emp_no
	HAVING MAX(to_date) != DATE(99990101)
	)B
ON A.emp_no = B.emp_no
GROUP BY A.gender;



SELECT title
FROM titles
INNER JOIN 



		











