<?php
	
	$user=$_POST["user"];
	
	$pass=$_POST["pass"];
	
	$username = "root";
	$password = "";
	$database = "acmw";
	
	$connect = mysql_connect("localhost",$username,$password);
	@mysql_select_db($database)or("Database not found");
	
	$query = "SELECT * FROM 'acmw' WHERE 'Name' = '$user'";
	$querypass = "SELECT * FROM 'acmw' WHERE 'Password' = '$pass'";
	
	$result = mysql_query($query);
	$resultpass = mysql_query($querypass);
	
	$row = mysql_fetch_array($result);
	$rowpass = mysql_fetch_array($resultpass);
	
	$severname = $row["Name"];
	$severpassword = $row["Password"];
	
	
		if(!$result){
			die("Username or password is not valid.");
		}
		echo "<br><center>Database output</center></br>";
		mysql_close();
	if($severname == $severpassword){
		header ("Location: home.php");
	} else{
		echo "Check your info!";
		header ("Location: failedlogin.php");
	}
	}
?>
