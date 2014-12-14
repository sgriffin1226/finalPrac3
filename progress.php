<!DOCTYPE>
<html>
<head>

<title>Progress</title>
</head>

<body>
<form action="progress.php" method="post">
   <label for="workout">what workout do you wanna see progress of?</label>
   <select name="workout" id="workout">
   	<option value=""></option>
    <option value="benchpress">bench</option>
    <option value="squat">squat</option>
    <option value="deadlift">deadlift</option>
    <option value="overheadPress">overhead press</option>
    <option value="bentOverRow">bent over row</option>
   </select>
   <input type="submit" name="submit" value="see progress">
</form>
  
<a href="#" class="ui-btn" data-rel="back">Go Back</a>

<?php 
	if(isset($_POST['submit'])){


	$servername = "192.168.1.73";
	$username = "randUser";
	$password = "M85x35pbXCy3TGTP";
	$dbname = "myApp";

	//make connection to database
	$conn=mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("connection failed: ".mysqli_connect_error());
	}
	//insert into the database
	$sql="SELECT weight, reps, date FROM $_POST[workout]";
	$result=mysqli_query($conn, $sql);
	$num_rows=mysqli_num_rows($result);
	
	if($num_rows>0){
		while($row=mysqli_fetch_assoc($result)){
			echo "weight lifted: ", $row["weight"], " //Number of reps: ", $row["reps"],  "//date performed: ", $row["date"], "<br>";
		}
	}
	else{ echo 'no results';}

	mysqli_close($conn);
	}//end if
	?>
</body>
</html>