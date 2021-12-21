<!DOCTYPE html>
<html>
<head>
<style>
#but
{
background-color:#FFCCFF;
border-radius:50px;
color:black;
border-width:4px 4px 8px 8px;
border-color:purple;
height:50px;
width:100px;
text-size:12px;
}
body{
background-color:black;
background-position:top;
background-image:url("https://images.hdqwalls.com/wallpapers/computer-desktop-minimalism-lu.jpg");
background-size:1500px 780px;
background-repeat:no-repeat;
}
</style>
</head>
<body>
<center>
<h1><b><font face="CENTURY GOTHIC" color=white size="64">Welcome</font></b></h1><br><br>
<h2><font face="Candara" color=00FFFF>To the Deletion Page</font></h2><br><br><br><br>
</center>
<form action="delete.php" method="post">
<center>
<h2><font color=99FF99 face="CENTURY GOTHIC">Enter Name :&nbsp&nbsp&nbsp<input type=text placeholder="your NAME here" id=n name="n" required></font><h2><br><br><br>
<input type=submit value="Submit" id=but>&nbsp&nbsp&nbsp&nbsp&nbsp
<br><br>
<font color=white>
<?php
error_reporting(0);
$con=new mysqli("localhost","root","","login");
if($con->connect_error)
{
die("Connection Failed : ".$con->connect_error);
}
else
{
echo "Connection Done.   ";
}
$name=$_POST['n'];
$mo="DELETE FROM student WHERE Name='$name'";
if($con->query($mo)==TRUE)
{
echo "   Record has been DELETED.";
}
else
{
echo "Record not DELETED".$con->error;
}
$con->close();
?>
</font>
</center>
<br>
</form>
<h2><b><center><font color=#99CCFF face="Gabriola"><a href="list.php">Back to ADMINISTRATION Block</a></font></center></b></h2><br>
</body>
</html>