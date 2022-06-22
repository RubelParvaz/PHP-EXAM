<!DOCTYPE html>
<html>

<head>
	<title>Insert Page</title>
</head>

<body>
	<center>
		<?php

		$conn = mysqli_connect("localhost", "root", "", "student");
		
		
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		
        $roll=$_POST['roll'];
	    $name=$_POST['name'];
	    $age=$_POST['age'];
		
		$sql = "INSERT INTO student VALUES ('$roll','$name','$age')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully.</h3>";

			echo nl2br("\n$roll\n $name\n$age\n ");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		mysqli_close($conn);
		?>

		<br><br>

		<a href="index.php"><input type="submit" value="Back"></a>
	</center>
	
</body>

</html>
