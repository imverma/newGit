<?php
include("connection.php");
error_reporting(0);
?>

<html>
	<head>
	
	</head>
		<form action="" method="POST" >
		Roll no <input type="text" name="rollno" value=""/><br><br>
		
		Name <input type="text" name="studentname" value=""/><br><br>
		
		Class <input type="text" name="class" value=""/><br><br>
		
		<input type="submit" name="submit" value="Submit"/>
		</form>

<?php
$rn = $_POST['rollno'];
$sn = $_POST['studentname'];
$cl = $_POST['class'];

$query = "INSERT INTO STUDENT VALUE ('$rn','$sn','$cl')";
$data = mysqli_query($conn, $query);

if($data)
{
	echo "Data inserted into database";
}


?>