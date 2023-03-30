<?php
// class : 동종의 객체들이 모여있는 집합

class Student
{
    // 클래스 멤버 변수
          //접근 제어 지시자 : public private protected 
    public $std_name;       // 어디서든 접근 가능
    protected $std_age;     // 자기자신과 상속class내에서만 접근 가능 
    private $std_id;        // student class내에서만 접근 가능
    //보안성 (바로 접근하지 못하게)

// 객체지향으로 전에는 하나를 고쳐야할 때 전부다 고쳐야 했다면 객체지향은 고쳐야 하는 부분들만 고치면 되기 때문에 효율성이 좋음 
// 

// private 객체를 외부에서 사용할 수 있는 방법
    public function set_std_id($param_id)
    {
        // this 포인터 : class 자기자신을 가르키고 있다. 
        $this->std_id = $param_id;
    }

    public function get_std_id()
    {
        return $this->std_id;
    }



    // 클래스 안에 있는 function을 method라고 부른다...function이라고 부르기도 함 알아들어
    public function print_student($param_std_name,$param_std_age)
    {
        $result_name= "이름 : ".$param_std_name;
        $result_age= "나이 : ".$param_std_age."세";
        echo $result_name;
        echo "\n";
        echo $result_age;
    }
}

// class 선언
$obj_Student = new Student;
                // new : 클래스 불러오기 

// class method 호출
$obj_Student->print_student("홍길동",27);

// class의 멤버변수 사용방법

echo $obj_Student->std_name; // 아직 std_name에 갑돌이를 안줌
$obj_Student->std_name="갑돌이";
echo "\n";
echo $obj_Student->std_name;


//  std_id는 private 이기 때문에 접근 권한이 없다
// $obj_Student->std_id = "갑순이";

// std_age는 protected이기 때문에 접근 권한이 없다
// $obj_Student->std_age =50;
// => public 제외하고는 class밖에서 접근할 수 없음 


// getter, setter로 private 객체 접근
$obj_Student->set_std_id("갑순이ID");  // : setter
echo $obj_Student->get_std_id();        // : getter








?>