<?php 
 
 $arr = array('c', 'v', 'b', 'a');
 $len = count($arr);
 
 for($i = 0; $i < $len; $i++) {
     for ($j = 0; $j < $len -1; $j++) 
         if($arr[$i] < $arr[$j] ) {
             $temp = $arr[$i] ;
             $arr[$i] = $arr[$j];
             $arr[$j] = $temp;
         }
        }
 
 foreach($arr as $value)
         echo $value. " ";

?>