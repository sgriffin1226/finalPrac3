<!DOCTYPE HTML>
<html>
 <head>
  <title>addWork</title>
  </head>
 
 <body>
 
 
  <form action="index.html" method="post">
   <label for="workout">what workout did you hit</label>
   <select name="workout" id="workout">
   	<option value=""></option>
    <option value="benchpress">bench</option>
    <option value="squat">squat</option>
    <option value="deadlift">deadlift</option>
    <option value="overheadPress">overhead press</option>
    <option value="bentOverRow">bent over row</option>
   </select>
   Reps: <input type="text" name="reps"><br>
   Weight: <input type="text" name="lbs"><br>
   <label for="date">date input:</label>
    <input type="date" name="date" id="date" value="" />
   <input type="submit" name="submit" value="enter workout">
  </form>
  
<a href="#" class="ui-btn" data-rel="back">Go Back</a>

	<?php 
	if(isset($_POST['submit'])){


	$servername = "198.168.1.73";
	$username = "root";
	$password = "password";
	$dbname = "myApp";

	//make connection to database
	$conn=mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("connection failed: ".mysqli_connect_error());
	}
	//insert into the database
	$sql="INSERT INTO $_POST[workout](reps, weight, date) VALUES('$_POST[reps]', '$_POST[lbs]', '$_POST[date]')";


	mysqli_query($conn, $sql);

	mysqli_close($conn);
	}//end if
	?>
 </body>
</html>