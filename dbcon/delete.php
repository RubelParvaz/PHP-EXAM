<?php
$roll=$_REQUEST['roll'];
$query = "DELETE FROM student WHERE roll=$roll"; 
$result = mysqli_query($con,$query);
header("Location: show.php"); 
?>