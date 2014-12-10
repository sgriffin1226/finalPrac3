<!DOCTYPE HTML>
<html>
 <head>
  <title>addWork</title>
  <!--links-->
  <script type="text/javascript" charset="utf-8" src="phonegap.js"></script>
  
  <link rel="stylesheet" href="../../Users/Shane G/Desktop/Fall 14/jquery-mobile-theme-073108-0/themes/basicTheme.min.css" />
  
  <link rel="stylesheet" href="../../Users/Shane G/Desktop/Fall 14/jquery-mobile-theme-073108-0/themes/jquery.mobile.icons.min.css" />
  
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
 
  <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
 <!--end links-->
 </head>
 
 <body>
 
  
 
  <form action="try.php" method="post">
   <label for="workout">what workout did you hit</label>
   <select name="workout" id="workout">
   	<option value=""></option>
    <option value="benchpress">bench</option>
    <option value="squat">squat</option>
   </select>
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
	//$table="benchpress";

	//make connection to database
	$conn=mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("connection failed: ".mysqli_connect_error());
	}
	//insert into the database
	$sql="INSERT INTO $_POST[workout](reps, weight) VALUES('$_POST[reps]', '$_POST[lbs]')";


	mysqli_query($conn, $sql);

	mysqli_close($conn);
	}//end if
	?>
 </body>
</html>