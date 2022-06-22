<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT roll, name, age FROM student";
$result = $conn->query($sql);
$conn->close();
?>

<html>
<head>

</head>
<body>
<form align="center">
<section>
        <h1>Student Form</h1>
        
        <table align="center" border="1">
            <tr>
                <th>Roll No</th>
                <th>Name</th>
                <th>Age</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            
            <?php
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
                <td><?php echo $rows['roll'];?></td>
                <td><?php echo $rows['name'];?></td>
                <td><?php echo $rows['age'];?></td>
                <td align="center">
                    <a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a>
                </td>
                <td align="center">
                    <a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a>
                </td>

            </tr>
            <?php
                }
            ?>
        </table>
    </section>
	
	</form>
	<a href="index.php"><input type="submit" value="Back"></a>
</body>
</html>