<?php


	session_start();
    $inputFirst=$_POST["First"];
	$_SESSION['blue'] = $inputFirst;
	//session_start();
	$inputEmail=$_POST["Email"];
	//$_SESSION['set'] = $inputEmail;
	
	//session_start();
	//$_SESSION['red']=$inputEmail;
	
	$inputpass=$_POST["pass"];
	
	$localhost = "localhost";
	$user = "root";
	$password = "";
	$database = "acmw7";
	
	$connect = mysql_connect($localhost,$user,$password);
	@mysql_select_db($database)or("Database not found");
	
	$queryEmail = "SELECT * FROM members WHERE Email = '$inputEmail'"; //don't put extra quato
	$querypass = "SELECT * FROM members WHERE password = sha2('$inputpass',256)"; //don't put extra quato
	
	$resultEmail = mysql_query($queryEmail);
	$resultpass = mysql_query($querypass);
	
	$rowEmail = mysql_fetch_array($resultEmail);
	$rowpass = mysql_fetch_array($resultpass);
	
	
	if($rowpass||$rowEmail){
	$severEmail= $rowEmail["Email"];
	$severpassword = $rowpass["password"];
	
	echo $severpassword;
	
	/*session_start();
	$severFirst=$rowFirst["First_name"];
	$_SESSION['blue'] = $severFirst;*/
	
	if($severEmail&&$severpassword){
		header ("Location: home.php");
	}else{
		header ("Location: failedlogin.php");
	}}
	mysql_close(); 
	
	/*
	if($inputpass == $severpassword){
		header ("Location: home.php");
		}else{
		header ("Location: failedlogin.php");} 
	mysql_close();
	*/
	
/*	$queryEmail = "SELECT * FROM members WHERE Email = '$inputEmail'";
	$querypass = "SELECT * FROM members WHERE password = '$inputpass'"; //don't put extra quato
	
	$result = mysql_query($queryEmail);
	$resultpass = mysql_query($querypass);
	
	$row = mysql_fetch_array($result);
	$rowpass = mysql_fetch_array($resultpass);
	
	$severpassword = $row["password"];
	
	
	
	if($inputpass == $severpassword){
		header ("Location: home.php");
	}
	 else{
		header ("Location: failedlogin.php");
	} */
	

?>
