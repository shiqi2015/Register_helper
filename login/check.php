<?php
	session_start();
?>

<html>
<style>
 h1{
	 background-color:rgba(192,192,192,0.3);
    font-size: 56px;
    text-align: center;
    font-family: "Times New Roman", Times, serif;
   }
   
 input[type=submit] {
    color: black;
    font-family: verdana;
    font-size: 20px;
}

body{
	background-image: Users/Administrator.QH-20150721CJHM/Desktop/acmw.jpg;
	background-reoeat: no-repeat;
	background-position:right top;
	bacground-attachment: fixed;
}
</style>

<h1>All Activities I have attended :)<h1>
<body>
<form action ="home.php" method="post">
<input type="submit" value="Go back home"></input>
</form>
<div></div>
<?php

   $localhost = "localhost";
   $username = "root";
   $password = "";
   $database = "members7";
   
   //$table_name = $_SESSION['set'];
   $table_name=$_SESSION['blue'];
   //echo $table_name;
   
   $conn = mysql_connect($localhost, $username, $password) or die("unable to log into database");
   @mysql_select_db($database)or die ("Database not found");
   $retval = mysql_query("SELECT Date, Event_name, Detail FROM $table_name");
  
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
      echo "Date : {$row['Date']} <br> ".
		   "Activity : {$row['Event_name']} <br> ".
		   "Detail : {$row['Detail']}<br>".
		   "-------------------------------<br>";
   }
   mysql_close($conn); 
   
    //$retval = mysql_query("SELECT Date, Event_name, Detail FROM $table_name");
   /*$retval2 = mysql_query("SELECT Date FROM $table_name");
   

   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }*/
  
	
	
 ?>
 <div></div>
 
 </body>
 </html>

 
