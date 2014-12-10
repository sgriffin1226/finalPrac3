<!DOCTYPE HTML>
<html>
 <head>
  <title>BENCHPRESSINSERT</title>
  <script type="text/javascript" charset="utf-8" src="phonegap.js"></script>
 </head>
 
 <header>
  <h1>HOW MUCH DID YOU PRESS ON THAT BENCH GIRLY MAN(OR WOMAN)</h1>
 </header>
 <body>
  <form action="bpInsert.php" method="post">
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
	$table="benchpress";

	//make connection to database
	$conn=mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("connection failed: ".mysqli_connect_error());
	}
	//insert into the database
	$sql="INSERT INTO benchpress(reps, weight) VALUES('$_POST[reps]', '$_POST[lbs]')";


	mysqli_query($conn, $sql);

	mysqli_close($conn);
	}//end if
	?>
 </body>
</html>