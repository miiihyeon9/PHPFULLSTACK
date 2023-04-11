<?php



// 1~100 숫자 중 짝수의 합

// $sum=0;
// for($i=1;$i<=100;$i++)
// {
//     if($i%2 === 0)
//     {
//         $sum +=$i;
//     }
// }
// echo $sum;

// $sum=0;
// for($i=2;$i<=100;$i+=2)
// {
//         $sum +=$i;
// }
// echo $sum;

// $sum = 0;
// $i=1;
// while($i<=100)
// {
//     if($i%2 === 0)
//         {
//             $sum +=$i;
//         }
//     $i++;
// }
// echo $sum;

// $arr = array(
//     "a"=> 1
//     ,"b"=>2
//     ,"info"=>
//             array(
//                 "info_a"=>3
//                 ,"info_b"=>4
//                 ,"info_arr"=>
//                     array(
//                         "f_1"=>5
//                         ,"f_2"=>7
//                     )
//             )
//     );



//     echo $arr["info"]["info_a"]."\n";
//     echo $arr["info"]["info_arr"]["f_2"];


// $arr = array(
//      1
//     ,2
//     ,array(
//             "info_a"=>3
//             ,"info_b"=>4
//             ,"info_arr"=>
//                 array(
//                     "f_1"=>5
//                     ,"f_2"=>7
//                 )
//             )
//     );

// echo $arr[2]["info_arr"]["f_1"];

// function star($star)
// {
// for($i=1;$i<=$star;$i++)
// {
//     for($j=1;$j<=$i;$j++)
//     {
//         echo "*";
//     }
//     echo "\n";
// }
// }

// star(5);



// function fnc_star($i)
// {
//     for($j=1;$j<=$i;$j++)
//     {
//         echo "*";
//     }
//     echo "\n";
// }


// function fnc_star_line($star)
// {
//     for($i=1;$i<=$star;$i++)
//     {
//          fnc_star($i);
//     }
// }


// star_line(5);

// fnc_star(1);
// fnc_star(2);
// fnc_star(3);
// fnc_star(4);
// fnc_star(5);




// 위 함수를 내가 원하는 문자로 찍고 싶다는 요청이 왔습니다. 



//-----------------------------------------------------
// 파일명
// 시스템명 
// 이력
// v001 : new - 김미현
// v002 : fnc_star 수정 - 김미현
//-----------------------------------------------------
//function fnc_star($i,$change)         // v002 del
// function fnc_star($i,$change)           // v002 add
// {
//     for($j=1;$j<=$i;$j++)
//     {
//         // echo "*";                // v002 del
//         echo $change;         // v002 add 
//     }
//     echo "\n";
// }


// fnc_star(130,"(•_•)");
// fnc_star(130,"(•_•)");
// fnc_star(130,"(•_•)");

// 파라미터 안에 변수에대해 설정해줘도 바뀜 function fnc_star( $i, $change = "*" )
//                                                     fnc_star(1);             해도 출력 됨

// function fnc_reference2( &$param_str )
// {
//     echo "2번 : $param_str \n";
//     $param_str = "fnc_reference2에서 값 변경";
//     echo "3번 : $param_str \n";
// }

// $str = "aaa";
// echo "1번 : $str \n";           
// fnc_reference2( $str );  
// echo "4번 : $str \n";         


// 1번 aaa      2번 aaa     3번 fnc_reference2에서 값 변경      4번 fnc_reference2에서 값 변경 


// 1번 aaa      2번 aaa     3번 fnc_reference2에서 값 변경      4번 aaa



// class ------------------------------------------------------------

class Food
{
    // 접근 제어 지시자
    // public       : 어디서든( class 밖에서도) 접근 가능
    // private      : 자기자신class에서만 접근 가능 
    // protected    : 자기자신class 와 상속class내에서만 접근 가능


    // 멤버 변수
    protected $str_name ;
    protected $int_price ;
    

    // 메소드(함수) 
    public function __construct( $param_name, $param_price )               // __construct : 생성자
    {
        $this->str_name = $param_name;
        $this->int_price = $param_price;
    }

    public function fnc_print_food()
    {
        $str = $this->str_name." : ".$this->int_price."원\n";
        echo $str;
    }

    public function set_int_price($param_price)
    {
        $this->int_price = $param_price;
    }

    // public function get_int_price()
    // {
    //     $str = $this->int_price;
    // }

}
$obj_food = new Food( "탕수육", 10000 );
// echo $obj_food->str_name;

// $obj_food->fnc_print_food();

// food class 멤버변수 $int_price 값을 12000 바꾸어주세요. 
// $obj_food->set_int_price(12000);
// $obj_food -> fnc_print_food();

// $obj_food = new Food( "탕수육" , 15000);
// $obj_food -> fnc_print_food();


// $obj_food =new Food;
// $obj_food->set_int_price(20000);

// $obj_food->get_int_price();
//-------------------------------------------------------
// int_price가 private 변수이기 여서
// 클래스 밖에서 바로 접근하지 못하기 때문에

// int_price에 간접적으로 접근하는 
// public 함수를 만들어서 				(set_int_price) 
// int_price값만 변경해 주고 	
 
// fnc_print_food 함수를 호출하면 
// 변경된 값이 나옴

//-------------------------------------------------------
// 상속 : 부모 클래스의 객체들을 자식 클래스가 상속받아서 사용할 수 있다. 

class KoreanFood extends Food
{
    protected $side_dish;

    public function __construct( $param_name, $param_price, $param_side_dish )
    {
        $this->str_name = $param_name;
        $this->int_price = $param_price;
        // str_name 과 int_price는 부모 클래스인 Food에 있는 변수
        $this->side_dish = $param_side_dish;
       
    }
    
    public function fnc_print_food()
    {
        // $str = $this->str_name." : ".$this->int_price."원 : ".$this->side_dish;
        parent::fnc_print_food();
        // 오버라이딩 : 부모클래스에서 정의된 메소드를 자식클래스에서 재정의 
        $str = "반찬 : ".$this->side_dish."\n";
        echo $str;
    }

}

$obj_korean_food = new KoreanFood( "치킨", 20000, "치킨무");
$obj_korean_food->fnc_print_food();









?>
