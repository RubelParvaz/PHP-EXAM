<html>
<head>
	
	<style>
		
	</style>
</head>
<body>
	<form method="POST" action="show.php">
		<table border="1" align="center">
			<tr>
				<td colspan="2" align="center">
				<h2>
					Student Form
				</h2>
				</td>
			</tr>
			<tr>
				<td>Roll</td>
				<td><input type="text" name="roll"></td>
			</tr>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Age</td>
				<td><input type="text" name="age"></td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" name="submit" href="show.php">
				</td>
			</tr>
		</table>
	
	</form>
</body>
</html>







<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="student";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['submit']))
{
	$roll=$_POST['roll'];
	$name=$_POST['name'];
	$age=$_POST['age'];
}
?>

