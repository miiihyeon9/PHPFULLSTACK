<?php

fopen("../example/sam/gugudan.text","a");

$f_gugudan= fopen("../example/sam/gugudan.text","a");



for($dan=2; $dan<=9; $dan++)
{   fputs($f_gugudan, $dan."단\n");
    for( $num=1; $num<=9; $num++)
    {
        $result = $dan." * ".$num." = ".$dan*$num."\n";
        fputs($f_gugudan,$result);
    }
}






fclose($f_gugudan );



?>