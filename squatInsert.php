<!DOCTYPE HTML>
<html>
 <head>
  <title>squatINSERT</title>
  <script type="text/javascript" charset="utf-8" src="phonegap.js"></script>
 </head>
 <body>
  <header>
   <h1>HOW MANY SQUATS DID YOU DO GIRLY MAN(OR WOMAN)</h1>
  </header>
  <form action="squatInsert.php" method="post">
   Reps: <input type="text" name="reps"><br>
   Weight: <input type="text" name="lbs"><br>
   <input type="submit" name="submit">
  </form>

	<?php 
	if(isset($_POST['submit'])){


	$servername = "localhost";
	$username = "griffish";
	$password = "VYSuSPc6VRy6Dtqc";
	$dbname = "myApp";
	$table="squat";

	//make connection to database
	$conn=mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("connection failed: ".mysqli_connect_error());
	}
	//insert into the database
	$sql="INSERT INTO squat(reps, weight) VALUES('$_POST[reps]', '$_POST[lbs]')";


	mysqli_query($conn, $sql);

	mysqli_close($conn);
	}//end if
	?>
 </body>
</html>