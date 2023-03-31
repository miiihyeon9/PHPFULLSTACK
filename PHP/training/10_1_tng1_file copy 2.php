<?php

$f_gugudan= fopen("../example/sam/gugudan.text","a");

$title="";

$arr=array();
for($dan=2; $dan<=9; $dan++)
{   
    $title.=$dan."단\n";
    for( $num=1; $num<=9; $num++)
    {
        $title.= $dan." * ".$num." = ".$dan*$num."\n";
        $arr[$num]=$title;
    }
}
$str_impl = implode("",$arr);

fputs($f_gugudan,$str_impl);

fclose($f_gugudan);
// 대입연산자 .= 사용하면 문자가 이어짐 






?>