<?php
for ($row=1; $row<=3; $row++)
	{
	for ($column=1; $column<=3; $column++)
	{
	echo  $row*$column." ";
	}
	echo "<br>";

}
?>


<br><hr><Br>


<?php
$x=1;
for($i=1;$i<=3;$i++)
{
	for($j=1;$j<=3;$j++)
	{
	echo $x++;	
	}		
	echo "<br>";
}
?>



<br><hr><br>


<?php
$j = 1;
	 $x = 0;
	for($i = 1; $i <=3; $i++) 
	{
		while($x < 3) 
		{
			echo $j++;
			$x++;
		}
		$x = 0;
		echo "<br>";
	}
?>