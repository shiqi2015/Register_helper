<?php

//get new member
	$newFirst=$_POST["First_name"];
	$newLast=$_POST["Last_name"];
	$newEmail=$_POST["Email"];
	
	$newpass=$_POST["pass"];
	//check if exist
	//care about sercurity information
	
	$local="localhost";
	$database = "acmw7";
	$password = "";
	$username = "root";
	
	
	
	//Main if statement
	if($newFirst&&$newLast&&$newEmail&&$newpass){
		
		$connect = mysql_connect($local,$username,$password) or die("unable to log into database");
		@mysql_select_db($database)or die ("Database not found");
		
		mysql_query("INSERT INTO members value ('','$newFirst','$newLast','$newEmail',sha2('$newpass',256))") or die ("Strange error");
		mysql_close($connect);		
		
		
		$database11 = "members7";
		$password11 = "";
		$username11 = "root";

		$connect11 = mysql_connect($local,$username11,$password11) or die("unable to log into database");
		@mysql_select_db($database11)or die ("Database not found");
		mysql_query("CREATE TABLE $newFirst(
		Date DATE NOT NULL,
		Event_name VARCHAR(60) NOT NULL,
		Detail TEXT,
		PRIMARY KEY(Date)
		)"); 
			
		mysql_close($connect11);
		
		header("Location: welcomenewmem.php");
	} else {
		echo "you need both a username and password";
	}
	
	//check out if there are duplicate
		
		# suppose to check the duplicate
		/*$retval = mysql_query("SELECT name FROM members");
		 if(! $retval ) {
				die('Could not get data: ' . mysql_error());
			}
			
		foreach ($retval as $key => $value) {
			// $arr[3] will be updated with each value from $arr...
			if($value==$newuser){
				echo "You are our member!";
				mysql_close($connect);
			}
		}
		*/
 ?>
