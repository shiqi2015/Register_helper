<?php

//get new member
	$newdate=$_POST["Date"];
	
	$newact=$_POST["Event_name"];
	
	$newde=$_POST["Detail"];
	
	//getting more info and nicer formatting 
	
	//check if exist
	
	$local="localhost";
	$database = "acmw7";
	$password = "";
	$username = "root";
	
	//Main if statement
		$connect = mysql_connect($local,$username,$password) or die("unable to log into database");
		@mysql_select_db($database)or die ("Database not found");
		$event="INSERT INTO activity VALUES ('','$newdate','$newact','$newde')";
		echo $event;
		mysql_query($event) or die ("Strange error");
		mysql_close($connect);	
		header("Location: newevent.php");
 ?>
