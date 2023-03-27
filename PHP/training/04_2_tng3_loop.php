<?php




$count = 6;


for($i=1;$i<=$count;$i++)
{
    for($space=$i;$space<=$count;$space++){
        echo " ";
    }
    for($num=1;$num<=$i;$num++)
    {
        echo "*";
    }
    echo "\n";
}



?>