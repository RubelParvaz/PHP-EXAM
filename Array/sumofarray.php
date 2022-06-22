<?php
$arr=array("12","13","17","16","10");
$a=count($arr);
$sum=0;
for($i=0;$i<$a;$i++)
    {
        $sum=$sum+$arr[$i];
    }
    echo $sum;
?>