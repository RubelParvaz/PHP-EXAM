<?php
$arr=array(1,7,2,6,3,2,10,5);
$len=count($arr);
sort($arr);
for($i=0;$i<$len;$i++)
{
    echo $arr[$i];
    echo " ";
}
?>