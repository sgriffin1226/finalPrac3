<!DOCTYPE html>
<html>
<head>
<title>Untitled Document</title>
</head>

<body>

<form action="newWorkout.php" method="post">
<label for="newWorkout">New workout</label>
 <input type="text" name="newWorkout" />
<input type="submit" name="submit" value="create new workout">
</form>
<a href="#" class="ui-btn" data-rel="back">go back</a>


<?php
	if(isset($_POST['submit'])){
	$servername = "localhost";
	$username = "griffish";
	$password = "VYSuSPc6VRy6Dtqc";
	$dbname = "myApp";

	//make connection to database
	$conn=mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("connection failed: ".mysqli_connect_error());
	}
	
	//insert into the database
	$sql="CREATE TABLE $_POST[newWorkout](
	reps INT UNSIGNED,
	weight INT UNSIGNED,
	date DATE
	)";
	
	if(mysqli_query($conn, $sql)){
		echo "successful add!";
	}

	mysqli_close($conn);
	}//end if
?>
</body>
</html>