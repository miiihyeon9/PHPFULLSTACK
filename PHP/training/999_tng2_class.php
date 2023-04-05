<?php
class people
{
    protected $peo_name;
    public function __construct($param_name)
    {
        $this->peo_name = $param_name;
    }
    public function peoplePrint()
    {
        echo $this->peo_name."\n";
    }
}

class Student extends people{
    private $std_id;
    public function __construct($param_name,$param_id)
    {
        $this->peo_name = $param_name;
        $this->std_id = $param_id;
    }
    public function studentPrint()
    {
        parent::peoplePrint();
        $str = $this->std_id;
        echo $str;
    }
}

$obj_Student = new Student("김미현","rlaalgus");    
$obj_Student->studentPrint();









?>