<?php
	
	$inputEmail=$_POST["Email"];
	$inputpass=$_POST["pass"];
	
	$localhost = "localhost";
	$user = "root";
	$password = "";
	$database = "acmw7";
	
	$connect = mysql_connect($localhost,$user,$password);
	@mysql_select_db($database)or("Database not found");
	
	$query = "SELECT * FROM eboard WHERE Email = '$inputEmail'";
	$querypass = "SELECT * FROM eboard WHERE password = sha2($inputpass,256) "; //don't put extra quato
	
	$result = mysql_query($query);
	$resultpass = mysql_query($querypass);
	
	$row = mysql_fetch_array($result);
	$rowpass = mysql_fetch_array($resultpass);
	
	$severuser = $row["name"];
	$severpassword = $row["pass"];
	
	if($hashpass == $severpassword){
		header ("Location: create.php");
	}
	 else{
		header ("Location: failedlogin.php");
	}
?>
