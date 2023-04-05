<?php
class people
{
    private $peo_name;
    public function set_name($param_name)
    {
        $this->peo_name = $param_name;
    }
    protected function people_print()
    {
        echo $this->peo_name."\n";
    }
}

class Student extends people{
    private $std_id;
    public function setid($param_id)
    {
        // $this->peo_name = $param_name;
        $this->std_id = $param_id;
    }
    public function student_print()
    {
        parent::people_print();
        $str = $this->std_id;
        echo $str;
    }
}

$obj_student = new Student;
$obj_student->set_name("김미현");    // 상속되니까..
$obj_student->setid("rlaalgus");   // 값을 셋팅
$obj_student->student_print();           // 값을 출력

























?>

