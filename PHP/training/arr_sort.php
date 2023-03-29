<?php
// $arr = array(5,10,7,3,1);

// foreach($arr as $key => $val)
// {
//     echo $key." > ".$val."\n";
// }


// for($val=0;$val<count($arr);$val++)
// {
// echo $val." > ". $arr[$val]."\n";

// }





// 버블 정렬
// 두 원소를 비교하여 더 큰 수가 뒤로 이동

// $arr = array(5,10,7,3,1);

// $temp = $arr[0];
// $arr[0] = $arr[1];
// $arr[1] = $temp;



//내림차순
// for($val=0;$val<count($arr);$val++)
// {
//     $num=$val+1;
//     for($j=0;$j<$num;$j++)
//     {
//         if($arr[$val]>$arr[$j])
//             {   
//                 $temp=$arr[$val];
//                 $arr[$val]=$arr[$j];
//                 $arr[$j]=$temp;
//                 $val++;
//             }
//     }
// }

// $arr = array(5,10,7,3,1);
// $temp = $arr[0];
// $arr[0] = $arr[1];
// $arr[1] = $temp;


// for($val=0;$val<count($arr);$val++)
// {
//     for($j=0;$j<$val;$j++)
//     {
//         if($arr[$val]<$arr[$j])
//             {   
//                 $temp = $arr[$val];
//                 $arr[$val] = $arr[$j];
//                 $arr[$j] = $temp;
//     }        }
    
// }

// arr[0] arr[1] 일때 temp = 5





// for($val=0;$val<count($arr);$val++)
// {
//     for($j=0;$j<$val;$j++)
//     {
//         if($arr[$val]<$arr[$j])
//             {   
//                 $temp = $arr[$val];
//                 $arr[$val] = $arr[$j];
//                 $arr[$j] = $temp;
//             }        
//     }
//     // $cnt_r--;                  
// }
// print_r($arr);



// $arr = array(5,10,7,3,1);

    // for($val=count($arr)-1;$val>0;$val--)
    // {
    //     for($j=0;$j<$val;$j++)
    //     {
    //         if ($arr[$j]>$arr[$j+1])
    //         {
    //             $temp = $arr[$j];
    //             $arr[$j] = $arr[$j+1];
    //             $arr[$j+1] = $temp;
    //         }

    //     }
    // }

// print_r($arr);


// 배열 안에 최대 값, 최소값을 출력해주는 함수를 각각 구현해 주세요.
// 함수명은 "my_max","my_min"




// $arr = array(5,10,7,3,1);

// function my_max($arr)
// {
//     $cnt = count($arr)-1;
//     for($val=0;$val<$cnt;$val++)
//     {
//         if($arr[$val]>$arr[$val+1])
//         {
//             $temp = $arr[$val];
//         }else if ($arr[$val]<$arr[$val+1])
//         {
//             $temp = $arr[$val+1];
//         }
//     }
//     return $temp;
// }

// my_max($arr);




// 두개를 비교했을 때 더 큰 수를 출력한다

// $arr = array(0,5,7,3,1);
// function my_max($arr)
// {
//     $cnt = count($arr)-1;
//     for($i=0;$i<$cnt;$i++)
//     {
//         if($arr[$i]>$arr[$i+1])
//         {
//             $temp = $arr[$i];
//             if($temp>$arr[$i+1])
//         {
//             $temp=$arr[$i+1];
//         }
//         }
//     return $temp;
// }
// print_r($arr);
// echo my_max($arr);


// $arr = array(1,2,3,54,5,5,7,0);

// function my_max($arr)
// {
//     for($i=0;$i<count($arr)-1;$i++)
//     {
//         if($arr[$i] < $arr[$i+1])
//         {
//             $max = $arr[$i+1];
//             for($j=0;$j<$i;$j++)
//             {
//                 if($max<$arr[$j])
//                 {
//                     $max=$arr[$j];
//                 }
//             }
//         }
//     }
//     return $max;
// }

// echo my_max($arr);


// $arr = array(1,2,3,54,5,5,7,0);

// function my_max($arr)
// {
//     $max = $arr[0];
//     // 배열의 첫번째 값을 맥스로 지정해줌
//     for($i=1;$i<count($arr);$i++)
//     {
//         if($max<$arr[$i])
//         // 첫 번째 값과 키1과 비교해서 조건에 충족하면 arr[$i]로 값이 바뀌고 조건이 충족하지 않으면 if문은 무시된다. 
//         {
//             $max=$arr[$i];
//         }
//     }
//     return $max;
// }

// echo my_max($arr);


// function my_max($param_arr)
// {
//     $res_max=$param_arr[0];
//     foreach ($param_arr as $val)
//     {
//         if($res_max<$val)
//         {
//             $res_max=$val;
//         }
//     }
//     return $res_max;
// }








// 두개를 비교했을 때 더 작은 수를 출력한다
// $arr = array(5,0,7,3,1);
// function my_min($arr)
// {
//     $cnt = count($arr)-1;
//     for($i=0; $i<$cnt; $i++)
//     {
//         if($arr[$i]<$arr[$i+1])
//         {
//             $temp = $arr[$i];
//         }else
//         {
//             $temp = $arr[$i+1];
//         }
//     }
//     return $temp;
// }
// echo my_min($arr);

// function my_min($arr)
// {
//     for($i=0;$i<count($arr)-1;$i++)
//     {
//         if($arr[$i] < $arr[$i+1])
//             {
//             if($min>$arr[$j])
//             {
//                 $min=$arr[$j];
//             }
//         }
//     }
//     return $min;
// }




// echo my_min($arr);



?>

