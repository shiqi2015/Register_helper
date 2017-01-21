<html>
<style>

input[type=submit] {
    color: black;
    font-family: verdana;
    font-size: 20px;
}

input[type=text]{
    width: 130px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-position: 10px 10px;
    background-repeat: no-repeat;
    padding: 8px 12px 8px 26px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
     text-align: center;
}
</style>
<center>
<title>Create new event</title>
<h1>Create new event</h1>
<body >

<form action ="createact.php" method="post">
<h3>DATE</h3>
<input type="text" name="Date"></input><br>
<h3>EVENTS</h3>
<input type="text" name="Event_name"></input><br>
<h3>DETAILS</h3>
<input type="text" name="Detail"></input><br>
<input type="submit" value="enter"></input>
</form>



<form action ="alleventscheck.php" method="post">
<input type="submit" value="View all activities!"></input>
</form>
<form action ="../index.html" method="post">
<input type="submit" value="log out"></input>
</form>
</body>
</center>

</html>