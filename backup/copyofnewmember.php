<?php

//get new member
	$newuser=$_POST["user"];
	
	$newpass=$_POST["pass"];
	//check if exist
	
	$local="localhost";
	$database = "acmw";
	$password = "";
	$username = "root";
	
	//Main if statement
	if($newuser&&$newpass){
		
		$connect = mysql_connect($local,$username,$password) or die("unable to log into database");
		@mysql_select_db($database)or die ("Database not found");
		
		mysql_query("INSERT INTO members value ('','$newuser','$newpass')") or die ("Strange error");
		
		mysql_close($connect);
		
		$local1="localhost";
		$database11 = "member";
		$password11 = "";
		$username11 = "root";
		$connect11 = mysql_connect($local11,$username11,$password11) or die("unable to log into database");
		@mysql_select_db($database11)or die ("Database not found");
		$my_qu='CREATE TABLE $newuser (
		times SMALLINT NOT NULL UNSIGNED AUTO_INCREMENT,
		date DATE NOT NULL,
		
		PRIMARY KEY(date)
		)';
		echo mysql_errno($my_qu) . ": " . mysql_error($connect11) . "\n";
		mysql_query($my_qu,$connect11); 
		mysql_close($connect11);
		header("Location: successfullycreate.php");
	} else {
		echo "you need both a username and password";
		
	}
 ?>
