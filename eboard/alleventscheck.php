<html>
<style>
h1 {
    background-color:rgba(192,192,192,0.3);
    font-size: 56px;
    text-align: center;
    font-family: "Times New Roman", Times, serif;
    
}
</style>
<h1>All Activity!<h1>
<body background="pic/acmw.jpg">
<!-- add more formatting-->
<?php

   $localhost = "localhost";
   $username = "root";
   $password = "";
   $database = "acmw7";
   
   $conn = mysql_connect($localhost, $username, $password) or die("unable to log into database");
   @mysql_select_db($database)or die ("Database not found");
   
   $sql = 'SELECT event_id, Date, Event_name, Detail  FROM activity';
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
      echo "### :{$row['event_id']}  <br> ".
         "Date : {$row['Date']} <br> ".
         "Activity : {$row['Event_name']} <br> ".
		 "Detail : {$row['Detail']} <br> ".
         "--------------------------------<br>";
   }
   
   mysql_close($conn);
	
	
 ?>
<form action ="../index.html" method="post">
<input type="submit" value="log out"></input>
 </body>
 </html>
