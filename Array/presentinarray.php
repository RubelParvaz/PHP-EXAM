<?php
$arr=array(2,4,6,7,8,3,10);
$present=25;
$len = count($arr);
for($i=0;$i<$len;$i++){
if($present==$arr[$i])
{
    echo "present";
    break;
}
else
{
    echo "not present";
    break;
}
}
?>