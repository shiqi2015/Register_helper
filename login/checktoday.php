<?php
	session_start();
?>

<html>
<style>
h1 {
    background-color:rgba(192,192,192,0.3);
    font-size: 56px;
    text-align: center;
    font-family: "Times New Roman", Times, serif;
    
}
</style>
<h1>Thanks for coming our event!<h1>
<form action ="../index.html" method="post">
<input type="submit" value="log out"></input>
</form>
<body >
<img src="pic/acmw.jpg" style="width:304px;height:228px;"</img><br>

<?php
   
   $localhost11 = "localhost";
   $username11 = "root";
   $password11 = "";
   $database11 = "acmw7";
   
   $connect11 = mysql_connect($localhost11, $username11, $password11) or die("unable to log into database");
   @mysql_select_db($database11)or die ("Database not found");
   
   $sql = "SELECT * FROM activity ORDER BY event_id DESC LIMIT 1";
   $retval = mysql_query($sql);

   $row = mysql_fetch_array($retval);
   
   $date = $row["Date"];
   $act = $row["Event_name"];
   $detail = $row["Detail"];
 
   
   
   mysql_close($connect11);
  
   $localhost = "localhost";
   $username = "root";
   $password = "";
   $database = "members7";
   
   $connect = mysql_connect($localhost, $username, $password) or die("unable to log into database");
   @mysql_select_db($database)or die ("Database not found");
   
   $table_name = $_SESSION['blue'];//Shiqi
   echo $table_name;

   #echo "INSERT INTO $table_name VALUES ('$date','$act','$detail')";
   
  //mysql_query("INSERT INTO $table_name VALUES ('$date','$act','$detail')" )or die ("You already checked in!");
   mysql_query("INSERT INTO $table_name VALUES ('$date','$act','$detail')" )or die ("You already checked in!");
   
   mysql_close($connect);
   
	
	
 ?>
 </body>

 </html>
//the use of the session