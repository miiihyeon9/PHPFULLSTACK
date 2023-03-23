<?php




$count = 6;


for($i=1;$i<=$count;$i++)
{
    for($space=$i;$space<=$count-1;$space++){
        echo " ";
    }
    for($num=1;$num<=$i*2-1;$num++)
    {
        echo "*";
    }
    echo "\n";
}



?>