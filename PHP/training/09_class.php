<?php

class Car
{
    // $car_name : 차 이름을 저장하는 멤버 변수
    // $car_color : 차 색깔을 저장하는 멤버 변수

    // method 명 : car_make
    // parameter : 
    //             string    $param_name
    //             string    $param_color
    // 기능  : 멤버변수에 값을 셋팅

    // method 명 : car_out
    // parameter : 없음
    // 기능 : 자동차 이름과 색깔 출력
    // 형식 : $car_color."색 ".$car_name
    private $car_name;
    private $car_color;

    public function car_make($param_name,$param_color)
    {
        $this->car_name = $param_name;
        $this->car_color = $param_color;
    }

    public function car_out()
    {
        echo $this->car_color."색 ".$this->car_name;
    }

}
$obj_car = new Car;
$obj_car->car_make("페라리","빨간");
$obj_car->car_out();


?>